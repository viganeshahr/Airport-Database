<?php

   /* $no="NB568";
    $source="Kolkata";
    $Destination="Mumbai";
    $RN="67L";
    $GN="5";
    $CI="AK47";
    $status="Delayed";
    $type="Cargo";
$qery="INSERT INTO arrivals VALUES ('$no','$source','$Destination','$RN','$GN','$CI','$status','$type')";
        $a=mysqli_query($conn,$qery);
        if($a)
        {
        	echo "YAY!";
        }
        else
        {
        	echo "NAY!";
        } */
        $sql = "SELECT * FROM arrivals";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
									{
										
										while ($row = mysqli_fetch_row($result))
										{       
    	                                    echo $row["FlightNo"];
    	                                    echo $row["Source"];
    	                                    echo $row["Destination"];
    	                                    echo $row["RunwayNo"];
    	                                    echo $row["GateNo"];
    	                                    echo $row["ControllerID"];
    	                                    echo $row["Status"];
    	                                    echo $row["Type"];

    	                                          }
                                            
    	                                      }
        


    	$len=sizeof($row);
    	echo $len;
    	
    	?>