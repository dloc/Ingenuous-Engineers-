<?php include 'header.php';

if (empty($_POST['review'])) { ?>
<div style="padding: 10%" align="center">
    <p>You must enter a review.</p>
    <p>Please <a href="javascript:history.back()">go back</a> and fill in the review box.</p>
</div>
<?php
} 
else {
    $attraction = $_POST['selection'];
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

    submit_review($submit_data); ?>

<div id="container" style="padding-top: 10%;" align="center">
    <p>Thank you for submitting a review about <font color="#82b3eb"><i><?php echo $attraction; ?>.</i></font></p>
    <p>You can review more attractions <a href="reviews.php">here</a> or <a href="javascript:history.back()">go back</a> to the previous page.</p>
</div>
<?php }

include 'footer.php'; ?>