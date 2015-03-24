<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "mains";
$route['404_override'] = '';
$route['admin'] = "admins";
$route['register'] = "users/register";
$route['add_user'] = "admins/add_user";
// $route['sign_in'] = "users/sign_in";
$route['sign_in'] = "users/sign_in_view";
$route['edit_profile_user'] = "users/edit_profile_user";
$route['edit_profile_admin'] = "admins/edit_profile_admin";
$route['dashboard'] = "users";
$route['notes'] = "mains/notes";

//end of routes.php