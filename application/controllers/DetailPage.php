<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPage extends CI_Controller{
    function index(){
        $this->load->helper('form');
		$this->load->helper('url');
        $this->load->model('Detail_model');
        $cid = $this->input->get('cid');
        $favourite = $this->Detail_model->check_favourite($cid, $_SESSION['username']);
//         var_dump($favourite);
        if (is_null($favourite)) {
            $data['favourite'] = true;
        } else {
            $data['favourite'] = false;
        }
        $data['course_info'] = $this->Detail_model->get_course_data($cid);
        $data['what_to_Learn'] = $this->Detail_model->get_course_detail($cid);

        $data['cid'] = $cid;
		$this->load->view('template/navbar');
        $this->load->view('detailpage', $data);
        $this->load->view('template/footer');
    }

    function delete_course() {
        $cid = $this->input->get('cid');
        $this->load->model('Detail_model');
        $this->Detail_model->delete_course($cid);
    }

    function delete_favourite_course() {
        $cid = $this->input->get('cid');
        $this->load->model('Detail_model');
        $this->Detail_model->delete_favourite_course($cid);
    }

    function Add_favourite_course() {
        $this->load->model('Utils_model');
        $this->load->model('Detail_model');
        $uid = $this->Utils_model->get_uid_by_username($_SESSION['username']);
        $cid = $this->input->get('cid');
        $this->Detail_model->add_favourite_course($uid, $cid);
    }
}