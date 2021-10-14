<?php
    class Sign_up_model extends CI_Model {
        
        public function register($enc_password, $first_name, $last_name, $email, $username, $institution, $picture) {
            $data = array(
                'fname' => $first_name,
                'lname' => $last_name,
				'email' => $email,
                'username' => $username,
                'password' => $enc_password,
                'institution' => $institution,
                'user_picture_path' => $picture
            );
			return $this->db->insert('user', $data);
        }

        public function register2($institution) {
            $this->db->from('user');
            $this->db->where("username", $id);
        
			return $this->db->insert('user', $data);
        }

        public function check_username_exists($username) {
            $query = $this->db->get_where('user', array('username' => $username));
        
            if(empty($query->row_array())) {
                return true;
            } else {
                return false;
            }
        }

		public function check_email_exists($email){
			$query = $this->db->get_where('user', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
        }
    }