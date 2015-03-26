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
  margin-left: 80px;
}

#signin1 {
	position: relative;
	top: 11px;
  left: 292px;
  display: inline-block;
}

#signin2 {
  position: relative;
  top: 11px;
  left: 210px;
  display: inline-block;
}

#signin3 {
  position: relative;
  left: 750px;
  bottom: 35px;
  width: 80px;
  display: inline-block;
}

.topright {
  position: relative;
  top: 13px;
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
  text-align: left;
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

p.add {
position: relative;
left: 60px;
top: 120px;
font-size: 24px;
font-weight: 500;
}

#hr {
  position: relative;
  top: 140px;
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
  left: 80px;
  bottom: 33px;
  font-size: 16px;
  color: gray;
  margin-right: 15px;
}

.row {
  position: relative;
  top: 80px;
}

.form-group2 {
  position: relative;
  top: 80px;
  right: 25px;
}
</style>

    <nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
            <h3>Profile |</h3>
            <a href="/mains" class='barlink'>Home </a>
<?php
            if($this->session->userdata['user_level'] == 9)
            {
              echo "<a href='/admin' class='barlink'>Admin Dashboard </a>";

            }
?>
            <a href="/dashboard" class='barlink'>Users </a>
            <a href="/user/edit/<?= $this->session->userdata['user_id']; ?>" class='barlink'>Profile</a>
            <a href="/notes" class='barlink'>Messages</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <a href="register" class="topright">Register</a>
            <a href="/logoff" class="topright1">Log-off</a>
        </div>
    </div>
</nav>
 <div class="container"> 
   <p class="add">Edit profile:</p>
  <div class="row">
      <div id="border" class="col-md-6">
          <div class="form-group">
            <form method='post' action='/update_profile_user' name="user-update">
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
          <input type="hidden" name="id" value="<?= $user['id'] ?>">

          <p><input class="btn btn-success btn-default" id="signin1" value="Save" type="submit"></p>
        </div>
      </form>
      </div>
    <div class="col-md-6">
        <div class="form-group">
          <form method="post" action='/update_user_password' name="update-user-password">
            <hr><p class="edit">Change Password</p>
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
        <div class="form-group">
            <label for="passwordconfirm">Confirm Password</label>
            <input type="password" class="form-control" name="passwordconfirm" placeholder="Confirm password">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <p><input id="signin2" class="btn btn-success btn-default" id="signin1" value="Change Password" type="submit"></p>
          </form>
        </div>
    </div>
  </div>
<!--     <p><a id="signin" class="btn btn-success btn-default" href="#" role="button">Update Info</a></p> -->
<hr id='hr'><div id='desc' class="col-ld-12">
  <div class="form-group2">
    <form method="post" action="/update_user_description">
    <p id='edit'>Edit description:</p>
    <textarea name="description"><?= $user['description'] ?></textarea>
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <p><input class="btn btn-success btn-default" id="signin3" value="Save" type="submit"></p>
  </form>
</div>

</div>
</form>
</div>

</body>
</html>