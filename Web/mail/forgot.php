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
$abc=0;
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
                $abc=1;
            }
            else
            {
                echo "fail";
                return;
            }
            
            if($abc==1)
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
                $Option['SUBJECT']="Your Account On IAVMS";
                $Option['BODY_TEXT']="";// if html is not supported then use text message instead
                $Option['BODY_HTML']="<!DOCTYPE html> <html><body><h1>Password For Your Account On IAVMS</h1><p>Password for your Account is =".$new_password." Please do not share it with anyone else. You can use this password and can change the password afterwards if you want </p></body></html>";


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
            }
            $pos=1;
            echo '<script language="javascript">';
            echo 'window.location.href="../login.html";';
            echo "alert('Password Has been Sent to your Registred email!');\n";
            echo '</script>';
    	}
    }
} 
if($pos==0)
{
    echo '<script language="javascript">';
    echo 'window.location.href="../forgot.html";';
    echo "alert('Either email is incorrect or User does not exist!');\n";
    echo '</script>';

}
$conn->close();


?>
