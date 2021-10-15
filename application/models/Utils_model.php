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
        $doc_sql = "SELECT week FROM doc_path WHERE cid = `$cid` ORDER BY week DESC LIMIT 1";
        $video_sql = "SELECT week FROM video_path WHERE cid = `$cid` ORDER BY week DESC LIMIT 1";
        $doc_result = $this->db->query($doc_sql);
        $video_result = $this->db->query($video_sql);
        if ($doc_result->row_array()['week'] >= $video_result->row_array()['week']) {
            return $doc_result->row_array()['week'];
        }
        return $video_result->row_array()['week'];
    }

}

?>
