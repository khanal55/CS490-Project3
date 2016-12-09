<?php 
  
  $db_hostname = 'kc-sce-appdb01';
  $db_database = "jmgkhb";
  $db_username = "jmgkhb";
  $db_password = "s1hKR13aGo6XNzsT3bxs";
  

 $connection = mysqli_connect($db_hostname, $db_username,$db_password,$db_database);
 
 if (!$connection)
    die("Unable to connect to MySQL: " . mysqli_connect_errno());


?>
