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
		$pos=0;
		
		$obj_arr=array();
		$i=0;
		$k=0;
		$flag=0;
		$vno=$_POST['vno'];
		$sql = "SELECT * from motion where vno='".$vno."' and status ='".$k."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		 {
		    // output data of each row
		    while($row = $result->fetch_assoc()) 
		    {					
		    	$flag=1;
				$obj=new stdClass();
				$obj->title=$row['notif_title'];
				$obj->notification_details=$row['notification_details'];
				$obj->remaining_days=0;
				$obj_arr[$i]=($obj);
				$i=$i+1;

		    }
		}
		$z=1;
		$sql = "delete from motion where vno='".$vno."' and status ='".$k."'";
		$result=$conn->query($sql);
		if($flag==1)
		echo json_encode($obj_arr);
		else
		echo "null";
   





