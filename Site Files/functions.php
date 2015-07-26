<?php

require_once 'database/connect.php';

/***************************/
/*  REGISTRATION FUNCTIONS */
/***************************/

// Remove any special characters from data entered into registration form.
function test_input($data) {
  $data = trim($data);              // Removes white spaces
  $data = stripslashes($data);      // Removes quotes
  $data = htmlspecialchars($data);  // Converts special characters to HTML entities
  return $data;
}

// Checks if email has already been registered.
// Returns TRUE if email exists, FALSE if email does not exist.
function email_exists($email) {
    $stmt = $GLOBALS['gjdb']->prepare("SELECT userID FROM gj_users WHERE email=:email");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    
    $userID = $stmt->fetch(PDO::FETCH_ASSOC);
       
    return $userID > 0 ? true : false;
}

// Register and sanitize user info
function register_user($register_data) {
	$fields = implode(', ', array_keys($register_data));
	$placeholders = ':' . implode(', :', array_keys($register_data));

    foreach ($register_data as $key => $val) {
        $register_data[':'.$key] = $val;
        unset($register_data[$key]);
    }
  
	//insert the array of info into server table gj_users
	$stmt = $GLOBALS['gjdb']->prepare("INSERT INTO gj_users ($fields) VALUES ($placeholders)");
    foreach($register_data as $key=>&$value) {
        $stmt->bindParam($key, $value, PDO::PARAM_STR);
    }
    $stmt->execute();
}

/*********************/
/* GENERAL FUNCTIONS */
/*********************/

//returns TRUE if user logged in, FALSE if user not logged in.
function logged_in() {
    return(isset($_SESSION['userID'])) ? true : false;
}

/*******************/
/* USER FUNCTIONS */
/*******************/

//checks if user exists
function user_exists($email){
    $email = sanitize($email);
		
    $query = mysql_query("SELECT `user_id` FROM `gj_users` WHERE `email` = '$email'");
		
    //return if user was found else return false
    return (mysql_result($query, 0) == 1) ? true : false;
}

//get all user info
function user_data($user_id) {
    $data = array();
    $user_id = (int)$user_id;
		
    $func_num_args = func_num_args();
    $func_get_args = func_get_args();
		
    if($func_num_args > 1) {
        unset($func_get_args[0]);
			
        $fields = '`' . implode('`, `', $func_get_args ) . '`';
        $data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `gj_users` WHERE `userID` = $user_id"));
			
        return $data;
    }
}

function login($email, $password) {
    $user_id = user_id_from_email($email);
    $email = sanitize($email);
		
    // encrypt/convert password to match server md5 encryption
    $password = md5($password);
		
    // return true/user_id if username and password match with one on file
    return (mysql_result(mysql_query("SELECT `userID` FROM `gj_users` WHERE `email` = '$email' AND `password` = '$password'" ), 0) == 1) ? $user_id : false;
}

//check if user is active
function user_active($email) {
    $email = sanitize($email);
		
    $query = mysql_query("SELECT `userID` FROM `gj_users` WHERE `email` = '$email' AND `active` = 1");
		
    //return true if user activated acct
    return (mysql_result($query, 0) == 1) ? true : false;
}

?>