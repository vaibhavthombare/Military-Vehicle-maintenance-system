<?php
 include('connect.php');

    $vno=$_POST["vno"];
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
    $part1date=$_POST['partdate'];
    $part1des=$_POST['part1des'];
    mysqli_select_db($connect,"indian_army");
    $qur="UPDATE logbook SET eno='".$eno."', chasis_no='".$cno."',tyreno1='".$tyno1."',tyreno2='".$tyno2."',tyreno3='".$tyno3."',tyreno4='".$tyno4."',tyreno5='".$tyno5."',tyreno6='".$tyno6."', engineoil='".$engineoildate."',steringoil='".$steringoildate."',tyrerotation='".$tyrerotationdate."',lifeofbattery='".$lifeofbattery."' WHERE vno='".$vno."'  ";
    $res=mysqli_query($connect,$qur);

   if($res)
        {
          $m_issue=0;
          $part=0;
          if ($majorissuedate!='null') 
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

                 if ($conn->query($sql) === TRUE)
                  {
                      $m_issue=1;
                  } 
          }
          else
          {
            $m_issue=1;
          }
          if($part1date!='null')
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

                 if ($conn->query($sql) === TRUE) 
                 {
                    $part=1;
                 } 
          }
          else
          {
            $part=1;
          }
         
         if($m_issue==1 && $part==1)
          {
            echo "Your data is successfully submitted";
          }
          else
          {
              echo "failed";
          }
        }
     
  ?>