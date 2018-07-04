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
		$vno=$_POST["vno"];
	    $sql = "SELECT * From logbook where vno='".$vno."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		 {
		    // output data of each row
		    while($row = $result->fetch_assoc()) 
		    {
		    	$engineoil=$row['engineoil'];
		    	$steringoil=$row['steringoil'];
		    	$tyrerotation=$row['tyrerotation'];
		    	$pos=1;
		    }
		}
		$i=0;
		if($pos==1)
		{
				$effectiveDate=$engineoil;
		    	$effectiveDate = date('Y-m-d', strtotime("+3 months", strtotime($effectiveDate)));
                $OldDate = strtotime($effectiveDate);
				$NewDate = date('M j, Y', $OldDate);
				$diff = date_diff(date_create(date("M j, Y")),date_create($NewDate));
			    $days = $diff->format("%r%a");
			    if($days<5)
		        {
		        	$message="For vehicle ".$vno." Number of days remaining to change Engine Oil is";
		        	$sql = "INSERT INTO notification values('$vno','Engine Oil','$message','0','$days')";
					if($result = $conn->query($sql))
					{

					}
					else
					{
						$sql = "UPDATE notification  SET status = '".$i."', remaining_days = '".$days."' where notification_details = '".$message."' ";	
						$result=$conn->query($sql);					
					}
		        }


		        $effectiveDate=$steringoil;
		    	$effectiveDate = date('Y-m-d', strtotime("+3 months", strtotime($effectiveDate)));
                $OldDate = strtotime($effectiveDate);
				$NewDate = date('M j, Y', $OldDate);
				$diff = date_diff(date_create(date("M j, Y")),date_create($NewDate));
			    $days = $diff->format("%r%a");
			    
		        if($days<5)
		        {
		        	$message="For vehicle ".$vno." Number of days remaining to change Stering Oil is";
		        	$sql = "INSERT INTO notification values('$vno','Stering Oil',$message','0','$days')";
					if($result = $conn->query($sql))
					{

					}
					else
					{
						$sql = "UPDATE notification  SET status = '".$i."', remaining_days = '".$days."' where notification_details = '".$message."' ";	
						$result=$conn->query($sql);					
					}
		        }



		        
		        $km=0;
				$sql = "SELECT kilometer_tyre_rotation FROM logbook where vno='".$vno."'";
				$result = $conn->query($sql);


				if ($result->num_rows > 0) 
				{
				    // output data of each row
				    while($row = $result->fetch_assoc())
				     {
						$km=$row['kilometer_tyre_rotation'];
					}
				}

				if($km>20000)
				{
					$message="For vehicle ".$vno." Tyre maintainance has exceeded the Maximum Value . Please perform the Tyre maintenance";
		        	$sql = "INSERT INTO notification values('$vno','Tyre Rotation','$message','0','0')";
					if($result = $conn->query($sql))
					{
					}
					else
					{
						$abc=0;
						$sql = "UPDATE notification  SET status = '".$i."', remaining_days = '".$abc."' where notification_details = '".$message."' ";	
						$result=$conn->query($sql);

					}	
				}

			



		}
		$obj_arr=array();
		$i=0;
		$k=0;
		$flag=0;
		$sql = "SELECT * from notification where vno ='".$vno."' and status ='".$k."'";
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
				$obj->remaining_days=$row['remaining_days'];
				$obj_arr[$i]=($obj);
				$i=$i+1;

		    }
		}
		$z=1;
		$sql="UPDATE notification set status = '".$z."' where vno='".$vno."'";
		$result=$conn->query($sql);
		if($flag==1)
		echo json_encode($obj_arr);
		else
		echo "null";
   





