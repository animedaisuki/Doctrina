<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lecture extends CI_Controller{
    function index(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('lecture_model');

        $cid = $this->input->get('cid');
        $docs= $this->lecture_model->fetch_doc_by_cid($cid);
        $videos= $this->lecture_model->fetch_video_by_cid($cid);
        $author = $this->lecture_model->fetch_author_by_cid($cid);
        $course_name = $this->lecture_model->fetch_course_name_by_cid($cid);
        $course_desc = $this->lecture_model->fetch_course_desc_by_cid($cid);

        $data['docs'] = json_encode($docs);
        $data['videos'] = json_encode($videos);
        $data['author'] = $author;
        $data['course_name'] = $course_name;
        $data['desc'] = $course_desc;

        $this->load->view('template/navbar');
        $this->load->view('lecture', $data);
        $this->load->view('template/footer');
    }
}