<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "mains";
$route['404_override'] = '';
$route['admin'] = "admins";
$route['register'] = "users/register";
$route['add_user'] = "admins/add_user";
$route['sign_in'] = "users/sign_in";
$route['edit_profile_user'] = "users/edit_profile_user";
$route['update_profile_admin'] = "admins/updateProfileAdmin";
$route['users/edit/(:num)'] = "admins/edit_profile_admin/$1";
$route['dashboard'] = "users";
$route['notes'] = "mains/notes";
$route['admin/removeUser/(:num)'] = 'admins/removeUser/$1';
$route['admin/deleteUser'] = 'admins/deleteUser';



//end of routes.php