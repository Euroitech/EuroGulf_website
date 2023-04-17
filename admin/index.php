<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="image/favicon.png" />
<title>Euro Gulf Safety Admin Page</title>
</head>
<body>





<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
<title>Euro Gulf Safety Admin Page</title>
  <link rel="shortcut icon" href="image/favicon.png" />
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Nunito:400,300,700'>
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="container">
  <div class="form-container flip">
    <form class="login-form"  name="" method="post">
      <h3 class="title">Admin Login</h3>
      <div class="form-group" >
        <input class="form-input" name="username" type="text"  placeholder="Username" id="username" required="true"/>
        <span id="username-tool"class="tooltip username-tooltip">What's your username?</span>
      </div>
      <div class="form-group" >
        <input class="form-input" type="password" name="password" placeholder="Password" id="password"/>
        <span class="tooltip password-tooltip">What's your password?</span>
      </div>
      <div class="form-group">
      <input type="submit" name="submit"  value="Login">
       
      </div>
    </form>
    <div class="loading">
      <div class="loading-spinner-large" style="display: none;"></div>
      <div class="loading-spinner-small" style="display: none;"></div>
    </div>
     
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>
<script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>










<?php
if (isset($_POST['submit']))
	{	  
include("config.php");

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$_SESSION['login_user']=$username;
 
$query = mysql_query("SELECT username FROM login WHERE BINARY username='$username' and BINARY password='$password'");

 if (mysql_num_rows($query) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='ds.php' </script>";	
  }

  else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}

}
    
?>
  </div>
    </div>
   
  </div>
</body>
</html>
