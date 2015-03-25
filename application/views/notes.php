<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Notes">
  <title>Notes</title>
  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.4-dist/js/bootstrap.min.js">
  <link rel="stylesheet" href="assets/styles.css">
  <style>
  #navbar {
    height: 65px;
  }

  h3 {
    color: white;
    font-weight: 100;
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
    left: 110px;
    bottom: 33px;
    font-size: 16px;
    color: gray;
  }
  </style>
</head>
<body>
 <nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <h3>Welcome |</h3>
      <a href="#" class='barlink'>Users</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <a href="register" class="topright">Register</a>
      <a href="sign_in" class="topright1">Log-off</a>
    </div>
  </div>
</nav>
<div class= "row buffer">
  <div class="col-md-7 col-md-offset-1">
    <p>Michael Choi</p>
    <ul>
      <li>Registered at:</li>
      <li>User ID:</li>
      <li>Email address:</li>
      <li>Description:</li>
    </ul>
  </div>
</div>
<!-- post message input -->
<div class="row buffer">
  <div class="col-md-7 col-md-offset-1">
    <form action="/post_message" method='post' class="form-group">
      <p>Post a message</p>
        <textarea class="form-control" rows="5" name="message" placeholder="Post your message!"></textarea>
        <input name="action" value ="post-message" type="hidden">
        <input class="btn btn-primary col-md-offset-10 pull-right" name="submit" value ="Post message" type="submit">
      </form>
    </div>
  </div>
  <!-- this is where each message shows up -->
<?PHP   foreach (array_reverse($messages) as $message) { 
          $phpdate = strtotime($message['created_at']);
          $mysqldate = date('F jS Y', $phpdate);
?> 
  <div class="row">
      <div class="col-md-7 col-md-offset-1">
        <p><?= $message['first_name'] ?> wrote <?= $message['created_at'] ?> ago </p>
          <p><?= $message['content'] ?></p>
      </div>
  </div>

  <!-- this is where each comment shows up -->
<?php  foreach (array_reverse($comments) as $comment) {
          if ($comment['messages_id'] == $message['id'])
          {
            $phpdate = strtotime($comment['created_at']);
            $mysqldate1 = date('F jS Y', $phpdate);
?>
  <div class="row">
      <div class="col-md-7 col-md-offset-2">
        <p><?= $comment['first_name'] ?> wrote <?= $comment['created_at'] ?> ago </p>
          <p><?= $comment['comment'] ?></p>
      </div>
  </div>
<?PHP
    }}
?>
  <!-- post comment input -->
  <div class="row">
    <div class="col-md-5 col-md-offset-2">
      <form class="form-group" action="/create_comment" method='post'>
        <p>Post a comment </p>
          <textarea class="form-control" rows="3" name="comment" placeholder="Post your comment!"></textarea>
          <input type="hidden" name="message_id" value="<?= $message['id'] ?>">
          <input class="btn btn-success col-md-offset-9 pull-right" value ="Post comment" type="submit">
        </form>
      </div>
    </div>
<?PHP
  }
?>
  </body>
</html>