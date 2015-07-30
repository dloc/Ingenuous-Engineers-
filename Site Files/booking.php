<?php include 'header.php'; ?>

<!-- Include HTML here -->
<div class="jumbotron">
    <img src="Photos/Logo1.jpg" class="img-responsive">
    <?php if(!logged_in()) { ?>
    <p style="padding-top: 4%;">Our travel destinations are out of this world.<br><br>Please <a href="login.php">Login</a><span> or <a href="register.php">Register Here</a></span> to book a flight to Jupiter.</p>
    <?php }
    else if(trip_already_booked()) { ?>
        <p style="padding-top: 4%;">Congratulations, <?php echo $_SESSION['firstName']; ?>!<br><br>
            Looks like you're already going to Jupiter on <?php echo date('F j, Y', strtotime($_SESSION['date'])); ?>.<br><br>
            Please <a href="reviews.php">review</a> one of our many attractions.</p>
    <?php }
    else { ?>
        <p style="padding-bottom: 0;">Visit the gas giant on an all inclusive journey paid for in full by the generous people of Jupiter
            <br><br>sign up below</p>
        <form class="form-horizontal" action='confirm-booking.php' method="POST">
            <p style="padding-top: 4%;">
                <font color="#337ab7">Name: </font><i><?php echo $_SESSION['firstName']; ?></i> <br>
                <font color="#337ab7">Email: </font><i><?php echo $_SESSION['email']; ?></i> <br>
                <font color="#337ab7">date: </font>
                <select name="mydropdown" id="mydropdown" class="selectpicker" data-style="btn-primary">
                    <option value="03/05/2016">03.05.2016</option>
                    <option value="04/05/2017">04.05.2017</option>
                    <option value="05/05/2018">05.05.2018</option>
                    <option value="06/05/2019">06.05.2019</option>
                    <option value="07/05/2020">07.05.2020</option>
                </select> <br>
                <button class="btn btn-success">SignUp</button>
            </p>
        </form>
    <?php } ?>
</div>
<?php include 'footer.php'; ?>