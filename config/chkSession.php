<?php	
    session_start();

	$sess_id = $_SESSION['sess_id'];
	$sess_username = $_SESSION['sess_username'];


	if ($sess_id<>session_id() or $sess_username=="") {
			header( "Location: login.php"); 	
			exit();
	}else{
		return $sess_id;	
		return $sess_username;
		
	} 
	
	if(!isset($_SESSION['sess_id'])){
		header('Location: login.php');
		exit();
	}

	if (!isset($_SESSION['sess_username'])) {
        header('location: login.php');
		exit();	
    }
 
 ?>