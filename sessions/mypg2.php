<?php
  session_start();
  $theMsg =  "";
  $noSession = false;
  $noSessionMsg = "";
  if ($_SESSION){
    $theName = $_SESSION['name'];
    $theEmail = $_SESSION['email'];
  } else {
    $noSession = true;
    $noSessionMsg =  "Please Sign in to First.";
  }

  if(filter_has_var(INPUT_POST, 'session_destroy')){
    session_destroy();
      }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'/>
</head>
<body>
  <?php if($_SESSION): ?>
    <h5> Thank you</h5>
    <p> <?php echo $theName . '<br>'. $theEmail ?></p>
    <p> <?php echo $theMsg ?></p>
    <p> <?php print_r($_SESSION) ?></p>
    <a href='mypg3.php'>Visit Here</a>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
      <input type='submit' class='btn btn-secondary' value='Destroy Session' name='session_destroy'/>
    </form>
  <?php endif ?>
  <?php if($noSession): ?>
    <h5> <?php echo $noSessionMsg; ?> </h5>
    <a href='mypg1.php'> Click Here</a>
  <?php endif ?>
</body>
</html>