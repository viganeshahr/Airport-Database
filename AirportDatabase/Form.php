<?php
include("includes/Aconfig.php");
include("includes/classes/AAccount.php");
include("includes/classes/AConstants.php");

$account = new AAccount($conn);  
 
 
include("includes/handlers/Aregistrhandler.php");
include("includes/handlers/Aloginhandler.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<!--link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css" /> <!-- THIS IS USED FOR THE USER LOGO -->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	.input-group {
  position: relative;
  margin-bottom: 30px;
  border-bottom: 2px solid #ccc;
  background: transparent;
}

.input--style-1 {
  padding: 9px 0;
  color: white;
  background: transparent;
  width: 100%;
}

.input--style-1::-webkit-input-placeholder {
  
  color: white;
}




</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('Airport.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="Registration" method="POST" action="Form.php" >
					<span class="login100-form-logo" >
						<i class="glyphicon glyphicon-user"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Registration Info
					</span>

					<div class="input-group" >
						<span style="color: red"><?php echo  $account->geterror(AConstants::$firstnamechars); ?></span>
						<input class="input--style-1"  type="text" name="Name" id="name" placeholder="Name">
					</div>

				 	<div class="input-group" >
				 		<span style="color: red"><?php echo $account->geterror(AConstants::$usernamechars); ?></span>	<span style="color: red"><?php echo $account->geterror(AConstants::$usernametaken); ?></span>
						<input class="input--style-1"  type="text" name="Username" id="Username" placeholder="Username">
					</div>

					<div class="row" >
						<p class="col-5" style="color: white">Date Of Birth :</p>
						<p class="col-5" style="margin-left: 18px;color: white">Gender :</p>
					</div>
					<br>
				    <div class="row row-space" style="margin-left: 1px" >
					<div class="input-group col-2" >

						<input class="input--style-1"  type="date" name="Birthday" id="Birthday">
						<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> 
					</div>
					<div class="col-1"></div>
 					<div class="input-group col-4 rs-select2" >
					                    <select class="input--style-1"  name="Gender" id="Gender" >
                                            <option disabled="disabled" style="color: black;" selected="selected">GENDER</option>
                                            <option style="color: black;">Male</option>
                                            <option style="color: black;">Female</option>
                                            <option style="color: black;">Other</option>
                                        </select>
					</div>
					</div>

					<div class="input-group" >
						<span style="color: red"><?php echo $account->geterror(AConstants::$numberlenghty); ?></span>
						<span style="color: red"><?php echo $account->geterror(AConstants::$phonenumberwrong); ?></span>
						<input class="input--style-1"  type="text" name="Phone" id="Phone" placeholder="Phone Number">
					</div>

					<div class="input-group" >
						<span style="color: red"><?php echo  $account->geterror(AConstants::$emailinvalid);?></span>
				 		<span style="color: red"><?php echo $account->geterror(AConstants::$emailsdontmatch); ?></span>
						<input class="input--style-1"  type="email" name="Email" id="Email" placeholder="Email">
					</div>

					<div class="input-group" >
						<input class="input--style-1"  type="email" name="Email1" id="Email1" placeholder="Confirm Email">
					</div>

					<div class="input-group"  data-validate="Enter password">
						<span style="color: red"><?php echo $account->geterror(AConstants::$passwordsdontmatch); ?></span>
						<span style="color: red"><?php echo $account->geterror(AConstants::$passwordnotalphanumeric); ?></span>
						<input class="input--style-1" type="password" name="Pwd" id="Pwd" placeholder="Password">
					</div>

					<div class="input-group"  data-validate="Enter password">
						<input class="input--style-1" type="password" name="Pwd1" id="Pwd1" placeholder="Confirm Password">
					</div>
					<div class="input-group" >
						<input class="input--style-1"  type="password" name="Authentication" placeholder="Authentication Password">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="Submit">
							Submit
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

</body>
</html>