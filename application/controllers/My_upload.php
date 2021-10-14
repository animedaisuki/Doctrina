<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_upload extends CI_Controller
{
    public function index()
    {
        $this->load->model('list_model');
        $data['list'] = $this->list_model->fetch_uploads_data($_SESSION['username']);
        $data['title'] = 'upload';
        $this->load->view('template/navbar');
        $this->load->view('accountSetting/my_favourite', $data);
        $this->load->view('template/footer');
    }
}