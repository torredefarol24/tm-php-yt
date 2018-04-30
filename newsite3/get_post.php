<?php
  if (isset($_GET['name'])){
    // echo $_GET['name'];
    $personName = htmlentities($_GET['name']);
    // print_r($_GET);
  }

  // if (isset($_POST['name'])){
  //   echo $_GET['name'];
  //   echo htmlentities($_POST['name']);
  //   print_r($_GET);
  // }

  // if (isset($_REQUEST['name'])){
  //   print_r($_REQUEST);
  //   $name= htmlentities($_REQUEST['name']);
  //   echo $name;
  // }

  // echo $_SERVER['QUERY_STRING'];

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get Post</title>
  <link rel='stylesheet' href='../assets/bootstrap.min.css' />
</head>
<body>
  <form method='get' action='get_post.php'>
    <div class='form-group'>
      <label> Name</label>
      <input type='text' name='name'>
    </div>
    <div class='form-group'>
      <label> Email</label>
      <input type='text' name='email'>
    </div>
    <div class='form-group'>
      <button classs='btn' type='submit'> Submit</button>
    </div>
  </form>

  <ul>
    <li> <a href='get_post.php?name=John'> John</a></li>
    <li> <a href='get_post.php?name=Henry'> Henry</a></li>
  </ul>
  <h3> <?php echo "{$personName} Profile " ?></h3>
</body>
</html>