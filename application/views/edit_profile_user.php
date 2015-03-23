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
  position: relative;
  font-size: 18px;
}

.form-group {
	position: relative;
	top: 50px;
	width: 350px;
  margin-left: 80px;
}



#signin1 {
	position: relative;
	top: 11px;
  left: 250px;
  display: inline-block;
}

#signin2 {
  position: relative;
  top: 11px;
  left: 210px;
  display: inline-block;
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

.edit {
  text-align: center;
}

.navbar-brand {
  display: inline-block;
  position: relative;
  left:  85px;
  bottom: 47px;
}

hr {
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
}
#desc {
  margin-top: 90px;
  margin-left: 150px;
}
textarea {
  width: 720px;
  height: 140px;

  resize: none;
}
#hr {
  position: relative;
  top: 60px;
}
#update {
  position: relative;
  left: 740px;
  bottom: 35px;
}
</style>

<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
 	<div class="container">
        <div class="navbar-header">
          <h3>Profile |</h3>
          	<a class="navbar-brand" href="#">Dashboard</a>
            <a class="navbar-brand" href="#">Users</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <a href="#" class="topright">Log off</a>
          </form>
        </div>
    </div>
</nav>
<h2>Edit profile:</h2>
  <div class="row">
      <div id="border" class="col-md-6">
          <div class="form-group">
            <form method='post' action='/users/edit_profile_user'>
            <hr><p class="edit">Edit Info</p>
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
          <p><a id="signin1" class="btn btn-success btn-default" href="#" role="button">Update Info</a></p>
        </div>
      </div>
    <div class="col-md-6">
        <div class="form-group">
          <hr><p class="edit">Change Password</p>
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="passwordconfirm">Confirm Password</label>
          <input type="password" class="form-control" id="passwordconfirm" placeholder="Confirm password">
          <p><a id="signin2" class="btn btn-success btn-default" href="#" role="button">Change Password</a></p>
        </div>
    </div>
  </div>
<!--     <p><a id="signin" class="btn btn-success btn-default" href="#" role="button">Update Info</a></p> -->
<hr id='hr'><div id='desc' class="col-ld-12">
  <p id='edit'>Edit desctiption:</p>
  <textarea></textarea>
  <p><a id="update" class="btn btn-success btn-default" href="#" role="button">Update</a></p>
</div>
</form>


</body>
</html>