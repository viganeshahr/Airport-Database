<?php
 include("C:/wamp64/www/AirportDatabase/includes/Aconfig.php");
 include("fsvalidate.php");


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
							<span class="colorlib-heading" style="position: center;"><center><h1>---FUELSTORAGE---</h1><button class="btn btn-default navbar-btn"><a href="HomePage.php"> Go Back</a></button></center></span>
							
						</div>

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
	<table class="table" >
                      <tr >
                      <td><h4> UniqueID </h4> </td>
                      <td><h4> CompanyName </h4></td>
                      <td><h4> 	Cost/Ltr	 </h4></td>
                      
                      <td><h4> TankNo</h4></td>
                      <td><h4> QuantityPurchased </h4></td>
                      <td><h4> QuantityConsumed </h4></td>
                     <td><h4> QuantityAvailable </h4></td>
                     
                      
                      
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr><td><?php
                                            echo $row["UniqueID"]; ?>
                                           </td><td><?php 
                                            echo $row["CompanyName"]; ?></td>
                                           <td> <?php echo $row["Cost/Ltr"];?></td>
                                         
                                          <td> <?php echo $row["TankNo"];?></td>
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

                           
                       </table> 
</div>
<div class="col-md-12">
	<form method="POST" action="fsupdate.php">
	<div class="col-md-6" >
	 <h2 class="heading animate-box">INSERT OPTION</h2>
	 <hr>
	 <table>
    <tr><td class="col-md-1"><label>Unique ID:</label></td><td class="col-md-1">
    <input type="text" name="UID" placeholder="Unique ID"></td>
    </tr>
    <tr><td class="col-md-1"><label>CompanyName:</label></td><td class="col-md-1"><input type="text" name="CN" placeholder="CompanyName">
    </tr>
    <tr><td class="col-md-1"><label>Cost/Ltr:</label></td><td class="col-md-1"><input type="text" name="CL" placeholder="Cost/Ltr">
    </tr>	
    <tr><td class="col-md-1"><label>TankNo:</label></td><td class="col-md-1"><input type="text" name="TN" placeholder="TankNo">
    </tr>
    <tr><td class="col-md-1"><label>QuantityPurchased:</label></td><td class="col-md-1"><input type="text" name="QP" placeholder="QuantityPurchased">
    </tr>
    <tr><td class="col-md-1"><label>QuantityConsumed:</label></td><td class="col-md-1"><input type="text" name="QC" placeholder="QuantityConsumed">
    </tr>
    <tr><td class="col-md-1"><label>QuantityAvailable:</label></td><td class="col-md-1"><input type="text" name="QA" placeholder="QuantityAvailable">
    </tr>
                    
</table> 
<hr>              
         <div align="center">             
    <center><button type="submit" class="btn btn-default navbar-btn" name="insert1">INSERT</button></center>
</div>
	</div>
	<div class="col-md-6" >
	 <h2 class="heading animate-box">UPDATE OPTION</h2>
	 <hr>
	 <table>
	 	<span class="heading-meta" style="color: black;">Enter the UNIQUE ID to which updation has to be done:</span>

    <tr><td class="col-md-1"><label>Unique ID:</label></td><td class="col-md-1">
    <input type="text" name="UID1" placeholder="Unique ID"></td>
    </tr>
    <tr><td class="col-md-1"><label>CompanyName:</label></td><td class="col-md-1"><input type="text" name="CN1" placeholder="CompanyName">
    </tr>
    <tr><td class="col-md-1"><label>Cost/Ltr:</label></td><td class="col-md-1"><input type="text" name="CL1" placeholder="Cost/Ltr">
    </tr>	
    <tr><td class="col-md-1"><label>TankNo:</label></td><td class="col-md-1"><input type="text" name="TN1" placeholder="TankNo">
    </tr>
    <tr><td class="col-md-1"><label>QuantityPurchased:</label></td><td class="col-md-1"><input type="text" name="QP1" placeholder="QuantityPurchased">
    </tr>
    <tr><td class="col-md-1"><label>QuantityConsumed:</label></td><td class="col-md-1"><input type="text" name="QC1" placeholder="QuantityConsumed">
    </tr>
    <tr><td class="col-md-1"><label>QuantityAvailable:</label></td><td class="col-md-1"><input type="text" name="QA1" placeholder="QuantityAvailable">
    </tr>
                      
</table> 
<span>*IF ANY COLUMNS NEEDS NO UPDATION ENTER THE OLD VALUES AS IT IS!</span>              
     <hr>              
         <div align="center">             
    <center><button type="submit" class="btn btn-default navbar-btn" name="update1">UPDATE</button></center>
</div>                 


	</div>
	<!--div class="col-md-4" >
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
</div-->              
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