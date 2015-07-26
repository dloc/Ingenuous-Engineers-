<?php
include('session.php');
include 'header.php';
?>
<!DOCTYPE html>
<html>
<body>

    <div class="jumbotron">
    <img src="Photos/Logo1.jpg" class="img-responsive" >
   
    <p style="padding-top: 4%;">Welcome : <i><?php echo $login_session2; ?></i></p>
        <br>
        <p>begin your journey by  <a href="booking.php">booking</a><br> 
            or tell your story by <a href="reviews.php">reviewing</a> </p>
</div>
</body>
</html>
<?php include 'footer.php'; ?>