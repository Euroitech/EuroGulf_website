<?php
  $con = mysqli_connect("localhost","Creativetec","Ctech@123","eurogulfsafety");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
  
        $id=$_REQUEST['id'];
        $query = "DELETE FROM new_calender WHERE id=$id"; 
        $result = mysqli_query($con,$query) or die ( mysqli_error());
        header("Location: view-calender.php"); 
?>