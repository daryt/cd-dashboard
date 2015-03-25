<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function register()
  {
    $this->load->library("form_validation");
    $this->form_validation->set_rules("first_name", "First Name", "required");
    $this->form_validation->set_rules("last_name", "Last Name", "required");
    $this->form_validation->set_rules("email", "Email address", "required|is_unique[users.email]");
    $this->form_validation->set_rules("password", "Password", "required|min_length[8]|matches[passwordconfirm]");
    $this->form_validation->set_rules("passwordconfirm", "Password confirm", "required");
    if($this->form_validation->run() === FALSE)
    {
      $this->load->view('register');
    }
    else
    {
      $result = $this->user->userCreate($this->input->post()); //passing registration info to model
      $this->load->view('edit_profile_user');
    }
  }

    public function sign_in_view()
    {
      $this->load->view('sign_in');
    }

    public function sign_in_user()
    {
      
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $user = $this->user->getUserEmail($email);
      if ($user && $user['password'] == $password && $user['user_level'] == 9)
      {
        $user = array(
          'user_id' => $user['id'],
          'email' => $user['email'],
          'first_name' => $user['first_name'],
          'last_name' => $user['last_name'],
          'logged_in' => true);
        redirect('/admin');
      }
      else if ($user && $user['password'] == $password)
      {
        $user = array(
          'user_id' => $user['id'],
          'email' => $user['email'],
          'first_name' => $user['first_name'],
          'last_name' => $user['last_name'],
          'logged_in' => true);
        redirect('/dashboard');
      }
      else
      {
        $this->session->set_flashdata("login_error", "Invalid email address and/or password");
        redirect('/sign_in');
      }
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

