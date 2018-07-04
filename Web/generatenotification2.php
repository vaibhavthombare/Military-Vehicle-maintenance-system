<?php
		
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
		
		$value=$_POST["two"];
	    $z=0;
	    $sql = "INSERT INTO temperature VALUES('$vno','temperature','$value','0')";
		$result = $conn->query($sql);
		if($result)
		{


		}
		



			



		