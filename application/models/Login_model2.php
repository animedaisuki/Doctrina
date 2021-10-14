<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model2 extends CI_Model {

    function __construct() {
        $this->tableName = 'user';
    }

    public function checkUser($data = array()){
        $this->db->select('username');
        $this->db->from($this->tableName);

        $con = array(
            'oauth_provider' => $data['oauth_provider'],
            'username' => $data['oauth_uid']
        );

        $this->db->where($con);
        $query = $this->db->get();

        $check = $query->num_rows();
        if($check > 0){
            $result = $query->row_array();
            $username = $result['username'];
        }else{
            $data1['username'] = $data['oauth_uid'];
            // $data1['username'] = $data['first_name'];
            $data1['fname'] = $data['first_name'];
            $data1['lname'] = $data['last_name'];
            $data1['email'] = $data['email'];
            $data1['password'] = base64_encode(random_bytes(32));
            $data1['user_picture_path'] = $data['picture'];
            $data1['email_verified'] = 1;
            $data1['oauth_provider'] = 'google';
            $data1['gender'] = $data['gender'];
            $this->db->insert('user',$data1);
        }
        
        return $username?$username:false;
    }

    public function find_picture_path($usernema){
        $result = $this->db->select('user_picture_path')
        ->from($this->tableName)
        ->where('username', $usernema)
        ->get()->result_array();
        return $result;
    }

}
