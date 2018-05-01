<?php
require ('config/db.php');

if (isset($_POST['delete_btn'])){
  $id = mysqli_real_escape_string($connection, $_POST['delete_id']);
  $sql_query = "delete from posts where id=$id";
  mysqli_query($connection, $sql_query);
}


$sql_query = "select * from posts order by created_at desc";
$results = mysqli_query($connection, $sql_query);

$posts = mysqli_fetch_all($results, MYSQLI_ASSOC);

// mysqli_free_result($results);
// mysqli_close($connection);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP MYSQLI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/bootstrap.min.css" />
</head>
<body>
  <div class='container'>
    <h1> Posts </h1>
    <a href='addpost.php' class='btn btn-success'>Add</a>
    <?php foreach($posts as $post):  ?> 
      <div class='col-md-12' style='padding:0'>
        <div class= 'well' id="<?php echo $post['id'] ?>">
          <h3> <?php echo $post['title']; ?></h3>
          <p> Author: <strong> <?php echo $post['author'] ?> </strong></p>
          <p> Body: <?php echo $post['body'] ?></p>
          <a href="the_post.php?id=<?php echo $post['id'] ?>" class='btn btn-info'> Read More </a>
          <a href="editpost.php?id=<?php echo $post['id'] ?>" class='btn btn-info'> Edit </a>
          
          <form method='post' action="<?php $_SERVER['PHP_SELF']?>" style='display:inline'>
            <input type='hidden' name='delete_id' value="<?php echo $post['id'] ?>" />
            <input type='submit' name='delete_btn' value='Delete' class='btn btn-danger'/>
          </form>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>