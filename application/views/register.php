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
  top: 100px;
  width: 350px;
  margin-left: 100px;
}

.topright {
  position: relative;
  top: 13px;
}

#signin {
  position: relative;
  top: 75px;
  left: 250px;
  margin-left: 100px;
}

#navbar {
  position: relative;
  /*top: 4px;*/
  font-size: 16px;
}

#register {
  position: relative;
  top: 100px;
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
}
</style>
</head>
<body background="/assets/background3.jpg">

<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
 	<div class="container">
        <div class="navbar-header">
          	<h3>Registration |</h3>
            <a href="/mains" class="barlink">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <a href="/sign_in" class="topright">Sign-in</a>
          </form>
        </div>
    </div>
</nav>

<form method='post' action='/users/register'>
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