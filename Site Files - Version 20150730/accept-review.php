<?php include 'header.php';

if (isset($_POST['submit-review'])) {
    if (empty($_POST['review'])) {
        echo "You must enter a review.";
    }
    else {
        $attraction = $_POST['beach_selection'];
        $stars = $_POST['stars'];
        $review = $_POST['review'];
        $firstName = $_SESSION['firstName'];
        
        $submit_data = array(
            'userID' => $_SESSION['userID'],
            'firstName' => $_SESSION['firstName'],
            'attraction' => $attraction,
            'review' => $review,
            'stars' => $stars
        );
        
        submit_review($submit_data);
    }
}

?>

<div id="container" style="padding-top: 10%;" align="center">
    <p>Thank you for submitting a review about <font color="#337ab7"><i><?php echo $attraction; ?>.</i></font></p>
    <p>You can review more attractions <a href="reviews.php">here</a> or <a href="javascript:history.back()">go back</a> to the previous page.</p>
</div>

<?php include 'footer.php'; ?>