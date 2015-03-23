<html>
<head>
	<title>User Sign-in</title>
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
	font-size: 18px;
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

</style>

<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
 	<div class="container">
        <div class="navbar-header">
          	<h3>Registration |</h3>
            <a class="navbar-brand" href="#">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <a href="#" class="topright">Sign-in</a>
          </form>
        </div>
    </div>
</nav>
<form method='post' action='/users/register'>
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
  <p><a id="register" href='#'>Already have an account? Login here.</a></p>
  <p><a id="signin" class="btn btn-success btn-lg" href="#" role="button">Register</a></p>
</form>


</body>
</html>