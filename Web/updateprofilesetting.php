<?php
session_start();
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
$mobile_no=$_POST["mobileNumber"];


$sql = "UPDATE admin set first_name = '".$firstName."' ,middle_name = '".$middleName."' , last_name = '".$lastName."',email= '".$email."',mobile_number = '".$mobile_no."' WHERE email='".$_SESSION["email"]."' ";

if ($conn->query($sql) === TRUE) {
	                 $_SESSION["first_name"]=$firstName;
                    $_SESSION["middle_name"]=$middleName;
                    $_SESSION["last_name"]=$lastName;
                    $_SESSION["mobile_number"]=$mobile_no;
                  	$_SESSION["email"]=$email;
					
    echo '<script language="javascript">';
    echo 'window.location.href="adminpage.php";';
    echo "alert('Successfully Updated!');\n";
    echo '</script>';
} 
else 
{
    echo '<script language="javascript">';
    echo 'window.location.href="profilesetting.php";';
    echo "alert('User already exist');\n";
    echo '</script>';
}

$conn->close();
?>