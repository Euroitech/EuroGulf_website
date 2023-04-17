<?php include('dashboard.php')?>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
      Update Record what's New
    </div>

<?php

$con = mysqli_connect("localhost","Creativetec","Ctech@123","eurogulfsafety");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id=$_REQUEST['id'];
$query = "SELECT * from new_words where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div class="form">
<?php
$status = "";
if(isset($_POST['submit']))
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
 $name=preg_replace('/[^A-Za-z0-9\-]/', '', $name);
$name1 =$_REQUEST['name1']; $name1=preg_replace('/[^A-Za-z0-9\-]/', '', $name1);
$name2 =$_REQUEST['name2']; $name2=preg_replace('/[^A-Za-z0-9\-]/', '', $name2);
$name3 =$_REQUEST['name3']; $name3=preg_replace('/[^A-Za-z0-9\-]/', '', $name3);
$name4 =$_REQUEST['name4']; $name4=preg_replace('/[^A-Za-z0-9\-]/', '', $name4);
$update="update new_words set trn_date='".$trn_date."', name='".$name."',name1='".$name1."',name2='".$name2."',name3='".$name3."',name4='".$name4."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully.";
header("Location: view-whatsnew.php");
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p>Message 1:<input type="text" name="name" placeholder="Enter Message1" required value="<?php echo $row['name'];?>" /></p>
<p>Message 2:<input type="text" name="name1" placeholder="Enter Message2" required value="<?php echo $row['name1'];?>" /></p>
<p>Message 3:<input type="text" name="name2" placeholder="Enter Message3" required value="<?php echo $row['name2'];?>" /></p>
<p>Message 4:<input type="text" name="name3" placeholder="Enter Message4" required value="<?php echo $row['name3'];?>" /></p>
<p>Message 5:<input type="text" name="name4" placeholder="Enter Message5" required value="<?php echo $row['name4'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php 


} 
?>



</div>
</div>
</body>
</html>
</div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p style="text-align: right;color:#fff;">
              Designed and Developed by <a href="http://www.creativetc.in">Creative Technologies</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
