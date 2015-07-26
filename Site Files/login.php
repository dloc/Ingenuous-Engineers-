

<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "1Email or Password is invalid";
        }
        else
        {
            // Define $username and $password            
            $email=$_POST['email'];
            $password=$_POST['password'];
            $password=htmlspecialchars(md5($password));
            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            $connection = mysql_connect("localhost", "vlang", "F@ntastic0!");
            // To protect MySQL injection for Security purpose
           // $email = stripslashes($email);
           // $password = stripslashes($password);
           // $email = mysql_real_escape_string($email);
           // $password = mysql_real_escape_string($password);
            // Selecting Database
            $db = mysql_select_db("vlang", $connection);
            // SQL query to fetch information of registerd users and finds user match.
            $query = mysql_query("select * from gj_users where password='$password' AND email='$email'", $connection);
            $rows = mysql_num_rows($query);
            if ($rows == 1) {
            $_SESSION['login_user']=$email; // Initializing Session
            header("location: profile.php"); // Redirecting To Other Page
            } else {
            $error = "2email or Password is invalid";
            }
            mysql_close($connection); // Closing Connection
        }
    }
?>

