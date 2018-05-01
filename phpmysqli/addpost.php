<?php 
require('config/db.php');
  $errMsg = "";
  if(isset($_POST['submit'])){
    $title = mysqli_real_escape_string($connection, $_POST['postTitle']);
    $author = mysqli_real_escape_string($connection, $_POST['postAuthor']);
    $body = mysqli_real_escape_string($connection, $_POST['postBody']);
    if (empty($title) || empty($author) || empty($body)){
      $errMsg = "Please fill values correctly";
    } else {
      $sql_query = "insert into posts(title, author, body) values('$title', '$author', '$body') ;";
      if (mysqli_query($connection, $sql_query)){
        header('Location: index.php' );
      } else {
        $errMsg = mysqli_error($connection);
      }
    }
  }

  if(isset($_POST['cancel'])){
    header('Location: index.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Post</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/bootstrap.min.css" />
</head>
<body>
  <div class='container'>
    <div class = 'col-md-6 col-md-offset-3 col-sm-12'>
    <h1> Add Post</h1>
    <?php if($errMsg!= ""):  ?> 
      <div class='alert alert-danger'>
        <p> <?php echo $errMsg ?> </p>
      </div>
    <?php endif ?>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
        <div class='form-group'>
          <label for='postTitle'> Title</label>
          <input type='text' name='postTitle' class='form-control' />
        </div>
        <div class='form-group'>
          <label for='postAuthor'> Author</label>
          <input type='text' name='postAuthor' class='form-control' />
        </div>
        <div class="form-group">
          <label for="postBody">Body</label>
          <input type="text" name="postBody" class="form-control"/>
        </div>
        <div class='form-group'>
          <button name='submit' class='btn btn-success'>Create</button>
          <button name='cancel' class='btn btn-secondary'>Cancel</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>