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
/* BOOKING FUNCTIONS */
/*********************/
// Register and sanitize user info
function book_trip($booking_data) {
	$fields = implode(', ', array_keys($booking_data));
	$placeholders = ':' . implode(', :', array_keys($booking_data));

    foreach ($booking_data as $key => $val) {
        $booking_data[':'.$key] = $val;
        unset($booking_data[$key]);
    }
	//insert the array of info into server table gj_users
	$stmt = $GLOBALS['gjdb']->prepare("INSERT INTO gj_booking ($fields) VALUES ($placeholders)");
    foreach($booking_data as $key=>&$value) {
        $stmt->bindParam($key, $value, PDO::PARAM_STR);
    }
    $stmt->execute();
}


/********************/
/*    LOGIN USER    */
/********************/
// Register and sanitize user info
function login_user($email, $password) {
	$stmt = $GLOBALS['gjdb']->prepare("SELECT * FROM gj_users WHERE email = :email AND password = :password");
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":password", $password, PDO::PARAM_STR);
    $stmt->execute();
    
    return $login_data = $stmt->fetch(PDO::FETCH_ASSOC);
}

/********************/
/* REVIEW FUNCTIONS */
/********************/
function submit_review($review_data) {
    $fields = implode(', ', array_keys($review_data));
	$placeholders = ':' . implode(', :', array_keys($review_data));

    foreach ($review_data as $key => $val) {
        $review_data[':'.$key] = $val;
        unset($review_data[$key]);
    }
	//insert the array of info into server table gj_users
	$stmt = $GLOBALS['gjdb']->prepare("INSERT INTO gj_reviews ($fields) VALUES ($placeholders)");
    foreach($review_data as $key=>&$value) {
        $stmt->bindParam($key, $value, PDO::PARAM_STR);
    }
    $stmt->execute();
}

function get_reviews() {
    $stmt = $GLOBALS['gjdb']->prepare("SELECT * FROM gj_reviews");
    $stmt->execute();
    
    return $stmt->fetchAll();
}


/*********************/
/* GENERAL FUNCTIONS */
/*********************/

//returns TRUE if user logged in, FALSE if user not logged in.
function logged_in() {
    return(isset($_SESSION['userID'])) ? true : false;
}


function trip_already_booked() {
    $user_trip_data = get_trip_data($_SESSION['userID']);
    //var_dump($user_trip_data);
    if(!empty($user_trip_data)) { 
        $_SESSION['date'] = $user_trip_data['date'];
        return true;
    }
    else return false;
}

function get_trip_data($userID) {
    $stmt = $GLOBALS['gjdb']->prepare("SELECT * FROM gj_booking WHERE userID = :userID");
    $stmt->bindParam(':userID', $userID, PDO::PARAM_STR);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

?>