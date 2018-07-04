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
$regiment=$_SESSION["regiment"];
$longi=$_POST["longi"];
$lati=$_POST["lati"];
$location=$_POST["loc"];

$sql = "INSERT into nearbyunits values('$regiment','$longi','$lati','$location') " ;

if ($conn->query($sql) === TRUE) {
					
    echo '<script language="javascript">';
    echo 'window.location.href="adminpage.php";';
    echo "alert('Successfully Added!');\n";
    echo '</script>';
} 
else 
{
    echo '<script language="javascript">';
    echo 'window.location.href="adminpage.php";';
    echo "alert('Regiment Location Already Exists');\n";
    echo '</script>';
}

$conn->close();
?>