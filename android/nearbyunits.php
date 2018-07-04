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


//17.6599  75.9064
//16.8524 74.5815

$obj_arr=array();
$i=0;

$lat1=$_POST["LAT"];
$lon1=$_POST["LONG"];

function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

$tot=100;

$sql = "SELECT longi , lati From nearbyunits";
$result = $conn->query($sql);


if ($result->num_rows > 0)
 {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {	

    	$lo=$row["longi"];
    	$la=$row["lati"];

    	if(distance($lat1,$lon1,$lo,$la,'K')<$tot)
    	{
    		$obj=new stdClass();
			$obj->lati=$lo;
			$obj->longi=$la;
      
      $obj->dist=distance($lat1,$lon1,$lo,$la,'K');
			$obj_arr[$i]=($obj);
			$i=$i+1;

    	}


    }
}
else
{
  echo "errr";
}

echo json_encode($obj_arr);
?>	