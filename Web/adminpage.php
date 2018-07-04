<?php 
session_start();
if(!isset($_SESSION["regiment"]))
{
	session_unset();

     echo '<script language="javascript">';
     	 		echo 'window.location.href="login.html";';
    
     echo '</script>';

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | IAVMS</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="admin.css">
	<style type="text/css">
		#home :hover{
			background-color: black;
		}
	</style>
<script>

$(document).ready(function(){

// updating the view with notifications using ajax

function load_unseen_notification(view = '')

{

 $.ajax({

  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)

  {

   $('.dropdown-menu').html(data.notification);

   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }

  }

 });

}

load_unseen_notification();

// submit form and get new records

$('#comment_form').on('submit', function(event){
 event.preventDefault();

 if($('#subject').val() != '' && $('#comment').val() != '')

 {

  var form_data = $(this).serialize();

  $.ajax({

   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)

   {

    $('#comment_form')[0].reset();
    load_unseen_notification();

   }

  });

 }

 else

 {
  alert("Both Fields are Required");
 }

});

// load new notifications

$(document).on('click', '.dropdown-toggle', function(){

 $('.count').html('');

 load_unseen_notification('yes');

});

setInterval(function(){

 load_unseen_notification();;

}, 5000);

});

</script>

</head>
<body>
	<div class="container" style="background-color: #f5f5f0">
		<img src='images/upperFlag.jpg' id="upperFlag" >		
		<img src="images/main_logo.jpg" id="mainLogo">					
		<div>
	<!--navbar-->
	
	
		<nav class="navbar navbar-default navbar-inverse" style="background-color: #0000e6;" id="mainNavigation">
			<div class="container">
				<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#list-elements">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</div>

			<div class="navbar-collapse collapse" id="list-elements">
				<ul class="nav navbar-nav" id="navUlElements" >

					<li id="home" style="margin-top: 7px;"><a href="adminpage.php"><span style="color: white;font-size: 20px;"><i class="fa fa-home" aria-hidden="true"></i>&nbspHome</span></a></li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="dropdown" id="dropdownMenuForAdminLogout" style="float:right;font-size: large;">
       					 <a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;<span style="color: white;"><?php   echo "Mr. ".$_SESSION["first_name"]." ".$_SESSION["last_name"] ; ?></span>
       					 <img src="images/admin-login-logo.png" style="border-radius: 50%;margin-top: 0px; padding-top: 0px;width: 35px;height: 35px;">
       					 <span style="color:white;" class="caret"></span>
       					</a>
       					 <ul class="dropdown-menu">
                             <li style="width: 280px;"><a href="profilesetting.php"><b style="color:black;"><i class="fa fa-user" aria-hidden="true"></i> Profile Setting</b></a></li>
                             <li style="width: 280px;"><a href="changepassword.php"><b style="color: black;"><i class="fa fa-key" aria-hidden="true"></i> Change Password</b></a></li>
                            <li style="width: 280px;"><a href="logout.php"><b style="color:black;"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</b></a></li>
                        
                        </ul>
     				</li>			
			 	</ul>
			</div>

		</div>		
		</nav>



	<!--navbar end-->
	</div>
	<div style="background-color: #99ccff; width: 300px;margin-left: 15px; border: 2px solid black;padding: 15px 10px;font-size: medium; ">
      <p><b>Regiment: </b>&nbsp; <?php echo $_SESSION["regiment"] ?></p>
  </div>

		<center >

        <form id="form1" method="post" action="menuhandling.php" style="margin-top: 100px;">
            
            	<h2>Input Vehicle Number to get Information about the Vehicle</h2><br>
      
                <b>Vehical No: &nbsp;&nbsp;&nbsp;&nbsp; </b><input type="text" style="height: 35px;" placeholder="&nbsp;Type vehicle number here" name="vno" maxlength="10" min="10" required><br><br>
         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-success" style="width: 180px;" >Submit</button> &nbsp;&nbsp;
              
        </form>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-success" onclick="location.href='addvehicle.php'" style="width: 180px;" >Add Vehicle</button>
        <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-success" onclick="location.href='addregimentlocation.php'" style="width: 180px;" >Add Regiment Location</button>
        
   </center>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


			<!-- footer -->
				<div style="margin-top: 50px;padding-left:20px;background-color: #66B2FF;">
		            <br><br>
		            <div class="row">
		            	<div class="col-md-4">
		            		<p style="color:black;">&copy; 2017 All Rights Reserved | Government Of India <br> Powered by <a href="https://www.facebook.com/VPSSolutions-505513873143672/" target="_blank" style="color:black;"><i>VPSSolutions</i></a></p>
		            		
		            	</div>
		            	<div class="col-md-5">
		            		Site best viewed at 1024 x 768 resolution in Mozilla 3.5 or above, Google Chrome 3 or above, Safari 5.0 + in I.E 7 or above
		            	</div>
		            	<div class="col-md-3">

		            		<a href="https://india.gov.in/" target="_blank"><img src="images/india-gov-logo.jpg" style="width: 188px;height: 52px;padding-left: 20px;"></a><br><br>
		            		<div>
		            			<span>
		            				<img src="images/calndr-icon.png">&nbsp; Page last updated on: <strong>23/10/2017</strong>
		            			</span> 


		            		</div>
		            		<br>
		            	
		            </div>
		            
		        </div>
				</div>
			</div>
</body>
</html>


