<?php 
include 'header.php';
?>

<!-- Include HTML here -->
<div style="text-align: center; padding-top: 5%; padding-bottom: 10%;">
    <form class="form-horizontal" action='confirm-registration.php' method="POST">
  <fieldset>
    <div id="legend">
      <legend>Register</legend>
    </div>
      
      <div class="control-group">
      <!-- First Name -->
      <label class="control-label"  for="fname">First Name</label>
      <div class="controls">
        <input type="text" id="fname" name="fname" placeholder="first name" class="input-xlarge">
        <p class="help-block" style="font-size: 0.65em;">enter first name</p>
      </div>
    </div>
      
      <div class="control-group">
      <!-- Last Name -->
      <label class="control-label"  for="lname">Last Name</label>
      <div class="controls">
        <input type="text" id="lname" name="lname" placeholder="last name" class="input-xlarge">
        <p class="help-block" style="font-size: 0.65em;">enter last name</p>
      </div>
    </div>
      
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="you@mail.com" class="input-xlarge">
        <p class="help-block" style="font-size: 0.65em;">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="password" class="input-xlarge">
        <p class="help-block" style="font-size: 0.65em;">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block" style="font-size: 0.65em;">Please confirm password</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form></div>

<?php include 'footer.php'; ?>