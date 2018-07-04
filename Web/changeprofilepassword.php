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
$current_password=md5($_POST["current_password"]);
$new_password=md5($_POST["new_password"]);
$confirm_password=md5($_POST["confirm_password"]);

if($new_password != $confirm_password)
{
    echo '<script language="javascript">';
        echo 'window.location.href="changepassword.php";';
        echo "alert('Password does not match 1!');\n";
    echo '</script>';

}
$sql ="SELECT password FROM admin  WHERE email='".$_SESSION["email"]."' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        if($row["password"]==$current_password)
        {   
            $sql = "UPDATE admin set password = '".$new_password."' WHERE email='".$_SESSION["email"]."' ";      
            if ($conn->query($sql) === TRUE) 
            {
                
                echo '<script language="javascript">';
                    echo 'window.location.href="adminpage.php";';
                    echo "alert('Successfully Updated!');\n";
                echo '</script>';
            }
            else
            {

                echo '<script language="javascript">';
                    echo 'window.location.href="changepassword.php";';
                    echo "alert('Error Please update later !');\n";
                echo '</script>';                
            }



        }
        else
        {
            echo '<script language="javascript">';
                    echo 'window.location.href="changepassword.php";';
                    echo "alert('Password does not match !');\n";
                echo '</script>';
        }

    }
}
else
{
    echo '<script language="javascript">';
                    echo 'window.location.href="changepassword.php";';
                    echo "alert('Password does not match !');\n";
     echo '</script>';
}
            

$conn->close();
?>