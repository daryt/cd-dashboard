<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard">
    <title>Admin Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.4-dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets/styles.css">
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

    <div class="container buffer">
      <div class="starter-template">
        <h2>Manage Users</h2>
        <table class="table table-striped table-bordered">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>User Level</th>
            <th>Actions</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Michael Choi</td>
            <td>michael@village88.com</td>
            <td>Dec. 24th 2012</td>
            <td>admin</td>
            <td>edit remove</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Michael Choi</td>
            <td>michael@village88.com</td>
            <td>Dec. 24th 2012</td>
            <td>admin</td>
            <td>edit remove</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Michael Choi</td>
            <td>michael@village88.com</td>
            <td>Dec. 24th 2012</td>
            <td>admin</td>
            <td>edit remove</td>
          </tr>
        </table>
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
