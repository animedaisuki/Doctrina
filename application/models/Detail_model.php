<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_model extends CI_Model{
    public function get_course_detail($cid) {
        $query = $this->db->query("SELECT learning_obj
        FROM course_detail
        WHERE cid = '$cid'");
        return $query;
    }

    function get_course_data($cid)
    {
    $query = $this->db->query("SELECT course_name, course_id, course_img_path, course_description, intro, upload_date, username
    FROM upload_list, user
    WHERE 
    upload_list.course_id = '$cid' AND upload_list.author_id = user.id;");
    return $query;
    }

    function delete_course($cid) {
        $this->db->query("DELETE FROM upload_list
        WHERE 
        upload_list.course_id = '$cid';");
    }

    function delete_favourite_course($cid) {
        $this->db->query("DELETE FROM favorite_list
        WHERE 
        favorite_list.course_id = '$cid';");
    }

    function add_favourite_course($uid, $cid) {
        $data = array(
            'uid' => $uid,
            'course_id' => $cid,
        );
        return $this->db->insert('favorite_list', $data);
    }

    function check_favourite($cid, $username)
    {
    $query = $this->db->query("SELECT favorite_list.id
    FROM user,favorite_list
    WHERE
    user.username = '$username'
    AND user.id = favorite_list.uid
    AND favorite_list.course_id = '$cid'
    ");
    return $query->row_array();
    }
    
}