<?php 
//include("includes/Aconfig.php");
//include("includes/Arrivals.php");
//include("includes/Departures.php");
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.container {
    margin-bottom: 0px;
    position:left;
    background-color:;
}
.container2 .jumbotron{
object-position:top;
width:100%;
height:1000px;
background-image: url('Airplane.jpeg');
background-repeat: no-repeat;
background-size: cover; 
}
.container3{
    position:bottom;
}
.image {
  display: block;
  width: 100%;
  height: 100%;
  margin-top: 20%; 
}
body{
    position: relative; /* required */
}
ul.nav-tabs {
    width: 140px;
    margin-top: 20px;
    border-radius: 4px;
    background: #fff;
    z-index: 999;
    border: 1px solid #ddd;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
}
ul.nav-tabs li {
    margin: 0;
    border-top: 1px solid #ddd;
}
ul.nav-tabs li:first-child {
    border-top: none;
}
ul.nav-tabs li a {
    margin: 0;
    padding: 8px 16px;
    border-radius: 0;
}
ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover {
    color: #fff;
    background: #0088cc;
    border: 1px solid #0088cc;
}
ul.nav-tabs li:first-child a {
    border-radius: 4px 4px 0 0;
}
ul.nav-tabs li:last-child a {
    border-radius: 0 0 4px 4px;
}
ul.nav-tabs.affix {
    top: 40px; /* set the top position of pinned element */
}
@media screen and (min-width: 992px) and (max-width: 1199px){
    ul.nav-tabs{
        width: 180px; /* set nav width on medium devices */
    }
}
@media screen and (min-width: 1200px){
    ul.nav-tabs{
        width: 220px; /* set nav width on large devices */
    }
}
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}
 .container2 .jumbotron .container5{
   margin-left: 80%;
    width:300px;
    height:100px;
    color:#ffffff;

}
 .container2 .jumbotron .imgcontainer1 img{
   margin-left: 76%;
    width: 100px;
    background-color: #A9A9A9;
}
.container2 .jumbotron .cont{
    color:#ffffff;
    background-color:#000000 ;
}
h1{
position: absolute;
    left: 20px;
    top: 50px;
    color:#ffffff;
}
.container3 .color1{
    background-color:transparent ;
}
.container3 .color2{
   background-color: transparent; 
}
.container3 .color3{
   background-color: transparent; 
}
.container3 .color4{
   background-color: transparent ; 
}
.container3 .colors5{
   background-color: transparent ; 
}
.check{
     background-color:#000000;
}
h2{
    color:#ffffff;
}
.container5{
    color:#000000;  
}

</style>
</head>
<body style= " background-image: url('Airplane.jpeg'); background-repeat: no-repeat; background-size: cover;"> 
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">    
        <div class="navbar-header" >       
            <a class="navbar-brand" href="#">Airport Database</a>    
          <ul class="nav navbar-nav">          
            <li><a href="#section1">Arrivals</a></li>          
            <li><a href="#section2">Departures</a></li>          
            <li><a href="#section3">Tickets</a></li>
            <li><a href="#section4">Cargo</a></li>
            <li><a href="#section5">Maintenance</a></li>
            <li><a href="http://localhost/AirportDatabase/Login.php">Log In</a></li>               
        </ul>    
    </div> 
</nav> 
    </div>
    <div class="check">
    <div class="container2">
        <div class="jumbotron"> 
       
        
  <div class="cont">
      <h1>Welcome to our database</h1></div>
    </div>
    <div class="container3" style="min-height: 100vh">

        <body data-spy="scroll" data-target="#myScrollspy">
           
   
     

        <div class="col-sm-12">
            <div id="section1">
                <div class="colors5">
                <h2>Arrivals</h2><br>
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-sm-4" style=" height: 300px; ">
                                     <div class="w3-container w3-center w3-animate-left" align="center">
                                                <img src="arrivals1.jpg" style="margin-top: 100px">
                                    </div>
                            </div>
                            <div class="col-sm-8" style="height: 300px">
                                <p class="text-primary" style="color: red;">
                                    
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
                                        
                          
              
                       ?> <table border='2' style="margin-top: 23px">
                      <tr style="color: white">
                      <td style="width: 200px"><h3 align="center"> FlightNo </h3>  </td>
                      <td style="width: 200px"><h3 align="center"> Source </h3></td>
                      <td style="width: 200px"><h3 align="center"> Destination </h3></td>
                      <td style="width: 200px"><h3 align="center"> Status </h3></td>
                      
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr style="color: white"><td align="center"><?php
                                            echo $row["FlightNo"]; ?>
                                           </td><td align="center"><?php 
                                            echo $row["Source"]; ?></td>
                                           <td align="center"> <?php echo $row["Destination"];?></td>
                                          
                                          
                                          <td align="center"> <?php echo $row["Status"];?></td>
                                          
                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }
