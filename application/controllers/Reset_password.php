<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_password extends CI_Controller{
     
    function index(){
        $this->load->helper('form');
        $this->load->helper('url');
        // $this->session->unset_userdata('reset');
        if($this->session->userdata('reset')){
            $this->load->view('template/navbar');
            $this->load->view('login_signup/reset_password');
            $this->load->view('template/footer');
        } else{
            redirect('login');
        }
    }
}