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
	top: 120px;
	width: 350px;
	margin-left: 100px;
}

.topright {
  position: relative;
  top: 13px;
}
#signin {
	position: relative;
	top: 95px;
	left: 260px;
	margin-left: 100px;
}

#navbar {
	position: relative;
	/*top: 4px;*/
	font-size: 18px;
}

#register {
	position: relative;
	top: 120px;
	left: 105px;
	font-size: 12px;
}
.navbar-brand {
  position: relative;
  left:  75px;
  bottom: 47px;
}

</style>

<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
 	<div class="container">
        <div class="navbar-header">
          	<h3>Login |</h3>
            <a class="navbar-brand" href="#">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <a href="#" class="topright">Register</a>
          </form>
        </div>
    </div>
</nav>
<form method='post' action='/users/sign_in'>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <p><a id="register" href='#'>Don't have an account? Register here.</a></p>
  <p><a id="signin" class="btn btn-success btn-lg" href="#" role="button">Sign-in</a></p>
</form>


</body>
</html>