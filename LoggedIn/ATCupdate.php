<?php
 include("C:/wamp64/www/AirportDatabase/includes/Aconfig.php");
 include("ATCvalidate.php");



?>



<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
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

</head>
<body style="background-color: #F8F9F9">
  
	<div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<center><span class="colorlib-heading" style="position: center; "> <h1>---AIR TRAFFIC CONTROL---</h1><button class="btn btn-default navbar-btn"><a href="HomePage.php"> Go Back</a></button></span></center>
							
						</div> 

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

                           
                       </table> 
</div>
<div class="col-md-12">
	<form method="POST" action="update.php">
	<div class="col-md-4" >
	 <h2 class="heading animate-box">INSERT OPTION</h2>
	 <hr>
	 <table>
    <tr><td class="col-md-1"><label>FLight No:</label></td><td class="col-md-1">
    <input type="text" name="FNO" placeholder="FlightNo"></td>
    </tr>
    <tr><td class="col-md-1"><label>Arr/Dep:</label></td><td class="col-md-1"><input type="text" name="AD" placeholder="Arr/Dep">
    </tr>
    <tr><td class="col-md-1"><label>ControllerID:</label></td><td class="col-md-1"><input type="text" name="CID" placeholder="ControllerID">
    </tr>	
    <tr><td class="col-md-1"><label>ControllerName:</label></td><td class="col-md-1"><input type="text" name="CN" placeholder="ControllerName">
    </tr>
    <tr><td class="col-md-1"><label>RunwayNo:</label></td><td class="col-md-1"><input type="text" name="RN" placeholder="Runway No">
    </tr>
    <tr><td class="col-md-1"><label>TimeIn:</label></td><td class="col-md-1"><input type="text" name="TI" placeholder="Time In">
    </tr>
    <tr><td class="col-md-1"><label>TimeOut:</label></td><td class="col-md-1"><input type="text" name="TO" placeholder="Time Out">
    </tr>
    <tr><td class="col-md-1"><label>Date:</label></td><td class="col-md-1"><input type="date" name="DATE" >
    </tr>                  
</table> 
<hr>              
         <div align="center">             
    <center><button type="submit" class="btn btn-default navbar-btn" name="insert">INSERT</button></center>
</div>
	</div>
	<div class="col-md-4" >
	 <h2 class="heading animate-box">UPDATE OPTION</h2>
	 <hr>
	 <table>
	 	<span class="heading-meta" style="color: black;">Enter the flight Number to which updation has to be done:</span>

    <tr><td class="col-md-1"><label>FLight No:</label></td><td class="col-md-1">
    <input type="text" name="FNO1" placeholder="FlightNo"></td>
    </tr>
    <tr><td class="col-md-1"><label>Arr/Dep:</label></td><td class="col-md-1"><input type="text" name="AD1" placeholder="Arr/Dep">
    </tr>
    	
    <tr><td class="col-md-1"><label>ControllerName:</label></td><td class="col-md-1"><input type="text" name="CN1" placeholder="ControllerName">
    </tr>
    <tr><td class="col-md-1"><label>RunwayNo:</label></td><td class="col-md-1"><input type="text" name="RN1" placeholder="Runway No">
    </tr>
    <tr><td class="col-md-1"><label>TimeIn:</label></td><td class="col-md-1"><input type="text" name="TI1" placeholder="Time In">
    </tr>
    <tr><td class="col-md-1"><label>TimeOut:</label></td><td class="col-md-1"><input type="text" name="TO1" placeholder="Time Out">
    </tr>
                      
</table> 
<span>*IF ANY COLUMNS NEEDS NO UPDATION ENTER THE OLD VALUES BACK!</span>              
     <hr>              
         <div align="center">             
    <center><button type="submit" class="btn btn-default navbar-btn" name="update">UPDATE</button></center>
</div>                 


	</div>
	<div class="col-md-4" >
	 <h2 class="heading animate-box">DELETE OPTION</h2>
	 <hr>
	 <table>
	 	<span class="heading-meta" style="color: black;">Enter the flight Number to which Deletion Operation has to be done:</span>

    <tr><td class="col-md-1"><label>FLight No:</label></td><td class="col-md-1">
    <input type="text" name="FNO2" placeholder="FlightNo"></td>
    </tr>
  </table> 
  <hr>              
         <div align="center">             
    <center><button type="submit" class="btn btn-default navbar-btn" name="delete">DELETE</button></center>
</div>              
</div>
</form>
	
</div>





<div><script src="js/jquery.min.js"></script>
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
	<script src="js/main.js"></script></div>

</body>
</html>