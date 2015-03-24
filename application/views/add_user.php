<html>
<head>
	<title>Add User</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Dashboard">
    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.4-dist/js/bootstrap.min.js">
</head>
<body background="/assets/background3.jpg">

<style>

#navbar {
  height: 65px;
}

.form-group {
	position: relative;
	top: 50px;
	width: 350px;
	margin-left: 100px;
}

#signin {
	position: relative;
	top: 11px;
	left: 372px;
  display: inline-block;
}

#navbar {
	position: relative;
	font-size: 18px;
}

#register {
	position: relative;
	top: 100px;
	left: 105px;
	font-size: 12px;
}

.topright {
  position: relative;
  top: 13px;
}

p.add {
position: relative;
left: 60px;
top: 20px;
font-size: 24px;
font-weight: 500;
}

h3 {
  color: white;
  font-weight: 100;
}

#return {
  position: relative;
  top: 53px;
  left: 102px;
  display: inline-block;
}

.navbar-brand {
  display: inline-block;
  position: relative;
  left:  85px;
  bottom: 47px;
}

.error {
  color: red;
  text-align: right;
}
.topright, .topright1 {
  float: right;
  display: inline-block;
  position: relative;
  top: 23px;
  padding: 0px 10px 0px 10px;
  font-size: 16px;
}

.topright1 {
  border-right: solid 1px white;
}

.barlink {
  display: inline-block;
  position: relative;
  left: 110px;
  bottom: 33px;
  font-size: 16px;
  color: gray;
}
</style>

<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
            <h3>Welcome |</h3>
            <a href="#" class='barlink'>Add</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <a href="register" class="topright">Register</a>
            <a href="sign_in" class="topright1">Log-off</a>
        </div>
    
</nav>

<p class="add">Add a new user:</p>
<form method='post' action='/admins/add_user'>
  <input type="hidden" name="action" value="register">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" name="first_name" id="firstname" placeholder="First name">
        <span class='error'><?php echo form_error('first_name'); ?></span>
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="lastname" placeholder="Last name">
        <span class='error'><?php echo form_error('last_name'); ?></span>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        <span class='error'><?php echo form_error('email'); ?></span>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <span class='error'><?php echo form_error('password'); ?></span>
  </div>
  <div class="form-group">
    <label for="passwordconfirm">Confirm Password</label>
    <input type="password" class="form-control" name="passwordconfirm" id="passwordconfirm" placeholder="Confirm password">
        <span class='error'><?php echo form_error('passwordconfirm'); ?></span>
  </div>
  <p><a id="return" class="btn btn-primary btn-default" href="#" role="button">Return to Dashboard</a></p>
  <input type='submit' value="Register" id="signin" class="btn btn-success btn-default" role="button">
</form>

<?php echo $this->session->flashdata('login_error'); ?>
</div>
</body>
</html>