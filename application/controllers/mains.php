<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mains extends CI_Controller {

	

	public function index()
	{
		$this->load->view('mains');
	}

  public function notes()
  {
    $this->load->view('notes');
  }
}


//end of main controller