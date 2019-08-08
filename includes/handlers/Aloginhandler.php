<?php if (isset($_POST['Log'])) {
	# code... this is for login button
	
	$username = $_POST['username'];
	//echo $username;
	$password = $_POST['pass'];
	//echo $password;
	//login function
	$result = $account->login($username,$password);
	if($result==true)
	{   $_SESSION['userLoggedIn'] = $username;
         $time=date("h:i:sa");
         mysqli_query($conn,"INSERT INTO userlog(username,LoggedOut) VALUES ('$username','')");
       echo  "INSERT INTO userlog(username) VALUES ('$username')";
		header("Location:http://localhost/LoggedIn/HomePage.php");
	}
}
?> 