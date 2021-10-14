<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_model extends CI_Model{

    function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user');

        if ($result->num_rows() == 1) {
            return true;
        }
        return false;
    }

    function find_password($username){
        $this->db->select('password');
        $this->db->where('username', $username);
        $result = $this->db->get('user');
        if ($result->num_rows() == 0) {
            return 0;
        }
        $result = $result->result_array();
        foreach ($result as $key=>$val){
            $password = $val['password'];
        }
        return $password;
    }

    function find_picture($username){
        $this->db->select('user_picture_path');
        $this->db->where('username', $username);
        $result = $this->db->get('user');
        if ($result->num_rows() == 0) {
            return false;
        }
        $result = $result->result_array();
        foreach ($result as $key=>$val){
            $picture = $val['user_picture_path'];
        }
        return $picture;
    }

    function find_id_by_email($email){
        $this->db->select('id');
        $this->db->where('email', $email);
        $result = $this->db->get('user');
        $result = $result->result_array();
        foreach ($result as $key=>$val){
            $id= $val['id'];
        }
        return $id;
    }

}