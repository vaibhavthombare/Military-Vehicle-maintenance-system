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
    <title>Add Vehicle | IAVMS</title>
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
    <style type="text/css">
         div.container1{
           margin-top: 100px;
           
        
        }
       
       
.red{
    color:red;
    }
.form-area
{
    background-color: #ebebe0;
    padding: 10px 40px 60px;
    margin: 10px 0px 60px;
    border: 1px solid GREY;

    }
    </style>
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
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li class="dropdown" id="dropdownMenuForAdminLogout" style="float:right;font-size: large;">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;<span style="color: white;"><?php  echo "Mr. ".$_SESSION["first_name"]." ".$_SESSION["last_name"] ; ?></span>
                         <img src="images/admin-login-logo.png" style="border-radius: 50%;margin-top: 0px; padding-top: 0px;width: 35px;height: 35px;">
                         <span style="color:white;" class="caret"></span>
                        </a>
                         <ul class="dropdown-menu">
                             <li style="width: 280px;"><a href="profilesetting.php"><b style="color:black;">Profile Setting</b></a></li>
                             <li style="width: 280px;"><a href="changepassword.php"><b style="color: black;">Change Password</b></a></li>
                            <li style="width: 280px;"><a href="logout.php"><b style="color:black;">Logout</b></a></li>
                        
                        </ul>

                    </li>           
                </ul>
            </div>

        </div>      
        </nav>



    <!--navbar end-->
    </div>

        <div class="row">
            <div class="col-md-3">
                &nbsp;
            </div>    
            <div class="col-md-5">
                        <div class="container1">                    
                                 <div class="form-area"> 
                                    <form action="mail/addvehicaldata.php" method="post">
                                            <h3 style="margin-bottom: 25px; text-align: center;">Add Vehicle Here ...</h3>
                                            <div style="margin-left: 50px;">
                                            <div class="form-group">
                                                <input type="text" style="height: 37px;" id="nature" name="vno"  size="27" placeholder=" Vehicle Number*" maxlength="10" required>
                                            </div>
                                           <div class="form-group">
                                                <input type="text" style="height: 37px;" id="nature" name="tno"  size="27" placeholder=" Tactical Number*" maxlength="3" required>
                                           </div>
                                           <div class="form-group">
                                                 <input type="text" style="height: 37px;" required name="firstName" id="firstName" pattern="[A-Za-z]{1,27}" tabindex="12" size="27" maxlength="50" placeholder=" First Name*"  />     
                                           </div>
                                           <div class="form-group">
                                                <input type="text" style="height: 37px;" required name="middleName" id="middleName" pattern="[A-Za-z]{1,27}" tabindex="12" size="27" maxlength="50" placeholder=" Middle Name*" />                       
                                           </div>
                                           <div class="form-group">
                                               <input type="text" style="height: 37px;" required name="lastName" id="lastName" pattern="[A-Za-z]{1,27}" tabindex="12" size="27" maxlength="50" placeholder=" Last Name*" />
                                           </div>
                                           <div class="form-group">
                                                 <input type="text" style="height: 37px;" required name="mobileNumber" pattern="[789][0-9]{9}"  id="mobileNumber" tabindex="12" size="27" maxlength="10" placeholder=" Mobile Number*" title="Valid Indian Mobile Number" />                       
                                            </div>
                                            <div class="form-group">
                                                
                                                 <input type="email"  style="height: 37px;" required name="email" id="email" tabindex="12" size="27" maxlength="50" placeholder=" Email*" />
                                            </div>
                                             <button type="submit"  style="margin-left: 70px;" id="submit" name="submit" class="btn btn-primary ">Submit</button>
                                         </div>                        
                                               
                                    </form>
                                 </div>
                        </div>
            </div>
            <div class="col-md-4">
                &nbsp;
                
            </div>            
        </div>

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


