
<?php include('dashboard.php')?>

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
      what's New
    </div>
    <?php


$con = mysqli_connect("localhost","root","","user");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$status = "";
if(isset($_POST['submit']))
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];

$ins_query="insert into new_words (trn_date,name) values ('$trn_date','$name')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.";
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div class="form">


<div>

<form name="form" method="post" action=""> 

<p>Message:&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter Name" required /></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

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
              Design and Developed by <a href="http://www.creativetc.in">Creative Technologies</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>