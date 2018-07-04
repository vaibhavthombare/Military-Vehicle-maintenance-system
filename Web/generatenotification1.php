<?php
		echo "<head>";
		echo '<meta http-equiv="refresh" content="30">';
		echo "</head>";
		header('Context-type:text');
		header('Access-Control-Allow-Origin:*');
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
		$pos=0;
		$vno="MH12";
		if(!isset($_POST["one"]))
		{
			return;
		}
		$sensedata=$_POST["one"];


		$message="";
		if($sensedata==0)
		{
			$message="Driver Is not On Seat";
		}
		else
		{
			$message="Driver Is On Seat";
		}
	    $z=0;
	    $sql = "INSERT INTO motion VALUES('$vno','Motion','$message','0')";
		$result = $conn->query($sql);
		if($result)
		{

		}
		else
		{
			$sql = "UPDATE motion SET notification_details= '".$message."', status='".$z."'";
			$result = $conn->query($sql);
		}



			



		