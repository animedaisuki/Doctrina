<?php


class Lecture_model extends CI_Model{

    // video_path, video_name, doc_path, doc_name, author

    // week, doc_path, doc_name
    function fetch_doc_by_cid($cid){
        $this->db->select('week');
        $this->db->select('filename');
        $this->db->select('path');
        $this->db->where('cid', $cid);
        $this->db->order_by('week', 'asc');
        $result = $this->db->get('doc_path');
        return $result->result_array();
    }

    function fetch_video_by_cid($cid){
        $this->db->select('week');
        $this->db->select('filename');
        $this->db->select('path');
        $this->db->where('cid', $cid);
        $this->db->order_by('week', 'asc');
        $result = $this->db->get('video_path');
        return $result->result_array();
    }

    //author
    function fetch_author_by_cid($cid){
        $this->db->select('username');
        $this->db->from('user');
        $this->db->join('upload_list','user.id = upload_list.author_id');
        $this->db->where('course_id', $cid);
        $result = $this->db->get();
        return $result->result_array()[0]['username'];
    }

    function fetch_course_name_by_cid($cid){
        $this->db->select('course_name');
        $this->db->from('upload_list');
        $this->db->where('course_id', $cid);
        $result = $this->db->get();
        return $result->result_array()[0]['course_name'];
    }

    function fetch_course_desc_by_cid($cid){
        $this->db->select('course_description');
        $this->db->from('upload_list');
        $this->db->where('course_id', $cid);
        $result = $this->db->get();
        return $result->result_array()[0]['course_description'];
    }
}
