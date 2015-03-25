<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard">
    <title>User Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.4-dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets/styles.css">
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
  top: 120px;
  width: 350px;
  margin-left: 100px;
}

.navbar-brand {
  position: relative;
  left:  112px;
  bottom: 47px;
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
  left: 128px;
  bottom: 33px;
  font-size: 16px;
  color: gray;
  margin-right: 15px;
}
</style>
<?php var_dump($users); ?>
 <body background="/assets/background3.jpg">
    <nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
            <h3>Dashboard |</h3>
            <a href="/main" class='barlink'>Home</a>
            <a href="/dashboard" class='barlink'>Users</a>

            <a href="/user/edit/<?= $user['id']; ?>" class='barlink'>Profile</a>

            <a href="/notes" class='barlink'>Messages</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <a href="register" class="topright">Register</a>
            <a href="logoff" class="topright1">Log-off</a>
        </div>
    </div>
</nav>

    <div class="container buffer">
      <div class="starter-template">
        <h2>All Users</h2>
        <table class="table table-striped table-bordered">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>

            <th>User Level</th>
          </tr>
<?php
        foreach ($users as $user)
        {
          
?>
          <tr>
            <td><?=$user['id'] ?></td>
            <td><a href="/users/show/<?= $user['id']; ?>"><?=$user['first_name']." ".$user['last_name']  ?></a></td>
            <td><?=$user['email'] ?></td>
            <td><?=$user['created_at'] ?></td>
            <td><?=$user['user_level'] ?></td>

          </tr>
<?php
}
?>
        </table>
      </div>
    </div>
      <hr>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> ->
  </body>
</html>
