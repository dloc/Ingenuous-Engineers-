<?php include 'header.php'; ?>

<div id="container">
    
<?php if (logged_in()) { ?>
    <p style="padding-top: 4%;">Welcome, <?php echo $_SESSION['firstName']; ?>!<br>
    <?php if(trip_already_booked()) { ?>
        Your journey begins <font color="white"><?php echo date('F j, Y', strtotime($_SESSION['date'])); ?></font>.</p>
        <br>
    <?php }
        else { ?>
        Begin your journey by  <a href="booking.php">booking</a> a trip to Jupiter.<br>
    <?php } 
        if (user_has_reviews()) { 
            $reviews = get_user_reviews();
            $size = sizeof($reviews); ?>
            <h1 style="border-bottom: solid">Your Reviews</h1>
        <?php for ($i=$size-1; $i>=0; $i--) { ?>
            <div style="padding-left: 2%">
                Attraction: <?php echo $reviews[$i]['attraction']; ?><br>
                Stars Given: <font color="#BDBD6A"><?php for ($j=0; $j<$reviews[$i]['stars']; $j++) { ?><span>&#9734;</span><?php } ?></font><br>
                Your Review: "<?php echo $reviews[$i]['review']; ?>"<br><br>
            </div>
        <?php } ?>
    <?php }
        else { ?>
        Tell your story by <a href="reviews.php">reviewing</a> an attraction.</p>
    <?php }
}
else { ?>
    <p style="padding-top: 4%;">Oops! Looks like you forgot to <a href="login.php">Log In</a></p>
<?php } ?>
    
</div>

<?php include 'footer.php'; ?>