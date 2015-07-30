<?php include 'header.php';

$userID = $date = $firstName = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_SESSION['userID'];
    $date = $_POST['mydropdown'];
    $firstName = $_SESSION['firstName'];
    
    //echo $date; 

	$booking_data = array(
        'userID'    => $userID,
		'date'    	=> date('Y-m-d', strtotime($date)),
        'firstName' => $firstName
	);
	book_trip($booking_data); 
?>

<div style='text-align:center; padding-top: 5%;'>Congratulations, <?php echo $firstName; ?>!</div>
<div style='text-align:center; padding-top: 5%;'>Your trip is scheduled for <?php echo date('F j, Y', strtotime($date)); ?>.</div>

<?php } ?>


<?php include 'footer.php'; ?>