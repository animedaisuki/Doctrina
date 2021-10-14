<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller{

    function index(){
		$this->load->model('Utils_model');
		$this->load->model('login_model');

		
		$data['uid'] = $this->Utils_model->get_uid_by_username($_SESSION['username']);
		$data['picture'] = $this->login_model->find_picture($_SESSION['username']);
		$data['username'] = $_SESSION['username'];

		$uuid=$this->input->get('uuid');
		$cid = $this->Utils_model->get_cid_by_uuid($uuid);
		$this->session->set_userdata(array(
			"cid"=>$cid
		));
		$max_week = $this->Utils_model->get_max_week_by_cid($cid);
		$data['cid'] = $cid;
		$data['max_week'] = $max_week;

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/navbar');
        $this->load->view("upload", $data);
        $this->load->view('template/footer');
		
    }

    // public function do_upload() {
    //     function multifile_array() {
            
    //     }
    // }

    function upload_files(){
		$week = $this->input->get('week');
		$uuid = $this->input->get('uuid');
		var_dump($uuid);
		
		if(!empty($_FILES)){
			$this->load->model('Upload_course');
			$this->load->model('Utils_model');

			$config['upload_path'] = 'uploads/files/';
			$config['allowed_types'] = 'doc|csv|png|pdf|docx';
			
			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// $this->upload->do_upload('file');

			if($this->upload->do_upload('file')) {
				$uid = $this->Utils_model->get_uid_by_username($_SESSION['username']);
				$filename = $this->upload->data('file_name');
				// $filepath = $this->upload->data('full_path');
				$filepath= base_url().'uploads/files/'.$filename;
				$cid = $this->session->userdata("cid");
				$this->Upload_course->insert_file($filepath,$filename,$uid,$cid,$week,$uuid);

			}
		}
	}

	function upload_videos(){
		$week = $this->input->get('week');
		$uuid = $this->input->get('uuid');
		// var_dump($week);
		if(!empty($_FILES)){
			$this->load->model('Upload_course');
			$this->load->model('Utils_model');

			$config['upload_path'] = 'uploads/videos/';
			$config['allowed_types'] = 'mp4|mkv|rmvb|avi|docx';
			$config['max_size'] = "9999999";
			
			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// $this->upload->do_upload('file');

			if($this->upload->do_upload('file')) {
				$uid = $this->Utils_model->get_uid_by_username($_SESSION['username']);
				$filename = $this->upload->data('file_name');
				// $filepath = $this->upload->data('full_path');
				$filepath= base_url().'uploads/videos/'.$filename;
				$cid = $this->session->userdata("cid");
				$this->Upload_course->insert_video($filepath,$filename,$uid,$cid,$week,$uuid);
				
			}
		}
	}
	
	function delete_file() {
		$this->load->model('Upload_course');
		$uuid = $this->input->post("uuid");
		$this->Upload_course->delete_file($uuid);
	}
	function delete_video() {
		$this->load->model('Upload_course');
		$uuid = $this->input->post("uuid");
		$this->Upload_course->delete_video($uuid);
	}

	function retrieve_file() {
		$this->load->model("Utils_model");
		$currentWeek = $this->input->post('currentWeek');
		$cid = $this->input->post('cid');
		$file_result = $this->Utils_model->get_file_by_cid_and_week($cid,$currentWeek);
		$video_result = $this->Utils_model->get_video_by_cid_and_week($cid,$currentWeek);
		$result = array();
		foreach($file_result as $key=>$item) {
			// array_push($item,"fileType"=>"file");
			$item['fileType'] = "file";
			array_push($result,$item);
		}
		foreach($video_result as $key=>$item) {
			$item['fileType'] = "video";
			array_push($result,$item);
		}
		// var_dump(json_encode($result)); 
		// var_dump($file_result);
		echo json_encode($result);
	}
}