<?php
  $theMsg = '';
  if (filter_has_var(INPUT_POST, 'submit')){
    if(empty($_POST['name']) || empty($_POST['email'])){
      $theMsg = "Please Fill the values correctly";
    } else {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      session_start();
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      header('Location: mypg2.php');
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP Sessions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' />
</head>
<body>
  <div class='container'>
    <h1> Hey</h1>
    <h4> <?php if($theMsg != ""): endif?> <?php echo $theMsg; ?> </h4>
    <form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" >
      <div class="form-group">
        <input type='text' name='name' placeholder='Name' class='form-control'/>
      </div>
      <div class="form-group">
        <input type='text' name='email' placeholder='Email' class='form-control'/>
      </div>
      <div class='form-group'>
        <input type='submit' name='submit' value='Submit' class='btn btn-secondary'/>
      </div>
    </form>
  </div>
</body>
</html>