<?php include 'header.php'; 
include('login.php');
if(isset($_SESSION['login_user'])){
header("location: bookinguser.php");
}
?>

<!-- Include HTML here -->

<br><br>
<div class="jumbotron">
    <img src="Photos/Logo1.jpg" class="img-responsive" >
    
    <p style="padding-top: 4%;">Our travel destinations are out of this world.<br><br>Must be a registered user to book. <br> Please <a href="index.php">Login</a><span> or <a href="register.php">Register Here</a></span></p>
</div>



<?php include 'footer.php'; ?>