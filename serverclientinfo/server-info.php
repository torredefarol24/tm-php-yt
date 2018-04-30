<?php 
//Server Array;
$server = [
  'HostServerName' => $_SERVER['SERVER_NAME'],
  'HostHeader' => $_SERVER['HTTP_HOST'],
  'ServerSoftware' => $_SERVER['SERVER_SOFTWARE'],
  'DocRoot' => $_SERVER['DOCUMENT_ROOT'],
  'CurrentPg' => $_SERVER['PHP_SELF'],
  'ScriptName' => $_SERVER['SCRIPT_NAME'],
  'AbsolutePath' => $_SERVER['SCRIPT_FILENAME']

];

// echo 'Host Server Name: ' . $server['HostServerName'] . '<br> ';
// echo 'Host Header: ' . $server['HostHeader'] . '<br>';
// echo 'Server Software: ' . $server['ServerSoftware'] . '<br>';
// echo 'Document Root: ' . $server['DocRoot'] . '<br>';
// echo 'Current Page: ' . $server['CurrentPg'] . '<br>';
// echo 'Absolute Path : ' . $server['AbsolutePath'] . '<br>';


//Client Array;

$client = [
  'ClientSystemInfo' => $_SERVER['HTTP_USER_AGENT'],
  'ClientIP' => $_SERVER['REMOTE_ADDR'],
  'RemotePort' => $_SERVER['REMOTE_PORT']

];

// echo "<br>";
// echo 'Client System Info: ' . $client['ClientSystemInfo'] . '<br>';
// echo 'Client IP: ' . $client['ClientIP'] . '<br>';
// echo 'Remote Port: ' . $client['RemotePort'] . '<br>';

?>