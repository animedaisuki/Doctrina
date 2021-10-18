<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Profile extends CI_Model {
	public function change_password($username, $newPassword) {
		$newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
		$sql = "UPDATE user SET password = '$newPassword' WHERE username = '$username'";
		return $this->db->query($sql);
	}

	public function check_newEmail($newEmail) {
		$sql = "SELECT email FROM user WHERE email = '$newEmail'";
		$result = $this->db->query($sql);
		if ($result->num_rows() > 0) {
			return true;
		}
		return false;
	}

	public function insert_token($username,$newEmail,$token) {
		$sql = "INSERT INTO email_token (username,email,token) VALUES ('$username','$newEmail','$token')";
		return $this->db->query($sql);
	}

	public function token_expired($token) {
		$sql = "SELECT token FROM token WHERE token = '$token'";
		$result = $this->db->query($sql);
		if ($result->num_rows() > 0) {
			return false;
		}
		return true;
	}

	public function get_username_byToken($token) {
		$sql = "SELECT username FROM email_token WHERE token = '$token'";
		$result = $this->db->query($sql);
		return $result->row_array()['username'];
	}

	public function update_email($username, $newEmail) {
		$sql = "UPDATE user SET email = '$newEmail' WHERE username = '$username'";
		$this->db->query($sql);
	}

	public function delete_token($username) {
		$sql = "DELETE FROM email_token WHERE username = '$username'";
		$this->db->query($sql);
	}

	public function get_email_by_username($username) {
		$sql = "SELECT email FROM user WHERE username = '$username'";
		$result = $this->db->query($sql);
		return $result->row_array()['email'];
	}

	public function username_repeated($newUsername) {
		$sql = "SELECT * FROM user WHERE username = '$newUsername'";
		$result = $this->db->query($sql);
		if ($result->num_rows() > 0) {
			return true;
		}
		return false;
	}

	public function update_information($username,$institution,$major,$gender) {
		$sql = "UPDATE user SET Institution = '$institution',Major = '$major',gender = '$gender' WHERE username = '$username'";
		$this->db->query($sql);
	}

	public function get_user_data($username) {
        $query = $this->db->query("SELECT Institution, Major, gender FROM user WHERE username = '$username'");
        return $query;
    }

}

?>
