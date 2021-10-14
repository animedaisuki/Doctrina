<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Q_n_a extends CI_Controller{
    function index(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/navbar');
        $this->load->view("q_n_a");
        $this->load->view('template/footer');
    }
}