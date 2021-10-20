<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    function index(){

        $this->load->model('login_model');
        $this->load->model('login_model2');
        $this->load->helper('form');
		$this->load->helper('url');

        //用谷歌账号登入（session里，logged_in代表谷歌登入，login代表普通登入）
        // if (!$this->session->userdata('login')){
        //     $this->load->view('template/navbar');
        // } else{
        //     $username = $this->session->userdata('username');
        //     // var_dump($username);
        //     $result_array = $this->login_model2->find_picture_path($username);
        //     if($result_array){
        //         foreach ($result_array as $key=>$result_item){
        //         $data['picture'] = $result_item['user_picture_path'];
        //     }
        //     // var_dump($data['result']);
            
        //     $this->load->view('template/navbar_login', $data);
        //     } else{
        //         //代表没有头像的情况,暂时先用这个view(一般不会出现这种情况，谷歌账号即使无头像也会根据用户名生成小图像)
        //         $this->load->view('template/navbar');
        //     }
        // }
        $username = $this->session->userdata('username');
        // $data['picture']='';
        $result_array = $this->login_model2->find_picture_path($username);
        // if($result_array){
        //     foreach ($result_array as $key=>$result_item){
        //         $data['picture'] = $result_item['user_picture_path'];
        //     }
        // }
        //还需要判断普通登入的情况，需要再做一个navbar的view

        //获取初始化推荐课程数据
        $this->load->model('Utils_model');
        $data['python'] = $this->Utils_model->get_course_by_major_name("python");
        foreach($data['python'] as $key => $value) {
            if ($value['course_id'] == null) {
                $data['python'][$key]["favourite_number"] = "0";
            }
            unset($data['python'][$key]['course_id']);
        }
        //获取最受喜爱的老师数据
        $data['popular_teachers'] = $this->Utils_model->get_teachers_by_favourite_number();
        $data['popular_teachers'] = json_encode($data['popular_teachers']);
        $data['python'] = json_encode(array_slice($data['python'],0,5));

        //获取最收欢迎课程数据
        $data['popular_course'] = $this->Utils_model->get_popular_courses();
        $data['popular_course'] = json_encode($data['popular_course']);
        $this->load->view('template/navbar');
        $this->load->view('homepage',$data);
        $this->load->view('template/footer');
    }

    function fetch_most_favourite_course() {
        $major = $this->input->post('field');
        $this->load->model('Utils_model');
        $result = $this->Utils_model->get_course_by_major_name($major);
        foreach($result as $key => $value) {
            if ($value['course_id'] == null) {
                $result[$key]["favourite_number"] = "0";
            }
            unset($result[$key]['course_id']);
        }
        echo json_encode(array_slice($result,0,5));
    }
}