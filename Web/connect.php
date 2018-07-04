<?php 
   $hostname="localhost";
   $password="";
   $username="root";
   $connect=mysqli_connect($hostname,$username,$password) or                trigger_error(mysql_error(),E_USER_ERROR);
$db="army";
$dbname=mysqli_select_db($connect,$db);
 



?>