<?php
       $vno=$_POST["vno"];
        session_start();
        $regiment=$_SESSION["regiment"];


        include('connect.php');
        mysqli_select_db($connect,"indian_army");
        $qur="select * from vehicle WHERE vno='".$vno."' and regiment_name='".$regiment."' ";
        if($res=mysqli_query($connect,$qur))
                   {
                     if(mysqli_num_rows($res) > 0)
                      {
                        $_SESSION["vno"]=$vno;
                        $fname="";
                        $lname="";
                        $mno="";
                         while($row = mysqli_fetch_array($res))
                         {
                          $fname=$row['first_name'];
                          $lname=$row['last_name'];
                          $mno=$row['mobile_number'];

                         }
                        $_SESSION["driver_name"]=$fname." ".$lname;
                        $_SESSION["driver_mobile_number"]=$mno;
                        echo '<script language="javascript">';
                            echo 'window.location.href="cardiary.php";';
                          echo '</script>'; 
                      }
                      else
                      {
                        echo '<script language="javascript">';
                            echo 'window.location.href="adminpage.php";';
                            echo "alert('Invalid Vehicle Number Or Vehicle data not Found!');\n";
                          echo '</script>';
                      } 
                    } 
        else
        {
            echo '<script language="javascript">';
                        echo 'window.location.href="adminpage.php";';
                        echo "alert('Invalid Vehicle Number Or Vehicle data not Found !');\n";
                echo '</script>';
        }

?>