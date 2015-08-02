<?php include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['mydropdown'];
	$booking_data = array(
        'userID'    => $_SESSION['userID'],
		'date'    	=> date('Y-m-d', strtotime($date)),
        'firstName' => $_SESSION['firstName']
	);
	book_trip($booking_data); 
?>
    <div style='text-align:center; padding-top: 5%;'>Congratulations, <?php echo $_SESSION['firstName']; ?>!<br><br>
        Your journey begins <font color="white"><?php echo date('F j, Y', strtotime($date)); ?>.</font><br><br>
        <a href="profile.php" class="btn btn-primary" role="button">My Profile</a>
        <span><a href="reviews.php" class="btn btn-primary" role="button">Reviews</a></span>
        <span><a href="attractions.php" class="btn btn-primary" role="button">Attractions</a></span>
        <span><a href="logout.php" class="btn btn-primary" role="button">Log Out</a></span>
    </div>
<?php } ?>

<?php include 'footer.php'; ?>