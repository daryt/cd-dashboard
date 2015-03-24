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

  // 	public function edit_profile_user()
  // {
  //   $this->load->view('edit_profile_user');
  // }

  public function index()
  {
    $this->load->model('user');
    $users = $this->user->retrieveAllUsers();
    $this->load->view('dashboard', array('users' => $users));
  }

public function edit_profile_user($id)
  {
    $this->load->model('user');
    $user = $this->user->lookupUser($id);
    $this->load->view('edit_profile_user', array('user' => $user));
  }

    public function updateProfileUser() {
    $this->load->model('user');
    $result = $this->user->updateUser($this->input->post());
    redirect("/dashboard");
  }

      public function updateUserDescription() {
    $this->load->model('user');
    $result = $this->user->updateUserDescription($this->input->post());
    redirect("/dashboard");
  }

       public function updateUserPassword() {
    $this->load->model('user');
    $result = $this->user->updateUserPassword($this->input->post());
    redirect("/dashboard");
  }
}

//end of main controller

