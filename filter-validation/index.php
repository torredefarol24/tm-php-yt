<?php
if (filter_has_var(INPUT_GET, 'data')) {
    echo 'GET Data Found <br>';
} else {
    echo 'No GET Data <br>';
}

if (filter_has_var(INPUT_POST, 'data')) {

    $email = $_POST['data'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email . '<br>';

    if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
        echo "Valid Email";
    } else {
        echo "Email not valid";
    }
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Filter, Validation</title>
  <link rel='stylesheet' href='assets/bootstrap.min.css' />
</head>
<body>
  <div class='container'>
    <form method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
      <input type='text' class='form-control' name='data'/>
      <button type='submit' class='btn btn-info'> Submit</button>
    </form>
  </div>
</body>
</html>