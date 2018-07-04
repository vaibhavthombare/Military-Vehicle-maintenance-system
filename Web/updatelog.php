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
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Logbook | IAVMS</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <style type="text/css">
    #home :hover{
      background-color: black;
    }
  </style>
   <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
   <script>
        
        $(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

        
        
        </script>


 <style>
   
       
       
.red{
    color:red;
    }
.form-area
{ 
  background-color: #FAFAFA;
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
          <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
              <li class="dropdown" id="dropdownMenuForAdminLogout" style="float:right;font-size: large;">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;<span style="color: white;"><?php  echo "Mr. ".$_SESSION["first_name"]." ".$_SESSION["last_name"] ; ?></span>
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
  <div style="background-color: #99ccff; width: 313px;margin-left: 15px; border: 2px solid black;padding-left: 5px;font-size: medium; ">
      <p><b>Vehicle Number:</b>&nbsp; <?php echo $_SESSION["vno"] ?></p>
      <p><b>Driver:</b>&nbsp; <?php echo $_SESSION["driver_name"] ?></p>
      <p><b>Mobile Number:</b> &nbsp;<?php echo $_SESSION["driver_mobile_number"] ?></p>
  </div>
  <div class="row">
    <div class="col-md-3" style="margin-top: 45px;"> 
      <div class="container">
          <div class="btn-group-vertical">
            <button type="button" class="btn btn-primary" onclick="location.href='logbook.php'">Logbook</button>
            <button type="button" class="btn btn-primary"  onclick="location.href='cardiary.php'">cardiary</button>
              <button type="button" class="btn btn-primary" onclick="location.href='updatelog.php'">Update logbook</button>
              <button type="button" class="btn btn-primary" onclick="location.href='addcardiary.php'">Add to cardiary</button>
            <button type="button" class="btn btn-primary" onclick="location.href='major.php'">Major Issues</button>
          </div>
      </div>
              
    </div>
    <?php
                $vno=$_SESSION["vno"];
                $eno;
                $cno;
                $tno1;
                $tno2;
                $tno3;
                $tno4;
                $tno5;
                $tno6;
                $eoildate;
                $soildate;
                $tro;
                $blife;

                include('connect.php');
                mysqli_select_db($connect,"indian_army");
                $qur="select * from logbook  WHERE vno='".$vno."' ";
                if($res=mysqli_query($connect,$qur))
                   {
                     if(mysqli_num_rows($res) > 0)
                     {
                        while($row = mysqli_fetch_array($res))
                        {
                          $eno=$row['eno'];
                          $cno=$row['chasis_no'];
                          $tno1=$row['tyreno1'];
                          $tno2=$row['tyreno2'];
                          $tno3=$row['tyreno3'];
                          $tno4=$row['tyreno4'];
                          $tno5=$row['tyreno5'];
                          $tno6=$row['tyreno6'];
                          $eoildate=$row['engineoil'];
                          $soildate=$row['steringoil'];
                          $tro=$row['tyrerotation'];
                          $blife=$row['lifeofbattery'];
                        }
                      }
                    }
    ?>
    <div class="col-md-9">
        <div class="container1">
          <div class="col-md-7">
                  <br style="clear:both">
                              <h1 style="margin-bottom: 25px; text-align: center;">Update Logbook</h1>
                  <div style="border:1px solid black;padding: 15px 15px 15px 15px;">            
                  <form action="logbookdata.php" method="post">
                                               <label>Vehicle Number* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="vno" id="vno" tabindex="12" size="30" maxlength="50"  disabled value="<?php echo " ".$_SESSION["vno"]?>" /><br><br>
                                                <label>Engine Number* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"  name="eno" id="eno"  tabindex="12" size="30" maxlength="50"  value="<?php echo "".$eno; ?>" /><br><br>
                                                <label>Chasis Number* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"  name="chasisno" id="lastName"  tabindex="12" size="30" maxlength="50"  value="<?php echo " ".$cno; ?>" /><br><br>
                                                <label>Tyre Number 1* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"  name="tyno1"   id="tno1" tabindex="12" size="30" maxlength="10"  value="<?php echo " ".$tno1; ?>" /><br><br>
                                                <label>Tyre Number 2* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"  name="tyno2"   id="tno2" tabindex="12" size="30" maxlength="10"  value="<?php echo " ".$tno2; ?>" /><br><br>
                                                <label>Tyre Number 3* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"  name="tyno3"   id="tno3" tabindex="12" size="30" maxlength="10"  value="<?php echo " ".$tno3; ?>" /><br><br>
                                                <label>Tyre Number 4* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"  name="tyno4"   id="tno4" tabindex="12" size="30" maxlength="10"  value="<?php echo " ".$tno4; ?>" /><br><br>
                                                <label>Tyre Number 5* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"  name="tyno5"   id="tno5" tabindex="12" size="30" maxlength="10"  value="<?php echo " ".$tno5; ?>" /><br><br>
                                                <label>Tyre Number 6* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"  name="tyno6"   id="tno6" tabindex="12" size="30" maxlength="10"  value="<?php echo " ".$tno6; ?>" /><br><br>
                                                <label>Engine Oil* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="date" name="engineoildate" id="engineoildate" tabindex="12" size="30" maxlength="50"   value="<?php echo date('Y-m-d',strtotime($eoildate)) ?>" /><br><br>

                                                <label>Stering Oil* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="date" name="steringoildate" id="steringoildate" tabindex="12" size="30" maxlength="50"   value="<?php echo date('Y-m-d',strtotime($soildate)) ?>" /><br><br>

                                                <label>Tyre Rotation* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="date" name="tyrerotationdate" id="tro" tabindex="12" size="30" maxlength="50"   value="<?php echo date('Y-m-d',strtotime($tro)) ?>" /><br><br>

                                                <label>Battery Of Life* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="lifeofbattery" id="blife" tabindex="12" size="30" maxlength="50"   value="<?php echo " ".$blife; ?>" /><br><br>
                                                <label>Major Issues If Any : </label><br><br>
                                                <input type="date" name="majorissuedate"><br><br>
                                                <textarea class="form-control" type="textarea" id="message" name="majorissuedes" placeholder="Description" maxlength="140" rows="7" name="des" ></textarea>
                                                 <span class="help-block" ><p id="characterLeft" class="help-block ">You have reached the limit</p></span><br>
                                                 <label>Part Change If Any</label><br><br>
                                                  <b>1.&nbsp;</b><input type="date" name="part1date"><br><br>
                                                  <textarea class="form-control" type="textarea" name="part1des" id="message" placeholder="Description" maxlength="140" rows="7" name="des" ></textarea><br>

                                                  <b>2.&nbsp;</b><input type="date" name="part2date"><br><br>
                                                  <textarea class="form-control" type="textarea" name="part2des" id="message" placeholder="Description" maxlength="140" rows="7" name="des" ></textarea><br><br>
                                                  <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right ">Submit</button>
                                                  <br><br>
                            </form>
                          </div>
                
          </div>
            
          </div>
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


