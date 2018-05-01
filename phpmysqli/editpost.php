<?php 
require('config/db.php') ;
$errMsg = "";
$errClass = "";
$titleVal = "";
$bodyVal = "";
$authorVal = "";
$formActionURL = $_SERVER['PHP_SELF'];

$post_id = mysqli_real_escape_string($connection, $_GET['id']);

if ($post_id){
  $sql_query = "select * from posts where id=$post_id";
  $result = mysqli_query($connection, $sql_query);
  if (!$result){
    $errClass = "danger";
    $errMsg = "ID Doesn't Exist";
  } else {
    $post = mysqli_fetch_assoc($result);
    $formActionURL .= "?id=$post_id";
    $titleVal = $post['title'];
    $bodyVal = $post['body'];
    $authorVal = $post['author'];
    // mysqli_free_result($result);
    // mysqli_close($connection);
  }
} else {
  $errClass = "danger";
  $errMsg = "Incorrect Route Params";
}

if(isset($_POST['cancel'])){
  header('Location: index.php');
}

if(isset($_POST['edit'])){
  $titleVal = $_POST['postTitle'];
  $bodyVal = $_POST['postBody'];
  $authorVal = $_POST['postAuthor'];

  if (empty($titleVal) || empty($bodyVal)|| empty($authorVal) ) {
    $errClass = "danger";
    $errMsg = "Please fill values correctly";
  } else {
    $sql_query = "update posts set title='$titleVal', author='$authorVal', body='$bodyVal' where id=$post_id ;";
    $result =  mysqli_query($connection, $sql_query);
    if ($result){
      $errClass = "success";
      $errMsg = "Post Updated";
    } else {
      $errClass = "danger";
      $errMsg = mysqli_error($connection);
    }
  }
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $result ? $post['title']: "Wow" ?> </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/bootstrap.min.css" />
</head>
<body>
  <div class='container'>
    <div class='col-md-6 col-md-offset-3 col-sm-12'>
      <h1> <?php echo $post? $post['title']: "" ?></h1>
      <?php if ($errMsg!= ""): ?>
        <div class='alert alert-<?php echo $errClass;?>'>
          <p> <?php echo $errMsg?></p>
        </div>
      <?php endif ?>
      <a href="<?php echo 'index.php' ?>" class='btn btn-secondary'> Home</a>

      <form method='POST' action="<?php echo $formActionURL; ?>">
        <div class='form-group'>
          <label for='postTitle'>Title</label>
          <input type='text' name='postTitle' class='form-control' value="<?php echo $titleVal ?>"/>
        </div>
        <div class='form-group'>
          <label for='postAuthor'>Author</label>
          <input type='text' name='postAuthor' class='form-control' value="<?php echo $authorVal ?>"/>
        </div>
        <div class='form-group'>
          <label for='postBody'>Body</label>
          <input type='text' name='postBody' class='form-control' value="<?php echo $bodyVal ?>"/>
        </div>
        <div class='form-group'>
          <button class='btn btn-success' name='edit'>Save</button>
          <button class='btn btn-secondary' name='cancel'>Cancel</button>
        </div>
      </form>
    </div>

  </div>
</body>
</html>