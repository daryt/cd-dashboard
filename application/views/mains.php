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
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
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
