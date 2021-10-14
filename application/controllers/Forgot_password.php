<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller{
     
    function index(){
        $this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/navbar');
        $this->load->view('login_signup/forgot_password');
        $this->load->view('template/footer');
    }


}