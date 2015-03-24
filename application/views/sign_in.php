<html>
<head>
	<title>User Sign-in</title>
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

#signin {
	position: relative;
	top: 93px;
	left: 279px;
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

.error {
  color: red;
  text-align: right;
  position: relative;
  left: 102px;
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
            <a href="/" class='barlink'>Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <a href="register" class="topright">Register</a>
        </div>
    </div>
</nav>
<form method='post' action='/users/sign_in_user'>
  <input type="hidden" name="action" value="login">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="Password">
    <span class='error'><?php echo $this->session->flashdata('login_error'); ?></span>
  </div>
  <p><a id="register" href='/register'>Don't have an account? Register here.</a></p>
  <input type='submit' value="Sign-in" id="signin" class="btn btn-success btn-default" role="button">
</form>

</body>
</html>