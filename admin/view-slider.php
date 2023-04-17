<?php include('dashboard.php')?>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Home Page Slider - New Addition Page
    </div>
    
    
    <?php

	require_once 'dbconfig.php';
	
	if(isset($_GET['delete_id']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT userPic FROM tbl_users WHERE userID =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("image/".$imgRow['userPic']);
		
		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM tbl_users WHERE userID =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: view-slider.php");
	}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head><link rel="stylesheet" href="css/style2.css" /></head>
<body>

<div class="container">

	<div class="page-header">
    	<h1 class="h2">All Images <a class="btn btn-default" href="add-slider.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; add Slider </a></h1> 
    </div>
    
<br />

<div class="row">
<?php
	
	$stmt = $DB_con->prepare('SELECT userID,userPic FROM tbl_users ORDER BY userID DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
            

<div class="col-xs-12">

<div class="form">


<table class="table table-bordered table-hover">

  <thead>
            <tr>            
              <th align="center">Image</th>
              <th align="center">Operations</th>
              
            </tr>
          </thead>


<tbody>
<tr>

    <td align="center"><img src="user_images/<?php echo $row['userPic']; ?>" class="img-rounded" width="175px" height="100px"  style="padding: 10px;"/></td>
    <td align="center"><a class="btn btn-info" href="edit-slider.php?edit_id=<?php echo $row['userID']; ?>" title="click for edit"
               onclick="return confirm('Are you sure you want to Edit this image?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
    <a class="btn btn-danger" href="?delete_id=<?php echo $row['userID']; ?>" title="click for delete" onclick="return confirm('Are you sure you want to delete this image?')">
                <span class="glyphicon glyphicon-remove-circle"></span> Delete</a></tr>

</tbody>
</table>

</div>

 

</div>       
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
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
