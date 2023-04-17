<?php
	$DB_HOST ='creativetecin.ipagemysql.com';
	$DB_USER ='creativetec';
	$DB_PASS ='ctech@123';
	$DB_NAME ='eurogulfsafety';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	?>
