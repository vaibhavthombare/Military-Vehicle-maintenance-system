<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "indian_army";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT email, password From admin";
$result = $conn->query($sql);
$pos=0;
$email=$_POST["email"];
if ($result->num_rows > 0)
 {
    while($row = $result->fetch_assoc()) 
    {
    	if($row["email"]===$email)
    	{
            $new_password=mt_rand();
            $sql ="UPDATE admin SET password = '".md5($new_password)."' WHERE email='".$email."' ";
            if($result = $conn->query($sql))
            {
                echo "Succ";
            }
            else
            {
                echo "fail";
                return;
            }
            
            

    		$to = $email;
			$subject = "Password For IAVMS";
			$message = "<!DOCTYPE html>
                        <html>
                        <body>
                            <h1>Password For Your Account On IAVMS</h1>
                            <p>Password for your Account is ";
            $message .= "=".$new_password." Please do not share it with anyone else. You can use this password and can change the password afterwards if you want </p>                    
                        </body>
                        </html>";
            $headers = "From: sgmadankar@gmail.com"."\r\n";
            $headers .= "Reply-To:".$to."\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
			mail($to,$subject,$message,$headers);
    		$pos=1;
            echo '<script language="javascript">';
            echo 'window.location.href="login.html";';
            echo "alert('Password Has been Sent to your Registred email!');\n";
            echo '</script>';
    	}
    }
} 
if($pos==0)
{
    echo '<script language="javascript">';
    echo 'window.location.href="forgot.html";';
    echo "alert('Either email is incorrect or User does not exist!');\n";
    echo '</script>';

}
$conn->close();


?>
