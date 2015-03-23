<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

  

  public function index()
  {
    $this->load->view('admin');
  }

    public function add_user()
  {
    $this->load->view('add_user');
  }

  public function edit_profile_admin()
  {
    $this->load->view('edit_profile_admin');
  }
}

//end of main controller