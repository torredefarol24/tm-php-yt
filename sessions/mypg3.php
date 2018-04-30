<?php
  session_start();
  unset($_SESSION['name']);
  $name = isset($_SESSION['name']) ? $_SESSION['name']: "Guest";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='assets/bootstrap.min.css' />
</head>
<body>
  <h3> Session Name unset</h3>
  <p> You are <?php echo $name ?> </p>
  <a href='mypg1.php'>Pg1</a>
</body>
</html>