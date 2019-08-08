<?php

include("C:/wamp64/www/AirportDatabase/includes/Aconfig.php");

if(isset($_SESSION['userLoggedIn'])){
	$userLoggedIn = $_SESSION['userLoggedIn'];
	
}    
else 
	{
		header("Location:http://localhost/AirportDatabase/Login.php");
	} 

?>

<!DOCTYPE HTML>
<html>
	<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Logged In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
#main{
	background-color: #F8F9F9   ;
	text-decoration-color: :#F8F9F9 ;
}
#colorlib-blog{
	background-color: #F8F9F9 ;
}
#page{
	background-color: #F8F9F9;
}
#text{
	color: #F8F9F9;
}

	</style>

	</head>
	<body>

	<div id="page">
		
				<nav class="navbar navbar-default" role="navigation">   
 <div class="navbar-header"> 
       <a class="navbar-brand" href="#" >ADMIN</a>   
        </div>  
          <div>       <ul class="nav navbar-nav">          
          	<li ><a href="#hello3">Arrivals</a></li>    
          	<li ><a href="#hello4">Departure</a></li>         
          	<li ><a href="#hello5">cargo</a></li>         
          	<li ><a href="#hello6">maintainance</a></li>         
          	<li ><a href="#hello7">fuel</a></li>  
          	<li ><a href="#hello8">ATC</a></li>
          	<li ><a href="#hello9">History</a></li>   
          	<li ><form method="POST" action="HomePage.php"><button type="submit" class="btn btn-default navbar-btn" name="Logout"> LOG OUT </button></form></li>     

          
	      </ul>    </div> </nav>
			


		</aside>
		<div id="Logout">
			
			<?php 
           if(isset($_POST['Logout'])){
        session_destroy();
		echo "LG";
        $time=date("h:i:sa");
        mysqli_query($conn,"UPDATE userlog SET LoggedOut='$time' WHERE username='$userLoggedIn'");
        header("Location:http://localhost/AirportDatabase/Home.php"); }
			?>

		</div>

		<div id="main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(https://www.sickchirpse.com/wp-content/uploads/2016/12/Pilot.jpg);">
				   		<div id="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc1">
						   					<div id=text><h1>Hi! <br>Welcome</h1>
						   					<p>to check any of the details please click on the left scroll buttons</p></div>
												<p><a class="btn btn-primary btn-learn">Download our app<i class="icon-download4"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(https://www.imore.com/sites/imore.com/files/styles/xlarge/public/field/image/2017/02/airplane-flight-sunset.jpg?itok=8iUtkHU-);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1> hello to edit <br>your profile</h1>
												<h2>click below </h2>
												<p><a class="btn btn-primary btn-learn">edit Portfolio <i class="icon-briefcase3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>
            <div id ="hello3">
			<section class="arrivals" data-section="arrivals">
				<div class="narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="colorlib-heading"><h1>Arrivals</h1></span>
										<h3 class="heading-meta" style="color: #6f706f;">What You Can Do</h3>
										<?php

                                    $con = mysqli_connect("localhost", "root", "", "airport");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `arrivals`;";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> 
                       <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                       <table class="table">
                      <tr >
                      <td><h4> FlightNo </h4> </td>
                      <td><h4> Source </h4></td>
                      <td><h4> Destination </h4></td>
                      <td><h4> Runway No </h4></td>
                      <td><h4> Gate No </h4></td>
                      <td><h4> Controller ID </h4></td>
                      <td><h4> Status </h4></td>
                      <td><h4> Type </h4></td>
                      <td><h4> Date </h4></td>
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr><td><?php
                                            echo $row["FlightNo"]; ?>
                                           </td><td><?php 
                                            echo $row["Source"]; ?></td>
                                           <td> <?php echo $row["Destination"];?></td>
                                          <td><?php  echo $row["RunwayNo"];?></td>
                                          <td> <?php echo $row["GateNo"];?></td>
                                          <td> <?php echo $row["ControllerID"];?></td>
                                          <td> <?php echo $row["Status"];?></td>
                                           <td><?php echo $row["Type"];?></td>
                                           <td><?php echo $row["Date"];?></td>

                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }

                                ?>

                           
                       </table> </div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3>SOURCE</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="icon-globe-outline"></i></span>
										<h3>DESTINATION</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3>GATE NO</h3>
									</div>
								</div>
								
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-4">
										<span class="icon2"><i class="icon-phone3"></i></span>
										<h3>AND MORE...</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>I am happy to know you <br>We would like to inform you that bangalore airport
										has been awarded as the ranked number 1 for best smart airport in asia</h2>
										<a href="#" class="btn-hire">know more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</section>


			</div>
			<div id="hello4">
			<section class="departure" data-section="departure">
				<div class="narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="colorlib-heading"><h1>Departures</h1></span>
							<h2 class="heading-meta" style="color: #6f706f;">What Can I Do?</h2>
						</div>
					</div>
					<div align="center">
						<?php

                                    $con = mysqli_connect("localhost", "root", "", "airport");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `departures`;";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> 
                       <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                       <table class="table">
                      <tr >
                      <td><h4> FlightNo </h4> </td>
                      <td><h4> Source </h4></td>
                      <td><h4> Destination </h4></td>
                      <td><h4> Runway No </h4></td>
                      <td><h4> Gate No </h4></td>
                      <td><h4> Controller ID </h4></td>
                      <td><h4> Status </h4></td>
                      <td><h4> Type </h4></td>
                      <td><h4> Date </h4></td>
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr><td><?php
                                            echo $row["FlightNo"]; ?>
                                           </td><td><?php 
                                            echo $row["Source"]; ?></td>
                                           <td> <?php echo $row["Destination"];?></td>
                                          <td><?php  echo $row["RunwayNo"];?></td>
                                          <td> <?php echo $row["GateNo"];?></td>
                                          <td> <?php echo $row["ControllerID"];?></td>
                                          <td> <?php echo $row["Status"];?></td>
                                           <td><?php echo $row["Type"];?></td>
                                           <td><?php echo $row["Date"];?></td>

                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }

                                ?>

                           
                       </table> </div>
                   </div>
						

					</div>
					<div>
						
