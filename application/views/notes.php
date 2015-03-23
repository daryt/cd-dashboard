<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Dashboard">
  <title>User Information</title>
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
   <div class="container">
    <div class="row">

      <div class="col-md-4">
        <h3 class="text-capitalize">Welcome, Tyler</h3>
      </div>
      <div class="col-md-4">
        <form action="wall_process.php" method='post'>
          <p class="add-post"><text class="field" name="log-off"></p>
          <input class="btn btn-primary" name="action" value ="log-off" type="submit" value="Add my quote!">
        </form>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-7 col-md-offset-1">
        <form action="wall_process.php" method='post' class="form-group">
          <p>Post a message
            <textarea class="form-control" rows="5" name="message" placeholder="Post your message!"></textarea></p>
            <input name="action" value ="post-message" type="hidden">
            <input class="btn btn-primary col-md-offset-10 pull-right" name="submit" value ="Post message" type="submit">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-1">
          <h4 class="text-capitalize"></h4>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-2">
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 col-md-offset-3">
          <h4></h4>
          <p></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 col-md-offset-3">
          <form class="form-group" action="wall_process.php" method='post'>
            <p>Post a comment 
              <textarea class="form-control" class="field" rows="3" name="comment" placeholder="Post your comment!"></textarea></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <input name="message-id" value ="" type="hidden">
              <input name="action" value ="post-comment" type="hidden">
              <input class="btn btn-success col-md-offset-10 pull-right" value ="Post comment" type="submit">
            </form>
          </div>
        </div>
      </div>
    </body>
    </html>
