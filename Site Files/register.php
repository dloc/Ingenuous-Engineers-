<?php include 'header.php'; ?>

<!-- Include HTML here -->
<div style="text-align: center; padding-top: 10%; padding-bottom: 10%;">
    <form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
      
      <div class="control-group">
      <!-- name -->
      <label class="control-label"  for="fname">First</label>
      <div class="controls">
        <input type="text" id="fname" name="fname" placeholder="first name" class="input-xlarge">
        <p class="help-block">enter first name</p>
      </div>
    </div>
      
      <div class="control-group">
      <!-- lastname -->
      <label class="control-label"  for="lname">Last</label>
      <div class="controls">
        <input type="text" id="lname" name="lname" placeholder="lsat name" class="input-xlarge">
        <p class="help-block">enter last name</p>
      </div>
    </div>
      
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="you@mail.com" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
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