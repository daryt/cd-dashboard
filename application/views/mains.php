<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Dashboard">
    <title>Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.4-dist/js/bootstrap.min.js">
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

#signin {
  position: relative;
  top: 95px;
  left: 260px;
  margin-left: 100px;
}


#register {
  position: relative;
  top: 120px;
  left: 105px;
  font-size: 12px;
}
.navbar-brand {
  position: relative;
  left:  112px;
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

  <body>

    <nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
            <h3>Welcome |</h3>
            <a href="#" class='barlink'>Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <a href="register" class="topright">Register</a>
            <a href="sign_in" class="topright1">Login</a>
        </div>
    </div>
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to the Test</h1>
        <p>We're going to build a cool application using a MVC framework!  This application was built with the Coding Dojo foks!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Start</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Manage Users</h2>
          <p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
          <p><a class="btn btn-default" href="#" role="button">Manage Users &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Leave Messages</h2>
          <p>Users will be able to leave a message to another user using this application. </p>
          <p><a class="btn btn-default" href="#" role="button">Leave Messages &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Edit User Information</h2>
          <p>Admins will be able to edit another user's information (email address, first name, last name, etc.</p>
          <p><a class="btn btn-default" href="#" role="button">Edit Users &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
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
