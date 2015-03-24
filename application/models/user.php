<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function userCreate($content)
	{				
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$result = $this->db->query($query, array($content['first_name'], $content['last_name'], $content['email'], $content['password']));
		return $result;
	}

	public function getUserEmail($email)
	{
		$query = "SELECT * FROM users WHERE email = ?";
		$result = $this->db->query($query, array($email))->row_array();
		return $result;
	}		
}