<?php include 'header.php'; ?>

<div align="center" style="padding-top: 3%;" >   
    <form method="POST" action="<?php 
        if ($_SERVER['HTTP_REFERER'] != "http://lamp.cse.fau.edu/~vlang/gojupiter/confirm-registration.php" && $_SERVER['HTTP_REFERER'] != "http://lamp.cse.fau.edu/~vlang/gojupiter/logout.php") {
            echo $_SERVER['HTTP_REFERER']; 
        }
        else echo 'profile.php' ?>">
        <h3 style="margin-bottom: 0;">Email: </h3><span><input type="text" style="width: 10em; font-size: 0.75em;" name="email" placeholder="you@email.com"></span><br>
        <h3 style="margin-bottom: 0;">Password: </h3><span><input type="password" style="width: 10em; font-size: 0.75em;" name="password"></span><br>	
        <input type="submit" value="Login" name="submit" class="btn btn-primary" style="margin-top: 1%" role="button" />
    </form>
</div>

<?php include 'footer.php'; ?>