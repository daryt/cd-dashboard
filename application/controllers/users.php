<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function register()
  {
    $this->load->view('register');
  }

    public function sign_in()
  {
    $this->load->view('sign_in');
  }

  	public function edit_profile_user()
  {
    $this->load->view('edit_profile_user');
  }

}