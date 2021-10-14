<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('encryption');
    }
     
    public function index(){
        $data['error']= "";
		$this->load->view('template/navbar');
        $this->load->view('login_signup/signup1', $data);
        $this->load->view('template/footer');
    }

    public function register_page1()
    {       
        $this->form_validation->set_rules('signup-firstname', 'First Name', 'required|min_length[1]|max_length[15]');
        $this->form_validation->set_rules('signup-lastname', 'Last Name', 'required|min_length[1]|max_length[15]');
        $this->form_validation->set_rules('signup-username', 'Username', 'required|callback_check_username_exists|min_length[1]|max_length[20]');
        $this->form_validation->set_rules('signup-email', 'Email', 'required|callback_check_email_exists|min_length[6]|max_length[50]|valid_email');
        $this->form_validation->set_rules('signup-password', 'Password', 'required|min_length[6]|max_length[25]');
        $this->form_validation->set_rules('signup-confirmpassword', 'Confirm Password', 'matches[signup-password]');

        if($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            $first_name = $this->input->post('signup-firstname');
            $last_name = $this->input->post('signup-lastname');
            $username = $this->input->post('signup-username');
            $email = $this->input->post('signup-email');
            $org_password = $this->input->post('signup-password');
            $enc_password = password_hash($org_password, PASSWORD_DEFAULT);
            $picture = base_url()."assets/img/user_default.png";
            $user_create = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'username' => $username,
                'email' => $email,
                'enc_password' => $enc_password,
                'user_picture' => $picture
            );
            $this->session->set_userdata($user_create);
            $data['error']= "";
            $this->load->view('template/navbar');
            $this->load->view('login_signup/signup2', $data);
            $this->load->view('template/footer');
        }
    }

    public function register_page2() {
        $this->form_validation->set_rules('signup-institution', 'Institution', 'required');
        if($this->form_validation->run() === FALSE) {
            $data['error']= "";
            $this->load->view('template/navbar');
            $this->load->view('login_signup/signup2', $data);
            $this->load->view('template/footer');
        } else {
        $this->load->model('Sign_up_model');
        $institution = $this->input->post('signup-institution');
        $this->Sign_up_model->register($_SESSION['enc_password'], $_SESSION['first_name'], $_SESSION['last_name'], $_SESSION['email'], $_SESSION['username'], $institution, $_SESSION['user_picture']);
        $this->session->sess_destroy();
        redirect('home');
        }
    }

    public function check_email_exists($email) {
        $this->load->model('Sign_up_model');
        $this->form_validation->set_message('check_email_exists', 'Email already used, please use another one!');
    
        if($this->Sign_up_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    }

    public function check_username_exists($username) {
        $this->load->model('Sign_up_model');
        $this->form_validation->set_message('check_username_exists', 'Username already used, please use another one!');

        if($this->Sign_up_model->check_username_exists($username)) {
            return true;
        } else {
            return false;
        }
    }
    
}