mysqli_free_result($resul);
mysqli_close($con);
                                ?>

                           
                       </table>
                           
</p>
                            </div>
                    </div>
                    </div>
                
                </div>

                
                 
            <hr>
            <div id="section2">
            <div class="color4">
                <h2>Departure</h2>
                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8" style="height: 300px">
                                <p class="text-primary" style="color: red;"><?php

                                    $con = mysqli_connect("localhost", "root", "", "airport");

                                    if(mysqli_connect_errno()) 
                                    {
                                    echo "Failed to connect: " . mysqli_connect_errno();
                                    }

                                    $sql = "SELECT * FROM `departures`;";

                                    $resul = mysqli_query($con ,$sql);

                                    if(mysqli_num_rows($resul)>0)
                                    {
                                        
                          
              
                       ?> <table border='2' style="margin-top: 23px">
                      <tr style="color: white">
                      <td style="width: 200px"><h3 align="center"> FlightNo </h3>  </td>
                      <td style="width: 200px"><h3 align="center"> Source </h3></td>
                      <td style="width: 200px"><h3 align="center"> Destination </h3></td>
                      <td style="width: 200px"><h3 align="center"> Status </h3></td>
                      
                      
                       </tr> <?php
                                        while ($row = mysqli_fetch_array($resul))
                                        { ?><tr style="color: white"><td align="center"><?php
                                            echo $row["FlightNo"]; ?>
                                           </td><td align="center"><?php 
                                            echo $row["Source"]; ?></td>
                                           <td align="center"> <?php echo $row["Destination"];?></td>
                                          
                                          
                                          <td align="center"> <?php echo $row["Status"];?></td>
                                          
                                          <?php echo "<br>";

                                ?>
                                    </tr>      
                                <?php
                                        }
                                    }
mysqli_free_result($resul);
mysqli_close($con);
                                ?>

                           
                       </table>
                           </p>
                            </div>
                            <div class="col-sm-4" style=" height: 300px;">
                                     <div class="w3-container w3-center w3-animate-right">
                                                <img src="departures1.jpg" style="margin-top: 100px">
                                    </div>
                            </div>
                            
                    </div>
                </div>
            </div>
            </div>
            <hr>
            <div id="section3">
                <div class="color3">
                <h2>Tickets</h2>
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-sm-4" style=" height: 300px;">
                                     <div class="w3-container w3-center w3-animate-left">
                                                <img src="airtickets.jpg" style="margin-top: 100px">
                                    </div>
                            </div>
                            <div class="col-sm-8" style=" height: 300px">
                                 <p class="text-primary" style="color: white;"><h3 style="color: white">Book Air tickets through us and avail amazing offers and cashback through our various partnering banks and wallets such as paytm,amazonpay,Kotak Bank,HDFC Bank etc.</h3> </p>
                                
                            </div>
                    </div>
                    </div>
            </div>
                
            </div>
            <hr>
            <div id="section4">
                <div class="color2">
                <h2>Cargo</h2>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8" style=" height: 300px">
                                <p class="text-primary" style="color: white;"><h3 style="color: white">Got a lot of cargo to be parcled to other places? Don't worry we provide the best cargo courrier service in the country with our various courrier partners such as DTDC, DHL,
                                UPS among many others. Your Cargo is safely locked and strapped thus assuring no damange to the products inside.We got each of your parcel covered with an insurance so why look at other options?</h3> </p>
                            </div>
                            <div class="col-sm-4" style=" height: 300px;">
                                     <div class="w3-container w3-center w3-animate-right">
                                                <img src="cargo.jpg" style="margin-top: 100px">
                                    </div>
                            </div>
                            
                    </div>
                </div>
            </div>
                </div>
            <hr>
            <div id="section5">
                <div class="color1">
                <h2>Maintenance</h2>
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-sm-4" style=" height: 300px;">
                                     <div class="w3-container w3-center w3-animate-left">
                                                <img src="rmain.jpg" style="margin-top: 100px" alt="Maintenance">
                                    </div>
                            </div>
                            <div class="col-sm-8" style=" height: 300px">
                                <p class="text-primary" style="color: white;"><h3 style="color: white">Maintenance of an aircraft is atmost the most important thing as a tiny negligence in its maintenance can cost lives in worst situation. We provide various maintenance service such as aircraft remanucfacturing, building private jets, aircraft repainting or re-stickering, spares are available for vaiours flying birds etc. Our workers are well trained to check and rectify the problem of the aircraft in the minimal time possible.</h3> </p>
                            </div>
                    </div>
                    </div>
                
            </div>
            </div>
        </div>
    </div>
</div>
 
 
</body>
</html>