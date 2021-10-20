<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Utils_model extends CI_Model {
    function get_uid_by_username($username) {
        $sql = "SELECT id FROM user WHERE username = '$username'";
        $result = $this->db->query($sql);
        return $result->row_array()['id'];
    }

    function get_cid_by_uuid($uuid) {
        $sql = "SELECT course_id FROM upload_list WHERE uuid = '$uuid'";
        $result = $this->db->query($sql);
        return $result->row_array()['course_id'];
    }



    function get_file_by_cid_and_week($cid,$currentWeek) {
        $sql = "SELECT uuid,filename FROM doc_path WHERE cid = '$cid' AND week = '$currentWeek'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    function get_video_by_cid_and_week($cid,$currentWeek) {
        $sql = "SELECT uuid,filename FROM video_path WHERE cid = '$cid' AND week = '$currentWeek'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    function get_max_week_by_cid($cid) {
        $doc_sql = "SELECT week FROM doc_path WHERE cid = '$cid' ORDER BY week DESC LIMIT 1";
        $video_sql = "SELECT week FROM video_path WHERE cid = '$cid' ORDER BY week DESC LIMIT 1";
        $doc_result = $this->db->query($doc_sql);
        $video_result = $this->db->query($video_sql);
//        var_dump($video_result->row_array());
//        var_dump($doc_result->row_array());
        if ($doc_result->row_array() == null && $video_result->row_array() == null) {
            return 1;
        } else if ($doc_result->row_array() != null && $video_result->row_array() == null) {
            return $doc_result->row_array()['week'];
        } else if ($doc_result->row_array() == null && $video_result->row_array() != null) {
            return $video_result->row_array()['week'];
        }
        if ($doc_result->row_array()['week'] >= $video_result->row_array()['week']) {
            return $doc_result->row_array()['week'];
        }

        return $video_result->row_array()['week'];
    }

    function get_course_by_major_name($major) {
        $sql =
            "SELECT c.course_id as cid,c.course_name,c.course_img_path,u.username,f.course_id,COUNT(*) as favourite_number 
             FROM upload_list c left join favorite_list f on(c.course_id = f.course_id),user u 
             WHERE c.field = '$major' AND c.author_id = u.id GROUP BY c.course_id Order by favourite_number DESC";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    function get_teachers_by_favourite_number() {
        $sql = "SELECT u.id,u.username,u.user_picture_path as avatar, COUNT(*) as favourite_number 
                FROM user u, upload_list ul,favorite_list fl 
                where u.id = ul.author_id AND ul.course_id = fl.course_id 
                GROUP BY u.id
                ORDER BY favourite_number DESC";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    function get_popular_courses() {
        $sql = "SELECT ul.course_id,ul.course_img_path,ul.course_name,COUNT(*) as favourite_number,u.username 
                FROM user u,upload_list ul,favorite_list fl 
                WHERE u.id = ul.author_id AND ul.course_id = fl.course_id 
                GROUP BY ul.course_id 
                ORDER BY favourite_number DESC LIMIT 5";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

}

?>
