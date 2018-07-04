<?php
session_start();
 include('connect.php');
  if(isset($_POST['submit']))
  { 
    $vno=$_SESSION["vno"];
    $eno=$_POST['eno'];
    $cno=$_POST['chasisno'];
    $tyno1=$_POST['tyno1'];
    $tyno2=$_POST['tyno2'];
    $tyno3=$_POST['tyno3'];
    $tyno4=$_POST['tyno4'];
    $tyno5=$_POST['tyno5'];
    $tyno6=$_POST['tyno6'];
    $engineoildate=$_POST['engineoildate'];
    $steringoildate=$_POST['steringoildate'];
    $tyrerotationdate=$_POST['tyrerotationdate'];
    $lifeofbattery=$_POST['lifeofbattery'];
    $majorissuedate=$_POST['majorissuedate'];
    $majorissuedes=$_POST['majorissuedes'];
    $part1date=$_POST['part1date'];
    $part2date=$_POST['part2date'];
    $part1des=$_POST['part1des'];
    $part2des=$_POST['part2des'];
    $pos=0;
    mysqli_select_db($connect,"indian_army");
   	$abc=0;
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

    $sql = "SELECT tyrerotation From logbook where vno='".$vno."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
		 {
		    // output data of each row
		    while($row = $result->fetch_assoc()) 
		    {
		    	if($tyrerotationdate!= $row['tyrerotation'])
		    	{
		    		$abc=1;
		    	}
		    }
		}

	$z=0;
	if($abc==1)
	{
		$sql = "UPDATE cardiary SET ctotal='".$z."' where vno='".$vno."'";
    	$result = $conn->query($sql);
    	
	}


    $qur="UPDATE logbook SET eno='".$eno."', chasis_no='".$cno."',tyreno1='".$tyno1."',tyreno2='".$tyno2."',tyreno3='".$tyno3."',tyreno4='".$tyno4."',tyreno5='".$tyno5."',tyreno6='".$tyno6."', engineoil='".$engineoildate."',steringoil='".$steringoildate."',tyrerotation='".$tyrerotationdate."',lifeofbattery='".$lifeofbattery."' WHERE vno='".$vno."'  ";
    	
    	mysqli_select_db($connect,"indian_army");
		$rowSQL = mysqli_query($connect, "SELECT vno, MAX(ctotal) AS max FROM cardiary group by vno having  vno='".$vno."'; " );
		$row = mysqli_fetch_array( $rowSQL );
		$kreading = $row['max'];
		$sql = "UPDATE logbook SET kilometer_tyre_rotation ='".$kreading."' where vno='".$vno."'";
    	$result = $conn->query($sql);




    $res=mysqli_query($connect,$qur);

   if($res)
        {
          if ($majorissuedate!='') 
          {
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

                 if ($conn->query($sql) === TRUE) {
                  } 
          }
          if($part1date!='')
          {
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
                  $sql = "insert into part_change values ('$vno','$part1date','$part1des')";

                 if ($conn->query($sql) === TRUE) {
                  } 
          }
          if($part2date!='')
          {
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
                  $sql = "insert into part_change values ('$vno','$part2date','$part2des')";

                 if ($conn->query($sql) === TRUE) {
                  } 
          }
           echo '<script language="javascript">';
                       echo 'alert("Your data is successfully uploaded");';
                       echo 'window.location.href="logbook.php";';
                      
           echo '</script>';

        }
    else
       {    
                 echo '<script language="javascript">';
                 echo 'alert("There might be problem while uploading data..Please try again..");';
                 echo 'window.location.href="updatelog.php";';
                 echo '</script>';
             
        }
     
  }