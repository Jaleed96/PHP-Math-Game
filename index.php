<?php
  session_start();
  if (isset($_SESSION['id'])) {
      $uid = $_SESSION['id'];
      $mailaddress = $_SESSION['email-address'];
  } else {
    header("Location: login.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Math Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style\toolkit-minimal.css">
    <link rel="stylesheet" href="Style\style.css">
  </head>
  <body>
    <?php 
      $_SESSION["num1"] = rand(0, 50);
      $_SESSION["num2"] = rand(0, 50);
      $_SESSION["operation"] = rand(0, 1);
      $sign = "";
      if ($_SESSION['operation'] == 0) {
        $sign = "+";
      } else {
        $sign = "-";
      }
    ?>
    <div class="container-fluid">
      <div class="jumbotron">
        <h1>Math Game</h1>
        <p>Enjoy our game.</p>
      </div>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4 content">
          <div class="math-problem">
            <p>
              <?php
                echo $_SESSION["num1"] . " " . $sign . " " . $_SESSION["num2"];
               ?>
                
            </p>
          </div>
          <form action="process.php" method="post" class="form-inline">
            <div class="form-group">
              <div class="input-group">
                <input name="input" type="text" class="form-control" placeholder="Enter Answer">
              </div>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Check Answer</button>
          </form>
          <?php 
            echo $_POST[input]; 
          ?>
          <hr>
          <?php 
            echo $_SESSION['message'];
          ?>
          <p class="score-line">
            <?php 
              echo "Score: ".$_SESSION['score']."/".$_SESSION['attempts'];
            ?>
          </p>
          <p class="result-display">
            <?php 
              echo "Correct answer: " . $_SESSION['result'];
            ?>
          </p>
          <form action="logout.php" method="post">
            <button type="submit" name="submit" value="logout" class="btn btn-primary">Logout</button>
          </form>
          
        </div>
        <div class="col-xs-4"></div>
      </div>
    </div>
  </body>
</html>