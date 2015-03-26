<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Model {

  public function newMessage($message) {
    $query = "INSERT INTO messages (user_id, content, created_at, updated_at) VALUES (?, ?, NOW(), NOW());";
    $result = $this->db->query($query, array($this->session->userdata['user_id'], $message['message']));
    return $result;
  }

  public function getAllMessages($userID) {
    $query = "SELECT first_name, content, messages.id, messages.created_at FROM users RIGHT JOIN messages on messages.user_id = users.id WHERE users.id = ?;";
    $messages = $this->db->query($query, array($userID)) -> result_array();
    return $messages;
  }
 public function getAllComments() {
    $query = "SELECT first_name, last_name, messages_id, comment, comments.created_at FROM comments LEFT JOIN users on users.id = comments.user_id";
    $comments = $this->db->query($query) -> result_array();
    // echo "<pre>";
    // var_dump($comments);
    // die("in the model");
    return $comments;
  }

  public function createComment($comment) {
    $query = "INSERT INTO comments (user_id, comment, created_at, updated_at, messages_id) VALUES (?, ?, NOW(), NOW(), ?);";
    $result = $this->db->query($query, array($this->session->userdata['user_id'],$comment['comment'], $comment['message_id']));
    return $result;
  }


   // public function getAllComments() {
   //  $query = "SELECT first_name, last_name, message_id, comment, comments.created_at FROM comments LEFT JOIN users on users.id = comments.user_id WHERE message_id = ?";
   //  $messages = $this->db->query($query, array($messageId)) -> result_array();
   //  return $comments;

}