<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

  

  public function index()
  {
    $this->load->view('admin');
  }
}

//end of main controller