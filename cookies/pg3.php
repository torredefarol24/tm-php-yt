<?php
$user = [
    'name' => "Harry",
    'age' => 30,
    'email' => "test@harry.test",
];

$user = serialize($user);
setcookie('user', $user, time() + (86400 * 30));
$user = unserialize($user);
$theName = $user['name'];
$theAge = $user['age'];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP Cookie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='assets/bootstrap.min.css' />
</head>
<body>
  <div class='container'>
    <h1> Cookie Info</h1>
    <p> Name: <?php echo $theName; ?> </p>
    <p> Age: <?php echo $theAge; ?></p>
  </div>
</body>
</html>