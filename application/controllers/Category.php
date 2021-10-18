<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller {
    function index() {
        $this->load->model("Utils_model");
        $major = $this->input->get('Major');
        $data['courses'] = $this->Utils_model->get_course_by_major_name($major);
        foreach($data['courses'] as $key => $value) {
            if ($value['course_id'] == null) {
                $data['courses'][$key]["favourite_number"] = "0";
            }
            unset($data['courses'][$key]['course_id']);
        }
        $data['courses'] = json_encode($data['courses']);
        $data['field'] = $major;
        $this->load->view('template/navbar');
        $this->load->view('category.php',$data);
        $this->load->view('template/footer');
    }
}
