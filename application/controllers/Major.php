<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Major extends CI_Controller{

    function index(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/navbar');
        $this->load->view('major');
        $this->load->view('template/footer');
    }

}