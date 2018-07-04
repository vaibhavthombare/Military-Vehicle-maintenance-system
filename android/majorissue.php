<?php
 include('connect.php');
 $vno=$_POST['vno'];
 $majorissuedate=$_POST['date'];
 $majorissuedes=$_POST['dis'];
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
                  $sql = "insert into major_issue values ('$vno','$majorissuedate','$majorissuedes')";

                 if ($conn->query($sql) === TRUE)
                 {
                 	echo "Successfully submitted";
                 }
                 else
                 {
                 	echo 'Failed to submit data';
                 }
         ?>