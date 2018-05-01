<?php 

require('config/db.php');
$post_id = mysqli_real_escape_string($connection, $_REQUEST['id']);
// $post_id = mysqli_real_escape_string($connection, $_GET['id']);

// $post_id = $_REQUEST['id'];

$sql_query = "select * from posts where id={$post_id}";
$result = mysqli_query($connection, $sql_query);

$the_post = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $the_post['title']; ?> </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/bootstrap.min.css" />
</head>
<body>
  <div class='container'>
    <div class='col-md-12' style='padding:0'>
      <h1> <?php echo $the_post['title'] ?></h1>
      <p> Author: <strong> <?php echo $the_post['author'] ?> </strong></p>
          <p> Body: <?php echo $the_post['body'] ?></p>
          <p> Date: <?php echo $the_post['created_at'] ?> </p>
          <a href="index.php" class='btn btn-info'> All </a>
    </div>
  </div>
</body>
</html>