<?php 
  $output = substr('Helios', 1,4);
  echo $output .  "<br>";

  echo strlen("this is cool");

  echo '<br>';
  echo strrpos("this is very cool", 'i');
  // strrpos lists the last index of the char
  echo "<br> ";

  $newoutput = "  ha  hahah  ha";
  var_dump($newoutput);
  echo "<br>";
  echo trim($newoutput);

  echo strtoupper("something here");
  echo '<br>';

  echo strtolower("There is NONE");
  echo '<br>';

  echo ucwords("test this line and again do it");
  echo '<br>';

  echo ucfirst("now how is THIS");
  echo '<br>';

  $sampleStr = "Hey Mark is this Cool";
  echo str_replace('Mark', 'ReplacedVal', $sampleStr);
  echo "<br>";

  echo is_string("nice");
  echo "<br>";

  $values = array(true, false, null, 
   'abc', 33, '33', 22.4, '');
  
  foreach($values as $item){
    echo $item . '<br>';
    if (is_string($item)){
      echo "{$item} = string";
    }
  }

  $strVal = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime enim aliquid similique esse deleniti quod consequuntur tempore natus suscipit. Nam voluptatum aspernatur doloremque minus, quos alias nobis laboriosam minima repellat.';

  $compressedString = gzcompress($strVal);
  $uncompressedString = gzuncompress($compressedString);

  echo $compressedString . "<br>";
  echo $uncompressedString . "<br>";

?>