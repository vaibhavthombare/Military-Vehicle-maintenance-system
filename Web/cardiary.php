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
  <title>Cardiary | IAVMS</title>
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
   <style>
   
       
       
.red{
    color:red;
    }
.form-area
{ 
  width: 400px;
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
    <div class="col-md-2" style="margin-top: 45px;"> 
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
    <div class="col-md-10" style="margin-top: 0px;">
        <?php
       
        $vno=$_SESSION["vno"];

        include('connect.php');
        mysqli_select_db($connect,"indian_army");
        $qur="select * from cardiary  WHERE vno='".$vno."' ";

        ?>
        <div>
           <h1 align="center">Cardiary</h1> 
        </div><br><br>
      <div class="box-body table-responsive">
        <table class="table table-hover">
        <tr>
        <th>#</th>    
        <th>Nature of Duty</th>    
        <th>Date</th>    
            <th>From</th>    
            <th>To</th>    
            <th>kilometer Reading</th>    
            <th>kilometer Run</th>    
            <th>Total</th>    
            <th>Description</th>
            
        </tr>
            <?php
               if($res=mysqli_query($connect,$qur))
                   {
                     if(mysqli_num_rows($res) > 0)
                     {
                        $sno=1;
                        while($row = mysqli_fetch_array($res))
                        {

                            echo "<tr>";

                        echo "<td>" . $sno . "</td>";
                        $sno=$sno+1;

                            
                        echo "<td>" . $row['nature'] . "</td>";
                            
                        echo "<td>" . $row['tdate'] . "</td>";

                    echo "<td>" . $row['fromplace'] . "</td>";
                    echo "<td>" . $row['todest'] . "</td>";
                     echo "<td>" . $row['currkilo'] . "</td>";
                    echo "<td>" . $row['kilorun'] . "</td>";
                    echo "<td>" . $row['total'] . "</td>";
                    echo "<td>" . $row['des'] . "</td>";

                     echo "</tr>";
                         
                     }
                   
                    }
               }
               else
               {
                echo '<script language="javascript">';
                        echo 'window.location.href="adminpage.php";';
                        echo "alert('Invalid Vehicle Number Or Vehicle data not Found!');\n";
                echo '</script>';

               }
             ?>
        
        
        
        </table>


      
    </div>
    
  </div>
 
        
    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

      
      </div>
</body>
</html>


