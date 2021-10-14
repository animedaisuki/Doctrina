<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lecture extends CI_Controller{
    function index(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/navbar');
        $this->load->view('lecture');
        $this->load->view('template/footer');
    }
}