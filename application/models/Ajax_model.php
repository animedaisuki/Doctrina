<?php


class Ajax_model extends CI_Model {

    function find_email($query){
        if ($query != null) {
            $this->db->select('email');
            $this->db->where('email', $query);
            $result = $this->db->get('user');
            if ($result->num_rows() >= 1) {
                return true;
            }
            return false;
        } else {
            return false;
        }
    }

    function search_file_name($query){
        if ($query != null) {
            $result =$this->db->select('course_name')
                ->from('upload_list')
                ->join('user', 'upload_list.author_id=user.id')
                ->like('course_name', $query)
                ->or_like('username', $query)
                ->get();
            return $result->result_array();
        }
        return false;
    }

    function auto_search_file_name($query){
        if ($query != null) {
            $result =$this->db->select('course_name')
                ->from('upload_list')
                ->join('user', 'upload_list.author_id=user.id')
                ->like('course_name', $query)
                ->or_like('username', $query)
                ->get();
            return $result;
        }
        return null;
    }


}