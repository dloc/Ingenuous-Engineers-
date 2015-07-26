<?php 
include 'header.php';
require 'init.php';

$firstName = $lastName = $email = $pass1 = $pass2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = test_input($_POST["fname"]);
  $lastName = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $pass1 = $_POST["password"];
  $pass2 = $_POST["password_confirm"];
}

// User will receive error message if password is not at least 4 characters long.
// Users will be prompted to go back and re-enter an appropriate password.
if (strlen($pass1) < 4 || strlen($pass2) < 4) { ?>
            <div style='text-align:center; font-size:14pt; padding-top: 5%;'>Your password must be at least 4 characters long.<br>Please go back and re-enter.<br><a href='register.php' style='font-size:12pt' onClick='history.back();return false;'>GO BACK</a></div>
<?php }

// Checks to make sure that First and Last Names contain only letters.
// Checks to make sure passwords match.
// User will be prompted to go back and re-enter information if it is not appropriate.
if (!ctype_alpha($firstName) || !ctype_alpha($lastName) || $pass1 != $pass2) { ?>
    <div style='text-align:center; padding-top: 5%;'>Your user account could not be created for the following reason(s):<br><br>
        <?php if (!ctype_alpha($firstName) || !ctype_alpha($lastName)) { ?>
	    <div style='text-align:center; padding-top: 5%;'><em><b>First/Last name cannot contain numbers.</b></em></div>
        <?php }
        if($pass1 != $pass2) { ?>
        <div style='text-align:center; padding-top: 5%;'><em><b>Passwords do not match.</b></em></div>   
        <?php } ?>
        <div style='text-align:center; padding-top: 5%;'><br>Please go back and re-enter.<br></div>
        <a href='register.php' onClick='history.back();return false;'>GO BACK</a></div>   
<?php }

// Checks to make sure that user isn't already registered.
if (email_exists($email)) { ?>
    <div style='text-align:center; padding-top: 5%;'>Looks like you're already registered.</div>
    <div style='text-align:center;'><a href="index.php">Log In</a></div>
<?php }

// Data entered will be registered if all values are appropriate.
if(!email_exists($email) && ctype_alpha($firstName) && ctype_alpha($lastName) && $pass1 == $pass2 && strlen($pass1) >= 4 && strlen($pass2) >=4 )	{
	$register_data = array(
        'email'     => $email,
		'password' 	=> htmlspecialchars(md5($pass1)),     // Password is encrypted with MD5
        'firstName' => $firstName,
        'lastName'  => $lastName
	);
	register_user($register_data); ?>

<div style='text-align:center; padding-top: 5%;'>Welcome to GoJupiter, <?php echo $firstName; ?>!</div>
<div style='text-align:center; padding-top: 5%;'>As a GoJupiter member, you can now <a href="booking.php">make travel arrangements</a> and <a href="reviews.php">read or write reviews</a></div>

<?php } ?>

<?php include 'footer.php'; ?>