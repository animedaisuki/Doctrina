<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_profile extends CI_Controller {
	function index() {
        if($this->session->userdata('username')){
            $this->load->model('User_Profile');
            $email = $this->User_Profile->get_email_by_username($this->session->userdata('username'));
            $list = $this->User_Profile->get_user_data($this->session->userdata('username'));
            $data = array(
                'email' => "Email not verified",
                'username'=> $this->session->userdata('username'),
                'institution' => $list->row_array()['Institution'],
                'gender' => $list->row_array()['gender'],
                'major' => $list->row_array()['Major'],
                'picture' => $this->session->userdata('picture')
            );
            if($email != "") {
                $data['email'] = $email;
            }
            $this->load->view('template/navbar');
            $this->load->view('accountSetting/my_profile', $data);
            $this->load->view('template/footer');
        } else {
            redirect('/login');
        }
    }

	function change_information() {
		$username = $this->session->userdata('username');
		$this->load->model('User_Profile');
// 		$newUsername = $this->input->post('newUsername');
		$institution = $this->input->post('institution');
		$major = $this->input->post('major');
		$gender = $this->input->post('gender');
		$feedback = array("repeated" => "0");
// 		if($this->User_Profile->username_repeated($newUsername)) {
// 			$feedback = array("repeated" => "1");
// 			echo Json_encode($feedback);
// 			exit();
// 		}
		$this->User_Profile->update_information($username,$institution,$major,$gender);
		echo Json_encode($feedback);
	}
}

?>
