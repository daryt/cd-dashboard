<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function index()
  {
    $this->load->view('dashboard');
  }
}

//end of main controller