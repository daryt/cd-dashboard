<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mains extends CI_Controller {

	

	public function index()
	{

		$this->load->view('mains');
	}

  public function notes($userID)
  {
    $this->load->model('main');
    $messages = $this->main->getAllMessages($userID);
    $comments = $this->main->getAllComments();
    $this->load->model('user');
    $user = $this->user->lookupUser($userID);
    $view_data = array('messages' => $messages, 'comments' => $comments, 'user' => $user);
    // echo "<pre>";
    // var_dump($view_data);
    // var_dump($view_data['user_id']);
    // die();
    $this->load->view('notes', $view_data);
  }

  public function postMessage() {
    $this->load->model('main');
    $result = $this->main->newMessage($this->input->post());
    $user_id = $this->input->post('user_id');
    redirect("/users/show/".$user_id."");
  }

  public function createComment() {
    $this->load->model('main');
    $result = $this->main->createComment($this->input->post());
    $user_id = $this->input->post('user_id');
    redirect("/users/show/".$user_id."");
  }
}


//end of main controller