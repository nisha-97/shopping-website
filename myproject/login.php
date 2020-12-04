<?php
require 'includes/common.php';
?>
<!DOCTYPE HTML>
<html>
  <head>
      <title>Lifestyle Store</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="style.css">
    <style>
        .decoration{
            text-decoration:none;
        }
    </style>
  </head>
  <body>
       <?php
       include 'includes/header.php';
       ?>
      <br><br><br><br><br>
      <div class="container">
          <div class="row">
              <div class="col-sm-offset-4 col-md-4">
          <div class="panel panel-primary">
             <div class="panel-header">
                  <h3>Login</h3>
              </div>
              <div class="panel-body">
                  <p class="text-warning">Login to make purchase</p>
                  <form method="post" action="login_submit.php">
                      <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
                      </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" pattern=".{6,}" required="true">
                      </div>
                      <button class="btn btn-primary">Submit</button>
                      <div class="panel-footer">
                          <a href="#" class="decoration">Don't have an account?Register</a>
                      </div>
                  </form>
              </div>
          </div>
      </div>
          </div>
      </div>
       <br><br><br><br><br><br><br><br>
       <?php
       include 'footer.php';
       ?>
  </body>
</html>