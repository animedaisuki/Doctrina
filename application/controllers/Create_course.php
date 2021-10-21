<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_course extends CI_Controller{
    function index(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/navbar');
        $this->load->view("accountSetting/createNewCourse");
        $this->load->view('template/footer');
    }

    function courseCreate() {

        $this->load->model('Create_course_model');
        $this->load->model('Utils_model');

        $course_name = $this->input->post('Coursename');
        $field = $this->input->post('Field');
        $introduction = $this->input->post('Introduction');
        $description = $this->input->post('Description');
        $picture = base_url()."assets/img/course_default.jpg";
        $uuid = $this->input->post('uuid');
        $data['uuid'] = $uuid;
        $uid = $this->Utils_model->get_uid_by_username($_SESSION['username']);

        $course_create = array(
            'course_name' => $course_name,
        );

        $this->session->set_userdata($course_create);

        $config['upload_path'] = 'assets/img/';
        $config['allowed_types'] = 'png|jpg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        
        if($this->upload->do_upload('filePicture')) {
            $filename = $this->upload->data('file_name');
            $filepath = base_url()."assets/img/".$filename;
            $this->Create_course_model->upload_course($course_name, $field, $introduction, $description, $uid, $filepath,$uuid);
        } else {
            $this->Create_course_model->upload_course($course_name, $field, $introduction, $description, $uid, $picture,$uuid);
        }

        $this->load->view('template/navbar');
        $this->load->view('accountSetting/UwillLearn',$data);
        $this->load->view('template/footer');

    }

    function add_learned() {
        $this->load->model('Create_course_model');
        $this->load->model('Utils_model');
        $uuid = $this->input->post('uuid');
        $uid = $this->Utils_model->get_uid_by_username($_SESSION['username']);
        $views = 0;
        $numberofitem = 1;

        $course_id = $this->Create_course_model->get_cid_by_course($uid, $_SESSION['course_name']);

        // for ( $numberofitem < 10; $numberofitem++) {
        while (!empty($_POST["$numberofitem"])) {
            $learning_obj = $_POST["$numberofitem"];
            $this->Create_course_model->add_learned($course_id, $learning_obj, $views);
            $numberofitem++;
        } 
        Header("Location:".base_url()."Upload?uuid=".$uuid);
        exit();
    }
}