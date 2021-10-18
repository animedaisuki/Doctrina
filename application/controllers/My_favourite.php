<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_favourite extends CI_Controller
{
    public function index()
    {
        $this->load->model('list_model');
        $data['list'] = $this->list_model->fetch_favourite_data($_SESSION['username']);
        $data['title'] = 'favourite';
        $this->load->view('template/navbar');
        $this->load->view('accountSetting/my_favourite', $data);
        $this->load->view('template/footer');
    }
}