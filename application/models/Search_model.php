<?php


class Search_model extends CI_Model{

    function fetch_course_name($course_name){
        $sql = "SELECT c.course_id 
        as cid,c.course_name,c.course_img_path,u.username,f.course_id,COUNT(*) as favourite_number 
        FROM upload_list c left join favorite_list f on(c.course_id = f.course_id),user u 
        WHERE c.course_name LIKE '%$course_name%' AND c.author_id = u.id 
        GROUP BY c.course_id Order by favourite_number DESC";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}