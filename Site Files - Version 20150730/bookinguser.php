<?php 
include('session.php');
include 'header.php'; ?>

<!-- Include HTML here -->
<div style="text-align: center; padding-top: 10%; padding-bottom: 10%;">
<div class="jumbotron">
    <p>Visit the gas giant<br><br>Visit jupiter on an all inclusive journey paid for in full by the generous people of jupiter<br>Simply sign up below</p>
<body>

<form class="form-horizontal" action='confirm-signup.php' method="POST">
    <p style="padding-top: 4%;"><font color="#337ab7">Name: </font><i><?php echo $login_session2; ?></i> <br>
        <font color="#337ab7">Email:</font> <i><?php echo $login_session; ?></i>
        <br>
     <font color="#337ab7">date:</font>
    <select name="mydropdown" id="mydropdown" class="selectpicker" data-style="btn-primary">
<option value="01/01/2016">01/01/2016</option>
<option value="01/01/2017">01/01/2017</option>
<option value="01/01/2018">01/01/2018</option>
<option value="01/01/2019">01/01/2019</option>
<option value="01/01/2020">01/01/2020</option>
</select></p>
    
        <button class="btn btn-success">SignUp</button>
    </form> 
    </div>

</div>

<?php include 'footer.php'; ?>