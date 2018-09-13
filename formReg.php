<?php
  require('functions/core.php');

  if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $passwd = $_POST['password'];
    $reason = $_POST['message'];

    if(!empty(trim($uname)) && !empty(trim($email)) &&!empty(trim($name)) && !empty(trim($passwd)) && !empty(trim($reason)) ){
      $input = $koneksi->register($uname,$email,$name,$passwd,$reason);

      if($input == "True"){
        header('location: index.php');
      }
    }else {
      echo "gagal register";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD-Form Bootstrap</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
          <div class="logBox" style="margin-top:0%;">
            <div class="text-center">
              <h2 style="margin-top:-30px;">Do you not have an account? Please register</h2>
            </div>
            <form class="form-signin" method="post" action="formReg.php">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" required>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Your name" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
                <!-- <label for="blood">Blood type =>  </label>
                <input type="radio" name="blood" value="a">A
                <input type="radio" name="blood" value="b">B
                <input type="radio" name="blood" value="ab">AB
                <input type="radio" name="blood" value="o">O<br> -->
                <label for="message">Reason for joining</label>
                <textarea name="message" rows="4" cols="80" class="form-control" style="max-width:300px;" placeholder="Enter you reason" required></textarea>
              </div>
              <label><input type="checkbox" value="remember-me" required> I accept the rules</label>
              <button type="submit" name="submit" class="btn btn-block btn-primary">Register</button>
              <div class="text-right">
                <a href="index.php" style="color:rgb(0, 0, 0);">Log in</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
