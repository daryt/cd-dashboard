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

  public function retrieveAllUsers() {
    $query = "SELECT * FROM users;";
    $users = $this->db->query($query) -> result_array();
    return $users;
  } 

  // public function removeUser($id) {
  //   $query = "DELETE FROM users WHERE id = ?;";
  //   $result = $this->db->query( $query, array($id) );
  //   return $result;
  // }

  public function lookupUser($id) {
    $query = "SELECT * FROM users WHERE id = ?;";
    $result = $this->db->query( $query, array($id) ) -> row_array();
    return $result;
  }

  public function updateUser($user) {
    $data = array('first_name' => $user['first_name'], 'last_name' => $user['last_name'], 'email' => $user['email']);
    $where = "id =".$user['id']."";
    $query = $this->db->update_string('users', $data, $where);
    $result = $this->db->query($query);
    return $result;
  }

  public function updateUserDescription($user) {
    $data = array('description' => $user['description']);
    $where = "id =".$user['id']."";
    $query = $this->db->update_string('users', $data, $where);
    $result = $this->db->query($query);
    return $result;
  }

   public function updateUserPassword($user) {
    $data = array('password' => $user['password']);
    $where = "id =".$user['id']."";
    $query = $this->db->update_string('users', $data, $where);
    $result = $this->db->query($query);
    return $result;
  }
}

