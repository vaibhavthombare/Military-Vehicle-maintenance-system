<?php
session_start();
 $vno=$_SESSION["vno"];
 include('connect.php');

 if(isset($_POST['submit']))
 {
    
  $nature=$_POST['nature'];
  $date=$_POST['date'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  $currkm=$_SESSION["ckm"];
  $kmrun=$_POST['kmrun'];
  $total=$kmrun-$currkm;
     
//  $total=$_POST['total'];

$des=$_POST['des'];
mysqli_select_db($connect,"indian_army");
     
$rowSQL = mysqli_query($connect, "SELECT vno, MAX(ctotal) AS max FROM cardiary group by vno having  vno='".$vno."';" );
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
		 echo '<script language="javascript">';
                 echo 'alert("Your data is successfully uploaded");';
		 echo 'window.location.href="addcardiary.php";';
		 echo '</script>';
		 }
     else
         {
            echo '<script language="javascript">';
                 echo 'alert("There might be problem while uploading data..Please try again..");';
		 //echo 'window.location.href="addcardiary.php";';
		 echo '</script>';
         }
     
     
     
     
 }


?>