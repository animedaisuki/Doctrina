<?php


class Ajax_search extends CI_Controller{
    function search_course_name() {
        $this->load->model('ajax_model');
        $query = $this->input->post('search');//get value from search box
        $data = $this->ajax_model->auto_search_file_name($query);//find the value in database
        if ($query != null) {
            if ($data != null) {
                echo json_encode($data->result());
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

}