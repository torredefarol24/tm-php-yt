<?php

if (isset($_COOKIE['username'])) {
    echo "Username in cookie is: {$_COOKIE['username']}";
} else {
    echo "Nothing in cookie";
}

if (filter_has_var(INPUT_POST, 'delete_cookie')) {
    setcookie('username', "wow", time() - 3600);
}

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
    <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type='submit' name='delete_cookie' value="Delete" />
    </form>
  </div>
</body>
</html>