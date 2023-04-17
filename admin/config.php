<?php
$hostname='creativetecin.ipagemysql.com';
$user ='Creativetec';
$password ='Ctech@123';
$mysql_database ='eurogulfsafety';
$db = mysql_connect($hostname, $user, $password,$mysql_database);
mysql_select_db("eurogulfsafety", $db);
?>
