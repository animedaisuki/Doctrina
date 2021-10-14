<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountSetting extends CI_Controller {
	function index() {
		if($this->session->userdata('username')) {
			$this->load->view('template/navbar');
			$this->load->view('accountSetting/account_setting');
        	$this->load->view('template/footer');
		} else {
			redirect('/login');
		}
        
		// $user_data = array(
		// 	'username' => 'ziqiyuan',
		// 	'userId' => 5
		// );
		// $this->session->set_userdata($user_data);
	}
	function change_password() {
		$this->load->model('User_Profile');
		$newPW = $this->input->post('newPassword');
		$result = $this->User_Profile->change_password($this->session->userdata('username'),$newPW);
		if ($result == 1) {
			$feedback = array("msg" => "1");
		} else {
			$feedback = array("msg" => "0");
		}
		echo Json_encode($feedback);
	}
	function change_email() {
		$this->load->model('User_Profile');
		$newEmail = $this->input->post('newEmail');
		$email_repeated = $this->User_Profile->check_newEmail($newEmail);
		$result = array("repeated" => "0");
		if ($email_repeated) {
			$result = array("repeated" => "1");
			echo Json_encode($result);
		} else {
			$this->send_email($newEmail);
			echo Json_encode($result);
		}
	}

	public function send_email($newEmail) {
		$username = $this->session->userdata('username');
		$this->load->model('User_Profile');
		$token = base64_encode(random_bytes(16));
		$data = array('token' => $token);
		$this->session->set_userdata($data);
		$this->User_Profile->insert_token($username, $newEmail, $token);

		$config = Array(
			'protocol'=>'smtp',
			'smtp_host'=>'mailhub.eait.uq.edu.au',
			'smtp_port'=>25,
			'mailtype'=>'html',
			'charset'=>'iso-8859-1',
			'wordwrap'=>true,
			'mailtype'=>'html',
			'starttls'=>true,
			'newline'=>"\r\n"
		);
		$this->email->initialize($config);
		$this->email->from('ziqi.yuan@uqconnect.edu.au');
		$this->email->to($newEmail);
		$this->email->subject('verifyEmail');
		$message = 'click the link below to reset your password: 
			<a href="'.base_url().'AccountSetting/set_newEmail?email='.$newEmail.'&token='.urlencode($token).'">Verify</a>';
		$this->email->message($message);
		$this->email->send();
	}
	
	public function set_newEmail() {
		$this->load->model('User_Profile');
		$newEmail = $this->input->get('email');
		$token = $this->input->get('token');
		if($this->User_Profile->token_expired($token)) {
			echo "page has expired";
		} else {
			$username = $this->User_Profile->get_username_byToken($token);
			$this->User_Profile->update_email($username, $newEmail);
			$this->load->view('password_success');
			$this->User_Profile->delete_token($username);
		}
	}
}
