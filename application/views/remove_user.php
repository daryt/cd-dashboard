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
  <h1>Are you sure you want to remove the following user?</h1>
  <p>Name: <?= $user['first_name'] ?></p>
  <p class="yes">Description: <?= $user['description'] ?></p>
  <a href="/admin/">Cancel</a>
  <form method="post" action="/admin/deleteUser">
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
    <input type='submit' value="Yes">
  </form>
</div>
</div>
<hr>
      <footer>
        <p>&copy; Company 2014</p>
      </footer>
</body>
</html>