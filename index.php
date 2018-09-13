<?php
  require('functions/core.php');

  if(isset($_POST['submit'])){
    $uname  = $_POST['username'];
    $passwd = $_POST['password'];
    $cek = $koneksi->autentikasi($uname,$passwd);

    if($cek == "True"){
      header('location: dashboard.php');
    }else {
      echo "username or password = incorrect";
    }

  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD-Login Bootstrap</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-3 col-sm-6 col-md-4 col-md-offset-4">
          <div class="logBox">
            <div class="text-center">
              <h2>Please log in</h2>
            </div>
            <form class="form-signin" action="index.php" method="post">
              <p>Username</p>
              <input type="username" name="username" class="boxInput form-control" placeholder="username">
              <p>Password</p>
              <input type="password" name="password" class="boxInput form-control" placeholder="password">
              <input type="submit" name="submit" value="Submit" class="btn buton btn-block btn-primary">
              <div class="text-right">
                <a href="formReg.php" style="color: rgb(0, 0, 0);">Register</a>
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
