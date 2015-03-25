<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "mains";
$route['404_override'] = '';
$route['admin'] = "admins";
$route['register'] = "users/register";
$route['add_user'] = "admins/add_user";
// $route['sign_in'] = "users/sign_in";
$route['sign_in'] = "users/sign_in_view";
$route['edit_profile_user'] = "users/edit_profile_user";
$route['update_profile_admin'] = "admins/updateProfileAdmin";
$route['users/edit/(:num)'] = "admins/edit_profile_admin/$1";
$route['dashboard'] = "users";
$route['notes'] = "mains/notes";
$route['admin/removeUser/(:num)'] = 'admins/removeUser/$1';
$route['admin/deleteUser'] = 'admins/deleteUser';
$route['user/edit/(:num)'] = 'users/edit_profile_user/$1';
$route['update_profile_user'] = 'users/updateProfileUser';
$route['update_user_description'] = 'users/updateUserDescription';
$route['update_user_password'] = 'users/updateUserPassword';
$route['update_user_password_admin'] = 'admins/updateUserPasswordAdmin';
$route['post_message'] = 'mains/postMessage';
$route['create_comment'] = 'mains/createComment';










//end of routes.php