<?php
//for users and will be called for every page so we know we will start a session for every page
session_start();

require 'database/connect.php';
require 'functions.php';

//if (logged_in() === true){
//	$session_user_id = $_SESSION['userID'];
//	
//	//return user info
//	$user_data = user_data($session_user_id, 'userID', 'email', 'password' ,'firstName', 'lastName');
//	
//	//give ability to delete or ban users manually by deactivation on server side
//	if(user_active($user_data['email']) === false) 
//	{
//		session_destroy();
//		header('Location: index.php');
//		exit();
//	}	
//}

// an array that will hold different types of errors
$errors = array();
?>