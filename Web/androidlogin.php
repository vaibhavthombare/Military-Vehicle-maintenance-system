<?php
include('connect.php');
        mysqli_select_db($connect,"indian_army");
        
$email=$_POST["name"];
$password=$_POST["pass"];


$qur="select * from admin  WHERE email='".$email."'and password='".$password."' ";


if($res=mysqli_query($connect,$qur))
{    
      if(mysqli_num_rows($res) > 0)
        {
            echo "YES";
        }
}
else
{
    echo "NO";
}
