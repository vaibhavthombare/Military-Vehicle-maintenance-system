<?php

 include('connect.php');


  
  $vno=$_POST['vno'];
  $nature=$_POST['nature'];
  $date=$_POST['date'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  $currkm=$_POST['currkm'];
  $kmrun=$_POST['kmrun'];
  $total=$kmrun-$currkm;
     
//  $total=$_POST['total'];

$des=$_POST['des'];
mysqli_select_db($connect,"indian_army");
     
$rowSQL = mysqli_query($connect, "SELECT MAX(ctotal) AS max FROM cardiary;" );
$row = mysqli_fetch_array( $rowSQL );
$largestNumber = $row['max'];
     
     
     
/*$sql1="select max(ctotal) from cardiary";
$max=mysqli_query($connect,$sql1);
$fmax=$max+$total;     
//$row = mysqli_fetch_array($ctotal);
  //  echo "max is:" . $row['ctotal'];  
  print($max);*/
     $fmax=$largestNumber+$total;
     
    $qur="insert into cardiary(vno,nature,tdate,fromplace,todest,currkilo,kilorun,total,ctotal,des) values('$vno','$nature','$date','$from','$to','$currkm','$kmrun','$total','$fmax','$des')";
    $res=mysqli_query($connect,$qur);
  
  //		echo $res;
		if($res)
    {
	         //echo "inserted";
                 echo "Your data is successfully uploaded";
		 }
     else
         {
                 echo "There might be problem while uploading data..Please try again..";

         }
     
     
     
     



?>