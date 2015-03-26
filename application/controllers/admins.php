<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

public function is_logged_in() {
  if ($this->session->userdata('logged_in')) {
      return true;
  }
}

public function is_admin() {
  if ($this->session->userdata('user_level') == 9) {
      return true;
  }
}
  

  public function index()
  {
    $this->load->model('admin');
    $users = $this->admin->retrieveAllUsers();
    if($this->is_admin())
    {
      $this->load->view('admin', array('users' => $users));
    }
    else
    {
      redirect("/");
    }
  }

    public function add_user()
  {
    if($this->is_admin())
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
  else
  {
    redirect("/");
  }
  }
  

  public function edit_profile_admin($id)
  {
    if($this->is_admin())
    {
    $this->load->model('admin');
    $user = $this->admin->lookupUser($id);
    $this->load->view('edit_profile_admin', array('user' => $user));    }
    else
    {
      redirect("/");
    }

    
  }

  public function deleteUser() {

    $this->load->model('admin');
    $user = $this->admin->removeUser($this->input->post('id'));
    redirect("/admin");
  }

  public function removeUser($id) {
    if($this->is_admin())
    {
    $this->load->model('admin');
    $user = $this->admin->lookupUser($id);
    $this->load->view('remove_user', array('user' => $user));
    }
    else
    {
      redirect("/");
    }


    
  }

  public function updateProfileAdmin() {
    $this->load->model('admin');
    $result = $this->admin->updateUser($this->input->post());
    redirect("/admin");
  }

  public function updateUserPasswordAdmin() {
    $this->load->model('admin');
    $result = $this->admin->updateUserPasswordAdmin($this->input->post());
    redirect("/admin");
  }


}

//end of main controller