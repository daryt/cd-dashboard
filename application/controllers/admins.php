<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

  

  public function index()
  {
    $this->load->model('admin');
    $users = $this->admin->retrieveAllUsers();
    $this->load->view('admin', array('users' => $users));
  }

    public function add_user()
  {
    $this->load->view('add_user');
  }

  public function edit_profile_admin($id)
  {
    $this->load->model('admin');
    $user = $this->admin->lookupUser($id);
    $this->load->view('edit_profile_admin', array('user' => $user));
  }

  public function deleteUser() {

    $this->load->model('admin');
    $user = $this->admin->removeUser($this->input->post('id'));
    redirect("/admin");
  }

  public function removeUser($id) {
    $this->load->model('admin');
    $user = $this->admin->lookupUser($id);
    $this->load->view('remove_user', array('user' => $user));
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