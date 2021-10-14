<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller{
    function index(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/navbar');
        $this->load->view("about_us");
        $this->load->view('template/footer');
        //test
    }
}