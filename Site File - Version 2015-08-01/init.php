<?php
//for users and will be called for every page so we know we will start a session for every page
session_start();

require 'database/connect.php';
require 'functions.php';


$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid.";
    }
    else {
        // Define $username and $password            
        $email = $_POST['email'];
        $password = htmlspecialchars(md5($_POST['password']));
        
        $user_info = login_user($email, $password);
        
        if (empty($user_info)) {
            $error = "Email or Password is not correct.";
            $GLOBALS['gjdb'] = NULL; // close db connection
        }
        else {
            $_SESSION['userID'] = $user_info['userID'];
            $_SESSION['email'] = $user_info['email'];
            $_SESSION['firstName'] = $user_info['firstName'];
            $_SESSION['lastName'] = $user_info['lastName'];
//            header('location: profile.php');
        }
    }
}

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
//$errors = array();
?>