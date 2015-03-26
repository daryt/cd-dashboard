<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Remove User</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard">
    <title>Admin Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.4-dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="/assets/styles.css">

<style>

#navbar {
  height: 65px;
}


.topright {
  position: relative;
  top: 13px;
}

h3 {
  color: white;
  font-weight: 100;
}

h2 {
  position: relative;
  top: 30px;
}

#return {
position: relative;
top: 120px;
left: 195px;
}

.edit {
  text-align: center;
}

hr {
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
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
  left: 105px;
  bottom: 33px;
  font-size: 16px;
  color: gray;
  margin-right: 10px;
}

#id {
  display: inline-block;
}

.yes {
  font-weight: bold;

}

.info {
  margin-left: 160px;
  margin-top: 100px;
  font-size: 15px;

}

#btn {
  position: relative;
  bottom: 15px;
  width: 60px;
}

#btn2 {
  position: relative;
  left: 140px;
  width: 60px;
  top: 15px;
}

p {
  margin-top: 30px;
}
</style>

</head>
<body background="/assets/background3.jpg">

    <nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
            <h3>Manage |</h3>
            <a href="/mains" class='barlink'>Home </a>
            <a href="/admin" class='barlink'>Users </a>
            <a href="/edit_profile_user" class='barlink'>Profile </a>
            <a href="/notes" class='barlink'>Messages</a>
            <a href="/add_user" class='barlink'>Add user </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <a href="register" class="topright">Register</a>
            <a href="logoff" class="topright1">Log-off</a>
        </div>
    </div>
</nav>
    <div class="container buffer">
      <div class="starter-template" id="info">
  <h2>Are you sure you want to remove the following user?</h2>
  <div class="info">
  <p><span class="yes">First name:</span> <?= $user['first_name'] ?></p>
  <p><span class="yes">Last name:</span> <?= $user['last_name'] ?></p>
  <p><span class="yes">Email:</span> <?= $user['email'] ?></p>
  <p><span class="yes">Description:</span> <?= $user['description'] ?></p>
  <p><span class="yes">User level:</span> <?= $user['user_level'] ?></p>
  <form method="post" action="/admin/deleteUser">
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
    <input type='submit' id="btn2" class="btn btn-success btn-sm" value="Yes">
  </form>
  <a href="/admin/" id="btn" class="btn btn-danger btn-sm">Cancel</a>
</div>
</div>
</div>

</body>
</html>