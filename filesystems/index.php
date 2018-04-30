<?php
$path = '/dir1/myfile.php';
$file = "file1.txt";

echo basename($path) . "<br> ";
echo basename($path, '.php') . "<br>";

echo dirname($path) . "<br>";
echo file_exists($file) . "<br> ";
// file_exists also works for folders

echo realpath($file) . "<br>";
echo is_file($file) . "<br>";

mkdir("demo");
// mkdir("demo1");
rmdir("demo");

copy('file1.txt', 'file2.txt');
copy('file2.txt', 'namehere.txt');

unlink('file2.txt');

echo file_get_contents($file) . '<br>';

// file_put_contents overwrites all content;
file_put_contents($file, "haha - overwritten");

$original_content = file_get_contents($file);
$additional_content = " very nice";
$original_content .= $additional_content;

file_put_contents($file, $original_content);

$fileContent = fopen("file1.txt", 'r');
$data = fread($fileContent, filesize("file1.txt"));
fclose($fileContent);

$text = "soemthing to put in file";
$fileContent = fopen("file1.txt", 'w');
fwrite($fileContent, $text);
fclose($fileContent);
