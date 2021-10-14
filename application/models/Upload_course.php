<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_course extends CI_Model {
    function insert_file($filepath,$filename,$uid,$cid,$week,$uuid) {
        $data = array(
            "filename"=>$filename,
            "uid"=>$uid,
            "cid"=>$cid,
            "path"=>$filepath,
            "week"=>$week,
            "uuid"=>$uuid
        );
        $this->db->insert('doc_path',$data);
    }

    function insert_video($filepath,$filename,$uid,$cid,$week,$uuid) {
        $data = array(
            "filename"=>$filename,
            "uid"=>$uid,
            "cid"=>$cid,
            "path"=>$filepath,
            "week"=>$week,
            "uuid"=>$uuid
        );
        $this->db->insert('video_path',$data);
    }

    function delete_file($uuid) {
        $sql = "DELETE FROM doc_path WHERE uuid = '$uuid'";
        $this->db->query($sql);
    }
    function delete_video($uuid) {
        $sql = "DELETE FROM video_path WHERE uuid = '$uuid'";
        $this->db->query($sql);
    }

}

?>
