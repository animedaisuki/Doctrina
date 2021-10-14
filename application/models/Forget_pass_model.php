<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget_pass_model extends CI_Model{

    function add_token($id, $email, $token, $date){
        $data['uid'] = $id;
        $data['email'] = $email;
        $data['token'] = $token;
        $data['date'] = $date;
        $this->db->insert('forget_pass_token', $data);
    }

    function check_token($email, $token){
        $this->db->select('email');
        $this->db->where('token', $token);
        $result = $this->db->get('forget_pass_token');
        if ($result->num_rows() >= 1) {
            return true;
        }
        return false;
    }

    function update_pass($email, $password){
        $data['password'] = $password;
        $this->db->where('email', $email);
        $this->db->update('user', $data);
    }
}