<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mains extends CI_Controller {

	

	public function index()
	{
		$this->load->view('register');
	}
}

//end of main controller