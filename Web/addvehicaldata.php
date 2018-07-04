
<?php
  session_start();
 include('connect.php');
  if(isset($_POST['submit']))
  {
    $vno=$_POST['vno'];
    $tno=$_POST['tno'];
    $first_name=$_POST['firstName'];
    $middle_name=$_POST['middleName'];
    $last_name=$_POST['lastName'];
    $email=$_POST['email'];
    $password=mt_rand();
    $new_password=md5($password);
    $mobile_number=$_POST['mobileNumber'];
  
    $regiment_name=$_SESSION["regiment"];
    mysqli_select_db($connect,"indian_army");
    $qur="insert into vehicle(regiment_name,vno,tacno,first_name,middle_name,last_name,email,password,mobile_number) values('$regiment_name','$vno','$tno','$first_name','$middle_name','$last_name','$email','$new_password','$mobile_number')";
    $res=mysqli_query($connect,$qur);
   if($res)
        {
          mysqli_select_db($connect,"indian_army");
          $qur="insert into logbook(vno) values('$vno')";
          $res=mysqli_query($connect,$qur);
          $to = $email;
      $subject = "Password For IAVMS";
      $message = "<!DOCTYPE html>
                        <html>
                        <body>
                            <h1>Password For Your Account On IAVMS</h1>
                            <p>Password for your Account is ";
            $message .= "=".$password." Please do not share it with anyone else. You can use this password and can change the password afterwards if you want </p>                    
                        </body>
                        </html>";
            $headers = "From: sgmadankar@gmail.com"."\r\n";
            $headers .= "Reply-To:".$to."\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      mail($to,$subject,$message,$headers);
	 
		 echo '<script language="javascript">';
                 echo 'alert("vehicle is successfully added");';
		 echo 'window.location.href="adminpage.php";';
		 echo '</script>';
		 }
     else
         {
            echo '<script language="javascript">';
                 echo 'alert(" Vehicle already exist OR There might be problem while uploading data..Please try again..");';
		 echo 'window.location.href="addvehicle.php";';
		 echo '</script>';
         }
     
  }