<?php
  $theMsg = '';
  $theMsgClass = '';

  if (filter_has_var(INPUT_POST, 'submit')){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $msg = htmlspecialchars($_POST['message']);

    if (!empty($email) && !empty($name) && !empty($msg)){
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $theMsg = 'Please use valid email';
        $theMsgClass = 'danger';
      } else {
        $toEmail = "burningraven06@gmail.com";
        $emailSubject = 'Contact Request From '. $name;
        $emailBody = "<h2> Form Submission Request </h2> <p> Name: {$name} </p> <p> Email: {$email}</p> <p> Msg: {$msg}</p>";
        $emailHeaders = "MIME-Version: 1.0\r\n";
        $emailHeaders .= "Content-Type: text/html; charset=utf-8\r\n";
        $emailHeaders .= "From: {$name} <{$email}>\r\n";

        if (mail($toEmail, $emailSubject, $emailBody, $emailHeaders)){
          $theMsg = 'Email Sent';
          $theMsgClass = 'success';
        } else {
          $theMsg = 'Email Could not be sent';
          $theMsgClass = 'warning';
        }
        
      }

    } else{
      $theMsg = 'Please fill in values correctly';
      $theMsgClass = 'danger';
    }
  }

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' />
</head>
<body>
  <nav class='navbar navbar-default'>
    <div class='container'>
      <div class='navbar-header'>
        <a class='navbar-brand' href='index.php'>DemoSite</a>
      </div>
    </div>
  </nav>
  <div class='container'>
      <?php if($theMsg!=""): ?>
        <div class="alert alert-<?php echo $theMsgClass; ?>" >
          <?php echo $theMsg; ?>
        </div>

      <?php endif ?>

      <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class='form-group'>
          <label> Name</label>
          <input type='text' name='name' class='form-control' value="<?php echo isset($_POST['name'])? $_POST['name'] : "" ?>"/>
        </div>
        <div class='form-group'>
          <label> Email</label>
          <input type='text' name='email' class='form-control' value="<?php echo isset($_POST['email'])? $_POST['email'] : "" ?>"/>
        </div>
        <div class='form-group'>
          <label> Message</label>
          <textarea name='message' class='form-control' value="<?php echo isset($_POST['message'])? $_POST['message'] : "" ?>" ></textarea>
        </div>
        <div class='form-group'>
          <input type='submit' class='btn btn-primary' name='submit' value="Submit"/> 
        </div>
      </form>
    </div>
</body>
</html>