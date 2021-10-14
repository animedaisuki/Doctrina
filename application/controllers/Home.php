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
        $this->load->view('template/navbar');
        $this->load->view('homepage');
        $this->load->view('template/footer');
    }
}