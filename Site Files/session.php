<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "vlang", "F@ntastic0!");
// Selecting Database
$db = mysql_select_db("vlang", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select email from gj_users where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];

$ses2=mysql_query("select firstName from gj_users where email='$user_check'", $connection);
$row2 = mysql_fetch_assoc($ses2);
$login_session2 =$row2['firstName'];

if(!isset($login_session) && $currentPage == 'profile.php'){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>