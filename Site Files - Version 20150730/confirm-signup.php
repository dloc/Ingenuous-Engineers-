<?php
include('session.php');

if(isset($_POST['mydropdown']) )
{
  $date = $_POST['mydropdown'];
  $errorMessage = ""; 
}

$test=mysql_query("SELECT * FROM `booked` where email='$login_session';");

$row = mysql_num_rows($test);
            if ($row >= 1) {
                header("location: signup-fail.php");
            }
else {
mysql_query("INSERT INTO `booked`(`name`, `email`, `date`) VALUES ('$login_session2','$login_session', '$date')");
 header("location: signup-success.php");
}

?>
