<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "indian_army";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}





$firstName=$_POST["firstName"];
$middleName=$_POST["middleName"];
$lastName=$_POST["lastName"];
$email=$_POST["email"];
$password1=md5($_POST["password"]);
$password2=md5($_POST["confirm_password"]);
$mobile_no=$_POST["mobileNumber"];
$regimentname=$_POST["regiment"];

if($password1!=$password2)
{
	echo '<script language="javascript">';
    echo 'window.location.href="signup.html";';
    echo "alert('Password does not match!');\n";
    echo '</script>';
}
// sql to create table

$sql = "insert into admin values ('$regimentname','$firstName','$middleName','$lastName','$email','$password1','$mobile_no')";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'window.location.href="login.html";';
    echo "alert('You have been successfully Registered!');\n";
    echo '</script>';
} 
else 
{
    echo '<script language="javascript">';
    echo 'window.location.href="signup.html";';
    echo "alert('User already exist');\n";
    echo '</script>';
}

$conn->close();
?>