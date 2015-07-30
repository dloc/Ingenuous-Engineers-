<?php include 'header.php'; ?>

<div id="container">
    <p style="padding-top: 4%;">Welcome, <i><?php echo $_SESSION['firstName']; ?></i>!</p>
    <br>
    <p>begin your journey by  <a href="booking.php">booking</a><br>
        or tell your story by <a href="reviews.php">reviewing</a></p>
</div>

<?php include 'footer.php'; ?>