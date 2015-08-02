<?php
// This is the header for every page.
// It starts with all the appropriate HTML headings
// and ends with the navigation bar.
include 'init.php';
?>

<!DOCTYPE html>
<html lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Our destinations are out of this world. Visit Jupiter and be the first to experience all the natural beauty the Gas Giant has to offer.">
    <meta name="author" content="">

    <title>GoJupiter: More Than Just Gas</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="Photos/jupiter-favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php if(logged_in()) { echo "profile.php"; } else echo "index.php"; ?>"><img width=120px height=35px alt="logo"  src="Photos/LogoMini.jpg"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about.php" <?php if($currentPage == 'about.php') { echo 'id="here"'; } ?>>about</a>
                    </li>
                    <li id="dropdown">
                        <a href="reviews.php" <?php if($currentPage == 'review-beaches.php' || $currentPage == 'review-stadium.php' || $currentPage == 'review-parks.php' || $currentPage == 'review-moons.php' || $currentPage == 'review-night-life.php' || $currentPage == 'review-storm.php' || $currentPage == 'review-zoo.php') { echo 'id="here"'; } ?>>reviews</a>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="review-beaches.php">beaches</a>
                            </li>
                            <li>
                            <a href="review-stadium.php">stadium</a>
                            </li>
                            <li>
                            <a href="review-parks.php">parks</a>
                            </li>
                            <li>
                            <a href="review-moons.php">moons</a>
                            </li>
                            <li>
                            <a href="review-night-life.php">night life</a>
                            </li>
                            <li>
                            <a href="review-storm.php">storm</a>
                            </li>
                            <li>
                            <a href="review-zoo.php">microzoo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="booking.php" <?php if($currentPage == 'booking.php') { echo 'id="here"'; } ?>>booking</a>
                    </li>
                    <li id="dropdown">
                        <a href="attractions.php" <?php if($currentPage == 'attractions.php' || $currentPage == 'beaches.php' || $currentPage == 'moons.php' || $currentPage == 'night-life.php' || $currentPage == 'stadium.php' || $currentPage == 'storm.php' || $currentPage == 'zoo.php') { echo 'id="here"'; } ?>>attractions</a>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="beaches.php">beaches</a>
                            </li>
                            <li>
                            <a href="moons.php">moons</a>
                            </li>
                            <li>
                            <a href="night-life.php">night life</a>
                            </li>
                            <li>
                            <a href="parks.php">park</a>
                            </li>
                            <li>
                            <a href="stadium.php">stadium</a>
                            </li>
                            <li>
                            <a href="storm.php">storm</a>
                            </li>
                            <li>
                            <a href="zoo.php">microzoo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.php" <?php if($currentPage == 'contact.php') { echo 'id="here"'; } ?>>contact</a>
                    </li>
                </ul>
                <?php if(logged_in() && $currentPage != 'logout.php') { ?>
                    <p align="right" style="padding-top: .2em; font-size: 0.75em">Hello, <?php echo $_SESSION['firstName']; ?>&nbsp;|&nbsp;<span><a href="profile.php">Profile</a></span>&nbsp;|&nbsp;<span><a href="logout.php">Log Out</a></span></p>
                <?php } ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>