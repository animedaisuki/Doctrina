<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_sign extends CI_Controller{
     
    function index(){
        $this->load->view('template/navbar');
        $this->load->view('login_signup/signup2');
        $this->load->view('template/footer');
    }
}