<html>
<head>
	<title>User Registration</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Dashboard">
    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.4-dist/js/bootstrap.min.js">

    </head>
<style>
#navbar {
  height: 65px;
}

h3 {
  color: white;
  font-weight: 100;
}

.form-group {
  position: relative;
  top: 160px;
  width: 350px;
  margin-left: 100px;
}

.topright {
  position: relative;
  top: 13px;
}

p.add {
position: relative;
left: 60px;
top: 120px;
font-size: 24px;
font-weight: 500;
}

#signin {
  position: relative;
  top: 130px;
  left: 270px;
  margin-left: 100px;
}

#register {
  position: relative;
  top: 155px;
  left: 105px;
  font-size: 12px;
}
.navbar-brand {
  position: relative;
  left:  130px;
  bottom: 47px;
}

.error {
  color: red;
  text-align: right;
}

.barlink {
  display: inline-block;
  position: relative;
  left: 130px;
  bottom: 33px;
  font-size: 16px;
  color: gray;
  margin-right: 14px;
}

.topright {
  float: right;
  display: inline-block;
  position: relative;
  top: 23px;
  padding: 0px 10px 0px 10px;
  font-size: 16px;
}

</style>

<body background="/assets/background3.jpg">

<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
 	<div class="container">
        <div class="navbar-header">
          	<h3>Registration |</h3>
            <a href="/mains" class="barlink">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <a href="/sign_in" class="topright">Sign-in</a>
        </div>
    </div>
</nav>
<p class="add">Register:</p>
<form method='post' id="contact-form" action='/users/register'>
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
    <label class="control-label" for="passwordconfirm">Password confirm</label>
    <input type="password" class="form-control" name="passwordconfirm" placeholder="Confirm password">
    <span class='error'><?php echo form_error('passwordconfirm'); ?></span>
  </div>
  <p><a id="register" href='/sign_in'>Already have an account? Login here.</a></p>
  <input type='submit' value="Register" id="signin" class="btn btn-success btn-default" role="button">
</form>

<?php echo $this->session->flashdata('login_error'); ?>


</body>
</html>

