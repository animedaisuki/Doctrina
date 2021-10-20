<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here 
 class List_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }

    function fetch_favourite_data($username)
    {
    $query = $this->db->query("SELECT upload_list.course_name, upload_list.course_id, u1.username, upload_list.upload_date
    FROM user u1,user u2,favorite_list,upload_list
    WHERE 
    u2.username = '$username'
    AND u2.id = favorite_list.uid
    AND favorite_list.course_id = upload_list.course_id 
    AND upload_list.author_id = u1.id 
    OR u2.email = '$username'
    AND u2.id = favorite_list.uid
    AND favorite_list.course_id = upload_list.course_id 
    AND upload_list.author_id = u1.id");
    return $query;
    }



    function fetch_uploads_data($username)
    {
    $query = $this->db->query("SELECT upload_list.course_name, upload_list.course_id, user.username, upload_list.upload_date, upload_list.uuid
    FROM user, upload_list
    WHERE 
    user.username = '$username'
    AND upload_list.author_id = user.id");
    return $query;
    }
}