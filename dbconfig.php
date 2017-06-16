<?php
	
	$DBhost = "localhost";
	$DBuser = "root";
	$DBpass = "";
	$DBname = "ajax_and_bootstrap_modal";
	
	try {
		$DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		//$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $ex){
		die($ex->getMessage());
	}