<span ><h2 class="heading-meta animate-box" data-animate-effect="fadeInLeft" style="color:green;" >BIAL, the operator of Bangalore international airport, today said the second runway is expected to be operational next year and the new <br><br>terminal by 2021. 

</h2></span>
					</div>
					
					<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							<div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
								<div class="desc">
									<h3>gate-no</h3>
									<p>we get to know the gate from which the flight is going to depart</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>daparture-time</h3>
									<p>time of departure</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-3">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>flight name</h3>
									<p>we can find the name of the flight</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-4">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
								<div class="desc">
									<h3>seats filled</h3>
									<p>the amount of seats filled</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-5">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>destination</h3>
									<p>destination of the flight</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			
		</div>
			
			

			<div id ="hello8">
			<section class="ATC" data-section="ATC">
				<div class="narrow-content">
					<div class="row">
						<div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							
							<h2 class="heading animate-box">Air Traffic Control</h2>
                            <span class="heading-meta" style="color: #6f706f;">ATC</span>
							<?php

                                    $con = mysqli_connect("localhost", "root", "", "airport");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `atc`;";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> 
                       <div class="col-md-12 animate-box" style="width:100%;" data-animate-effect="fadeInLeft">
                       <table class="table" >
                      <tr >
                      <td><h4> FlightNo </h4> </td>
                      <td><h4> Arr/Dep </h4></td>
                      <td><h4> 	ControllerID	 </h4></td>
                      
                      <td><h4> CntrollerName</h4></td>
                      <td><h4> RunwayNo </h4></td>
                      <td><h4> TimeIn </h4></td>
                     <td><h4> TimeOut </h4></td>
                     <td><h4> Date </h4></td>
                      
                      
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr><td><?php
                                            echo $row["FlightNo"]; ?>
                                           </td><td><?php 
                                            echo $row["ArrDep"]; ?></td>
                                           <td> <?php echo $row["ControllerID"];?></td>
                                         
                                          <td> <?php echo $row["CntrollerName"];?></td>
                                          <td> <?php echo $row["RunwayNo"];?></td>
                                          <td> <?php echo $row["TimeIn"];?></td>
                                          <td> <?php echo $row["TimeOut"];?></td>
                                          <td> <?php echo $row["Date"];?></td> 
                                           
                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }

                                ?>

                           
                       </table> </div>
						</div>
					</div>
				<div class="col-md-12 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					 <center><button type="button" class="btn btn-default navbar-btn"> <a href="ATCupdate.php">EDIT TABLE</a></button> </center>
				</div>
			
					<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3>SOURCE</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="icon-globe-outline"></i></span>
										<h3>DESTINATION</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3>GATE NO</h3>
									</div>
								</div>
								
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-4">
										<span class="icon2"><i class="icon-phone3"></i></span>
										<h3>AND MORE...</h3>
									</div>
								</div>
							</div>
					<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
						<div class="col-md-12">
							
					</div>
					<div class="row">
						
					</div>
					
				</div>
			</section>
			
		</div>
            <div id="hello5">
			<section class="cargo" data-section="cargo">
				<div class="narrow-content">
					<div class="row">
						<div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="colorlib-heading animate-box"><h1>CARGO</h1></span>
							<h1 class="heading-meta" style="color: #6f706f;">List of Cargo Flights</h1>
								<?php

                                    $con = mysqli_connect("localhost", "root", "", "airport");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `cargoflight`;";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> 
                       <div class="col-md-12 animate-box" style="width:100%;" data-animate-effect="fadeInLeft">
                       <table class="table" >
                      <tr >
                      <td><h4> Flight No </h4> </td>
                      <td><h4> Source </h4></td>
                      <td><h4> Destination </h4></td>
                      <td><h4> Cargo Weight(Tonnes) </h4></td>
                      <td><h4> Crew</h4></td>
                      <td><h4> Airline </h4></td>
                      <td><h4> Fuel Pumped(Lts) </h4></td>
                      <td><h4> Carriers </h4></td>
                      <td><h4> Date </h4></td>
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr><td><?php
                                            echo $row["FlightNo"]; ?>
                                           </td><td><?php 
                                            echo $row["Source"]; ?></td>
                                           <td> <?php echo $row["Destination"];?></td>
                                          <td><?php  echo $row["CargoWt"];?></td>
                                          <td> <?php echo $row["Crew"];?></td>
                                          <td> <?php echo $row["Airline"];?></td>
                                          <td> <?php echo $row["FuelPumped"];?></td>
                                           <td><?php echo $row["Carriers"];?></td>
                                           <td><?php echo $row["Date"];?></td>

                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }

                                ?>

                           
                       </table> </div>
						</div>
					</div>
					

					<div class="row">
						
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>flip kart</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
								  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
								    <span>75%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>amazon</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
								  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
								    <span>60%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Fed Ex</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
								    <span>85%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>myntra</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
								    <span>90%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>HRX</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
								  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
								    <span>70%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>jabong</h3>
								<div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
            </div>
            <div id ="hello6">
			<section class="maintainance" data-section="maintainance">
				<div class="narrow-content">
					<div class="row">
						<div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="colorlib-heading animate-box"><h1>Maintainance </h1></span>
							<h3 class="heading-meta" style="color: #6f706f;">Maintainance Progress in Hanger!</h3>
									<?php

                                    $con = mysqli_connect("localhost", "root", "", "airport");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `maintenance`;";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> 
                       <div class="col-md-12 animate-box" style="width:100%;" data-animate-effect="fadeInLeft">
                       <table class="table" >
                      <tr >
                      <td><h4> Flight No </h4> </td>
                      <td><h4> Airline </h4></td>
                      <td><h4> TypeOfMaintenencae	 </h4></td>
                      <td><h4> PersonInCharge </h4></td>
                      <td><h4> HangerNo</h4></td>
                      <td><h4> Status </h4></td>
                      <td><h4> DateIn </h4></td>
                      <td><h4> DateOut </h4></td>
                      
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr><td><?php
                                            echo $row["FlightNo"]; ?>
                                           </td><td><?php 
                                            echo $row["Airline"]; ?></td>
                                           <td> <?php echo $row["TypeOfMaintenencae"];?></td>
                                          <td><?php  echo $row["PersonInCharge"];?></td>
                                          <td> <?php echo $row["HangerNo"];?></td>
                                          <td> <?php echo $row["Status"];?></td>
                                          <td> <?php echo $row["DateIn"];?></td>
                                           <td><?php echo $row["DateOut"];?></td>
                                           
                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }

                                ?>

                           
                       </table> </div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">list of things you can find
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div class="col-md-6">
										      			<p>airline name</p>
										      			<p>flight number</p>
										      			<p>type of maintainance</p>
										      			<p>hanger number</p>
										      			<p>maintainance</p>
										      		</div>
										      		<div class="col-md-6">
										      			
										      		</div>
										      	</div>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">List Of companies
									            </a>
									        </h4>
									    </div>

									    
									
									

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFive">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Table
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									        <div class="panel-body">
									           	
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		
		</div>
        <div id="hello7">
			<section class="fuel" data-section="fuel">
				<div class="narrow-content">
					<div class="row">
						<div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="colorlib-heading animate-box"><h1>Fuel</h1></span>
							<h2 class="heading-meta" style="color: #6f706f;">Fuel Storage</h2>


							<?php

                                    $con = mysqli_connect("localhost", "root", "", "airport");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `fuelstorage`;";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> 
                       <div class="col-md-12 animate-box" style="width:100%;" data-animate-effect="fadeInLeft">
                       <table class="table" >
                      <tr >
                      <td><h4> UniqueID </h4> </td>
                      <td><h4> CompanyName </h4></td>
                      <td><h4> 	Cost/Ltr	 </h4></td>
                      <td><h4> TankNo </h4></td>
                      <td><h4> QuantityPurchased</h4></td>
                      <td><h4> QuantityConsumed </h4></td>
                      <td><h4> QuantityAvailable </h4></td>
                      
                      
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr><td><?php
                                            echo $row["UniqueID"]; ?>
                                           </td><td><?php 
                                            echo $row["CompanyName"]; ?></td>
                                           <td> <?php echo $row["Cost/Ltr"];?></td>
                                          <td><?php  echo $row["TankNo"];?></td>
                                          <td> <?php echo $row["QuantityPurchased"];?></td>
                                          <td> <?php echo $row["QuantityConsumed"];?></td>
                                          <td> <?php echo $row["QuantityAvailable"];?></td>
                                           
                                           
                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }

                                ?>

                           
                       </table> </div>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<center> <button type="button" class="btn btn-default navbar-btn"><a href="fsupdate.php">
					EDIT TABLE</a> </button> </center>
				</div>
				
					<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-2">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3>Fuel left</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-eye"></i></span>
										<h3>Company</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3>Fuel consumed</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-2">
										<span class="icon2"><i class="icon-briefcase3"></i></span>
										<h3>Price</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-pen2"></i></span>
										<h3>Tank number</h3>
									</div>
								</div>

								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-4">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3>Fuel consumed</h3>
									</div>
								</div>

								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft" ><h2 class="heading-meta" style="color: #6f706f;">Fuel Consumption</h2></div>

								
								
								<div align="center" style="width: 100%">

							<?php

                                    $con = mysqli_connect("localhost", "root", "", "airport");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `fuelconsumption`;";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> 
                       <div class="col-md-12 animate-box" style="width:100%;" data-animate-effect="fadeInLeft">
                       <table class="table" >
                      <tr >
                      <td><h4> FlightNo </h4> </td>
                      <td><h4> Airline </h4></td>
                      <td><h4> 	Type	 </h4></td>
                      <td><h4> UniqueID </h4></td>
                      <td><h4> QuantityPumped</h4></td>
                      <td><h4> Cost </h4></td>
                      
                     <td><h4> Date </h4></td>
                      
                      
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr><td><?php
                                            $fn=$row["FlightNo"]; 
                                            echo $fn; ?>
                                           </td><td><?php 
                                            echo $row["Airline"]; ?></td>
                                           <td> <?php echo $row["Type"];?></td>
                                          <td> <?php $ud=$row["UniqueID"]; 
                                            echo $ud;?></td>
                                          <td> <?php $qp=$row["QuantityPumped"]; 
                                            echo $qp;
                                            calculatecost($ud,$qp,$con,$fn);

                                            ?></td>
                                          <td> <?php $cost=ccost($con,$fn); 
                                                     echo $cost; ?></td>
                                         
                                          <td> <?php echo $row["Date"];?></td>
                                           
                                           
                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }

                               function calculatecost($ud,$qp,$con,$fn)
                               {
                                 
                                 $s="SELECT `Cost/Ltr`FROM `fuelstorage` WHERE `UniqueID`='$ud'";
                                 $r=mysqli_query($con,$s);
                                  if(mysqli_num_rows($r)>0)
                                    { while ($row = mysqli_fetch_array($r))
                                        {         
                                                  $cst=$row['Cost/Ltr'];
                                                  $q=mysqli_query($con,"CALL calculate('$qp','$cst','$fn')");
                                                  
                                        }

                                     }   


                                 return;
                               }  //header("Refresh:0; url=http://localhost/temp/down.php");

                               function ccost($con,$fn)
                               {
                               	    $a="SELECT `Cost` FROM `fuelconsumption` WHERE `FlightNo`='$fn'";
                               	     $b=mysqli_query($con,$a);
                               	     if(mysqli_num_rows($b)>0)
                                    { $row = mysqli_fetch_array($b);
                                                
                                      $cst=$row['Cost'];
                                                  
                                       

                                     }
                                     return $cst;
                               }


                               ?>

                           
                       </table> </div>
                       </div>
								
					
			</div>
			</section>
			
		</div>
        
           
            <div id="hello9" style="margin-top: 700px">
			<section class="cargo" data-section="cargo">
				<div class="narrow-content">
					<div class="row">
						<div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="colorlib-heading animate-box"><h1>HISTORY</h1></span>
							<h1 class="heading-meta" style="color: #6f706f;">History Of Deleted Flights</h1>
								<?php

                                    $con = mysqli_connect("localhost", "root", "", "airport");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `history`;";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> 
                       <div class="col-md-12 animate-box" style="width:100%;" data-animate-effect="fadeInLeft">
                       <table class="table" >
                      <tr >
                      <td><h4> SL NO</h4> </td>
                      <td><h4> Flight No </h4></td>
                      <td><h4> Arrival/Departure </h4></td>
                      <td><h4> Date & Time(When it was deleted)</h4></td>
                      </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr><td><?php
                                            echo $row["SLNO"]; ?>
                                           </td><td><?php 
                                            echo $row["FlightNo"]; ?></td>
                                           <td> <?php echo $row["ArrDep"];?></td>
                                          <td><?php  echo $row["DATETIME"];?></td>
                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }

                                ?>

                           
                       </table> </div>
						</div>
					</div>
				</div>
			</section>
		</div>
			<div>		
			<section class="blog" data-section="blog">
				<div class="narrow-content">
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Read</span>
							<h2 class="heading">Recent News</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<!--a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a-->
								<div class="desc" id="colorlib-blog">
									<span><small>April 14, 2018 </small> | <small> Delhi Airport </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html">Renovating</a></h3>
									<p>Delhi ariport wants to go completely solar powered</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
							<div class="blog-entry">
								<!--a href="blog.html" class="blog-img"><img src="images/blog-2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a-->
								<div class="desc" id="colorlib-blog" >
									<span><small>April 14,2018 </small> | <small> goa Airport</small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html">Digital</a></h3>
									<p>Goa airpot wants to go completely digital by implimenting tickets on phone.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry" >
								<!--a href="blog.html" class="blog-img"><img src="C:\Users\tejaas\Desktop\imagesforpro" class="img-responsive"></a-->
								<div class="desc" id="colorlib-blog">
									<span><small>April 14, 2018 </small> | <small> Pune Airport </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html">Clean</a></h3>
									<p>Pune airport want to go completely clean.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
						</div>
					</div>
				</div>
			</section>

			

		</div><!-- end:colorlib-main -->
	

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<!--script src="js/owl.carousel.min.js"></script-->
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

