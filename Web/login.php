<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "indian_army";
session_start();


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT regiment_name,email,password From admin";
$result = $conn->query($sql);
$pos=0;
$email=$_POST["email"];
$regiment_name=$_POST["regiment"];
if ($result->num_rows > 0)
 {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    	if($row["email"]===$email && $row["password"]===md5($_POST["password"]) && $row["regiment_name"]== $regiment_name)
    	{
            $sql ="SELECT first_name, middle_name,last_name,password,mobile_number FROM admin  WHERE email='".$email."' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    $_SESSION["first_name"]=$row["first_name"];
                    $_SESSION["middle_name"]=$row["middle_name"];
                    $_SESSION["last_name"]=$row["last_name"];
                    $_SESSION["mobile_number"]=$row["mobile_number"];
                }
            }
            
            $_SESSION["regiment"] = $regiment_name;
            $_SESSION["email"]=$email;
            echo '<script language="javascript">';
                
                echo 'window.location.href="adminpage.php";';   
            echo '</script>';
    		
    	
    	}
    }
} 
if($pos==0)
{   
    echo '<script language="javascript">';
    echo 'window.location.href="login.html";';
    echo "alert('Username or Password or Regiment Name is incorrect!');\n";
    echo '</script>';
}
$conn->close();
?>