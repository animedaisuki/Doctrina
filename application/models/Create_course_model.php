<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_course_model extends CI_Model{
    public function upload_course($course_name, $field, $intro, $description, $Author, $course_img_path,$uuid) {
        $data = array(
            'course_name' => $course_name,
            'course_description' => $description,
            'author_id' => $Author,
            'intro' => $intro,
            'field' => $field,
            'course_img_path' => $course_img_path,
            'upload_date' => $today = date("Y-m-d"),
            'uuid' =>$uuid,
        );
        return $this->db->insert('upload_list', $data);
    }

    public function add_learned($course_id, $learning_obj, $views) {
        $data = array(
            'cid' => $course_id,
            'learning_obj' => $learning_obj,
            'views' => $views,
        );
        return $this->db->insert('course_detail', $data);
    }

    function get_cid_by_course($uid, $course_name) {
        $sql = "SELECT course_id FROM upload_list WHERE author_id = '$uid' AND course_name = '$course_name'";
        $result = $this->db->query($sql);
        return $result->row_array()['course_id'];
    }
}