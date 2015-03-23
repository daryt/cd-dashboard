<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mains extends CI_Controller {

	

	public function index()
	{
		$this->load->view('mains');
	}
}

//end of main controller