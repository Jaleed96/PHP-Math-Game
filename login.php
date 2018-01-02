<?php 
  session_start();
  if(isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
  }
  // if ($_POST['email']) {
  //   $address = "a@a.a";
  //   $pass = "aaa";
  //   $uid = "1111";

  //   $mail = strip_tags($_POST['email']);
  //   $pswrd = strip_tags($_POST['password']);

  //   if ($mail == $address && $pswrd == $pass) {
  //     // Setting session
  //     $_SESSION['email-address'] = $address;
  //     $_SESSION['id'] = $uid;

  //     header("Location: index.php"); 
  //   } else {
  //     $error_message = "<p style='color: red'>Wrong credentials, buddy boy</p>";
  //   }
  // }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style\toolkit-minimal.css">
    <link rel="stylesheet" href="Style\style.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="jumbotron">
        <h1>Math Game</h1>
        <p>Login to enjoy our game.</p>
      </div>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="authentication.php" method="post">
            <div class="form-group">
              <label for="E-mail">Email address:</label>
              <input type="text" name="email" class="form-control" id="E-mail" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="text" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
          <p style="color: red">
            <?php 
            echo $_SESSION['error'];
            ?>
          </p>
          
        </div>
        <div class="col-xs-4"></div>
      </div>

    </div>
  </body>
</html>
