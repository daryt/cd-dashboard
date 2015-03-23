<html>
<head>
	<title>Add User</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Dashboard">
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.4-dist/js/bootstrap.min.js">
</head>
<body>

<style>

#navbar {
  height: 70px;
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
	left: 365px;
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

h2 {
position: relative;
right: 150px;
top: 20px;
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
  left:  110px;
  bottom: 47px;
}
</style>

<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
 	<div class="container">
        <div class="navbar-header">
          <h3>Add user |</h3>
          	<a class="navbar-brand" href="#">Register</a>
            <a class="navbar-brand" href="#">Profile</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <a href="#" class="topright">Log off</a>
          </form>
        </div>
    </div>
</nav>
<h2>Add a new user:</h2>

<form method='post' action='/users/add_user'>
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" placeholder="First name">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" placeholder="Last name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="passwordconfirm">Confirm Password</label>
    <input type="password" class="form-control" id="passwordconfirm" placeholder="Confirm password">
  </div>
  <p><a id="return" class="btn btn-primary btn-default" href="#" role="button">Return to Dashboard</a></p>
  <p><a id="signin" class="btn btn-success btn-default" href="#" role="button">Add User</a></p>
</form>


</body>
</html>