
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
          if($res)
            {

                            #lets first init the config
                ###########################
                ####### init Config #######
                ###########################

                #api key and domain (from mailgun.com panel)
                $secretkey='key-2449b11bd29d4ba2db9153b19f081094';
                //source domain (you can add your own domain at mailgun panel and use it)
                $domain = "sandboxd8d4cd75886f462f8ed95d69db5244a4.mailgun.org";

                # email options 
                $Option['FROM_MAIL']="postmaster@sandboxd8d4cd75886f462f8ed95d69db5244a4.mailgun.org";
                $Option['FROM_NAME']="IAVMS";//any name you want it to appear
                $Option['TO_MAIL']=$email;
                $Option['TO_NAME']="User";
                $Option['SUBJECT']="Password For Account on IAVMS";
                $Option['BODY_TEXT']="";// if html is not supported then use text message instead
                $Option['BODY_HTML']="<!DOCTYPE html> <html><body><h1>Password For Your Account On IAVMS</h1><p>Password for your Account is =".$password." Please do not share it with anyone else. You can use this password and can change the password afterwards if you want </p></body></html>";


                ###########################
                ### Calling mailGun API ###
                ###########################

                # Include the Autoloader
                require 'vendor/autoload.php';

                # Instantiate the client with option to disable ssl verfication.
                $client = new \GuzzleHttp\Client([
                    'verify' => false,
                ]);

                # pass the client to Guzzle Adapter
                $adapter = new \Http\Adapter\Guzzle6\Client($client);

                # pass the Adapter to mailgun object
                $mailgun = new \Mailgun\Mailgun($secretkey, $adapter);



                # Make the call to the client.
                $result = $mailgun->sendMessage($domain, array(
                    'from'    => $Option['FROM_NAME']." <".$Option['FROM_MAIL'].">",
                    'to'      => $Option['TO_NAME']." <".$Option['TO_MAIL'].">",
                    'subject' => $Option['SUBJECT'],
                    'text'    => $Option['BODY_TEXT'],
                    'html'    => $Option['BODY_HTML'],
                ));
                

                 echo '<script language="javascript">';
                        echo 'window.location.href="../adminpage.php";';
                        echo "alert('Vehicle Added Successfully!');\n";
                 echo '</script>';
            }


      }
      else
      {
        echo '<script language="javascript">';
        echo 'window.location.href="../adminpage.php";';
        echo "alert('Vehicle Already Exists or There might be a problem while uploading the data!');\n";
        echo '</script>';
      }
     
  }