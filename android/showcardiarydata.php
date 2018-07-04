<?php
    $vno=$_POST["vno"];
     include('connect.php');
     mysqli_select_db($connect,"indian_army");
     $qur="select * from vehicle  WHERE vno='".$vno."' ";
     $fname="";
     $lname="";
     if($res=mysqli_query($connect,$qur))
                   {
                     if(mysqli_num_rows($res) > 0)
                     {
                        while($row = mysqli_fetch_array($res))
                        {
                          $fname=$row['first_name'];
                          $lname=$row['last_name'];

                        }
                      }
                    }
     $drivername=$fname." ".$lname;


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
   
  <div style="background-color: #99ccff; width: 313px;margin-left: 15px;margin-top: 15px;padding-top: 5px; border: 2px solid black;padding-left: 5px;font-size: medium; ">
      <b>Vehicle Number:</b>&nbsp; <?php echo $vno ?>
      <p><b>Driver:</b>&nbsp; <?php echo $drivername ?></p>
  </div>
  <div class="row">
    <div class="col-md-2" > 
      
              
    </div>
    <div class="col-md-10" style="margin-top: 0px;">
        <?php
       

        include('connect.php');
        mysqli_select_db($connect,"indian_army");
        $qur="select * from cardiary  WHERE vno='".$vno."' ";

        ?>
        <div>
           <h1 align="center" style="color:green;">Cardiary</h1> 
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

        
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      
    </div>
    
  </div>
 
</body>
</html>


