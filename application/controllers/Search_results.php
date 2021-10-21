<?php


class Search_results extends CI_Controller{

    function index(){

    }


    function do_search(){
        //https://localhost/demo/index.php/search_results/do_search?course_name=xxxxx
        $course_name = $this->input->post('auto');
        Header("Location:".base_url()."Search_results/show_results?auto=".$course_name);
        exit();

    }

    function show_results(){
        $this->load->model('search_model');
        $course_name = $this->input->get('auto');
        $result = $this->search_model->fetch_course_name($course_name);
        foreach($result as $key => $value) {
            if ($value['course_id'] == null) {
                $result[$key]['favourite_number'] = "0";
            }
            unset($result[$key]['course_id']);
        }
        $data['courses'] = json_encode($result);
        $data['field'] = $course_name;
        $this->load->view('template/navbar');
        $this->load->view('category.php',$data);
        $this->load->view('template/footer');



    }
}
