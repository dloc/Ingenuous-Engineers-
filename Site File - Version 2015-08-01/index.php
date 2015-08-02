<?php include 'header.php';
//if(isset($_SESSION['userID'])){
//header("location: profile.php");
//}
?>

<!-- Put your page content here! -->
<div class="jumbotron">
    <img src="Photos/Logo1.jpg" class="img-responsive" >
    <div align="center" style="padding-top: 3%;" >   
        <h3>Login<span> or <a href="register.php">Register Here</a></span></h3>
        <form method="POST" action="profile.php">
            <h3 style="margin-bottom: 0;">Email: </h3><span><input type="text" style="width: 10em; font-size: 0.75em;" name="email" placeholder="you@email.com"></span><br>
            <h3 style="margin-bottom: 0;">Password: </h3><span><input type="password" style="width: 10em; font-size: 0.75em;" name="password"></span><br>	
        <input type="submit" value="Login" name="submit" class="btn btn-primary" style="margin-top: 1%" role="button" />
        </form>
    </div>
    <p style="padding-top: 4%;">Our travel destinations are out of this world.<br><br>Visit Jupiter and be the first to see all the natural beauty the gas giant has to offer.</p>
</div>


   <div class="row">
   <div class="col-sx-6 col-md-3">
      <div class="thumbnail">
          <a href="zoo.php"><img src="Photos/zoo.jpg" alt="Generic placeholder thumbnail"></a>
      </div>
      <div class="caption">
         <h3>Jupiter MicroZoo</h3>
         <p>Discover Jupiter's indigenous creatures.</p>
         <p>
            <a href="zoo.php" class="btn btn-primary" role="button">
               Learn more
            </a>             
         </p>
      </div>
   </div>
   <div class="col-sx-6 col-md-3">
      <div class="thumbnail">
          <a href="night-life.php">
              <img src="Photos/locals2.jpg" alt="Generic placeholder thumbnail"></a>
      </div>
      <div class="caption">
         <h3>Locals</h3>
         <p>Interact with the "friendly" locals.</p>
         <p>
            <a href="night-life.php" class="btn btn-primary" role="button">
               Learn more
            </a>             
         </p>
      </div>
   </div>
   <div class="col-sx-6 col-md-3">
      <div class="thumbnail">
         <a href="storm.php"><img src="Photos/storm.jpg" alt="storm photo"></a>
      </div>
      <div class="caption">
         <h3>Jupiter's Storm</h3>
         <p>See what all the hype is about.</p>
         <p>
            <a href="storm.php" class="btn btn-primary" role="button">
               Learn more
            </a> 
            
         </p>
      </div>
   </div>
   <div class="col-sx-6 col-md-3">
      <div class="thumbnail">
          <a href="moons.php"><img src="Photos/europa2.jpg" alt="Generic placeholder thumbnail"></a>
      </div>
      <div class="caption">
         <h3>Europa</h3>
         <p>Jupiter's top moon since 1879.</p>
         <p>
            <a href="moons.php" class="btn btn-primary" role="button">
               Learn more
            </a> 
            
         </p>
      </div>
   </div>
</div>

<?php
// Include footer
include 'footer.php';
?>
