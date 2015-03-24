<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

  public function retrieveAllUsers() {
    $query = "SELECT * FROM users;";
    $users = $this->db->query($query) -> result_array();
    return $users;
  } 

  public function removeUser($id) {
    $query = "DELETE FROM users WHERE id = ?;";
    $result = $this->db->query( $query, array($id) );
    return $result;
  }

  public function lookupUser($id) {
    $query = "SELECT * FROM users WHERE id = ?;";
    $result = $this->db->query( $query, array($id) ) -> row_array();
    return $result;
  }

  public function updateUser($user) {
    $data = array('first_name' => $user['first_name'], 'last_name' => $user['last_name'], 'email' => $user['email'], 'user_level' => $user['user-level']);
    $where = "id =".$user['id']."";
    $query = $this->db->update_string('users', $data, $where);
    $result = $this->db->query($query);
    return $result;
  }

  public function updateUserPasswordAdmin($user) {
    $data = array('password' => $user['password']);
    $where = "id =".$user['id']."";
    $query = $this->db->update_string('users', $data, $where);
    $result = $this->db->query($query);
    return $result;
  }
}

//end of main controller