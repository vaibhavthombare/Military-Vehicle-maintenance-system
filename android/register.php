<?php 
$id=$_POST['id'];
$name = $_POST['name'];
$address=$_POST['address'];
$authority_name = $_POST['authority_name'];
$obj=$res = new stdClass();
include('connect.php');
     mysqli_select_db($connect,"indian_army");
     $qur="select * from vehicle";

$obj->driver_name="null";  
$obj->vehicle_number="null";
$flag=0;
 if($res=mysqli_query($connect,$qur))
                   {
                     if(mysqli_num_rows($res) > 0)
                     {
                        while($row = mysqli_fetch_array($res))
                        {
                          if($uname==$row['email'] && ($pass)==$row['password'])
                          {
                          	$flag=1;
                          	$obj->driver_name=$row['first_name']." ".$row['last_name'];  
                            $obj->vehicle_number=$row['vno'];
                          	break;
                          }

                        }
                      }
                    }
if($flag==1)
{
	$obj->server_response="success";
}
else
{
	$obj->server_response="fail";
}

$jsonObject=json_encode($obj);
echo $jsonObject;
?>