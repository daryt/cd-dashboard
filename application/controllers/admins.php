<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

  

  public function index()
  {
    $this->load->view('admin');
  }

    public function add_user()
  {
    $this->load->library("form_validation");
    $this->form_validation->set_rules("first_name", "First Name", "required");
    $this->form_validation->set_rules("last_name", "Last Name", "required");
    $this->form_validation->set_rules("email", "Email address", "required|is_unique[users.email]");
    $this->form_validation->set_rules("password", "Password", "required|min_length[8]|matches[passwordconfirm]");
    $this->form_validation->set_rules("passwordconfirm", "Password confirm", "required");
    if($this->form_validation->run() === FALSE)
    {
      $this->load->view('add_user');
    }
    else
    {
      $result = $this->user->userCreate($this->input->post()); //passing registration info to model
      $this->load->view('edit_profile_user');
    }
  }
  

  public function edit_profile_admin()
  {
    $this->load->view('edit_profile_admin');
  }
}

//end of main controller