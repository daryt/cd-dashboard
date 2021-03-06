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
  position: relative;
  font-size: 16px;
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
left: 40px;
top: 20px;
}

h3 {
  color: white;
  font-weight: 100;
}

#return {
position: relative;
top: 120px;
left: 195px;
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

<body>
    <nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
            <h3>Welcome |</h3>
            <a href="#" class='barlink'>Edit</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <a href="register" class="topright">Register</a>
            <a href="/logoff" class="topright1">Log-off</a>
        </div>
    </div>
</nav>
  <div class="row">
    <h2>Edit User ID <?= $user['id'] ?> Profile:</h2>
      <div id="border" class="col-md-6">
          <div class="form-group">
            <form method='post' action='/update_profile_admin' name="update-user">
            <hr><p class="edit">Edit Info</p>
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="first_name" value="<?= $user['first_name'] ?>">
          </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control" name="last_name" value="<?= $user['last_name'] ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>">
        </div>
        <div class="form-group">
        	<label>User Level</label>
        	<select class="form-control" name="user-level">
<?php
        $selected = "";
        if ($user['user_level'] == 9) {
          $selected = "selected";
        }
?>
			  <option value="1" <?=$selected?> >Normal</option>
			  <option value="9" <?=$selected?> >Admin</option>
			</select>
      <input type="hidden" name="id" value=<?= $user['id']; ?>>
      <p><input class="btn btn-success btn-default" id="signin1" value="Save" type="submit"></p>
    </form>
      </div>
  </div>
    <div class="col-md-6">
        <div class="form-group">
          <form method="post" action='/update_user_password_admin' name="update-user-password-admin">
          <hr><p class="edit">Change Password</p>
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="passwordconfirm">Confirm Password</label>
          <input type="password" class="form-control" name="passwordconfirm" placeholder="Confirm password">
          <input type="hidden" name="id" value="<?= $user['id'] ?>">
          <p><input id="signin2" class="btn btn-success btn-default" id="signin1" value="Update Password" type="submit"></p>
          <p><a id="return" class="btn btn-primary btn-default" href="/admin" role="button">Return to Dashboard</a></p>
        </div>
    </div>
  </div>
      


<!--     <p><a id="signin" class="btn btn-success btn-default" href="#" role="button">Update Info</a></p> -->



</body>
</html>