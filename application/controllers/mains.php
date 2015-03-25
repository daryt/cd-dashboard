<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mains extends CI_Controller {

	

	public function index()
	{

		$this->load->view('mains');
	}

  public function notes()
  {
    $this->load->model('main');
    $messages = $this->main->getAllMessages();
    $comments = $this->main->getAllComments();
    $view_data = array('messages' => $messages, 'comments' => $comments);
    $this->load->view('notes', $view_data);
  }

  public function postMessage() {
    $this->load->model('main');
    $result = $this->main->newMessage($this->input->post());
    redirect("/notes");
  }

  public function createComment() {
    $this->load->model('main');
    $result = $this->main->createComment($this->input->post());
    redirect("/notes");
  }
}


//end of main controller