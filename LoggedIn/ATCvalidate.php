<?php
if(isset($_POST['insert']))
{

	$flno=$_POST['FNO'];
    $AD=$_POST['AD'];
	$CID=$_POST['CID'];
	$CN=$_POST['CN'];
	$RN=$_POST['RN'];
	$TI=$_POST['TI'];
	$TO=$_POST['TO'];
	$DATE=$_POST['DATE'];

	
	$sql="INSERT INTO atc VALUES('$flno','$AD','$CID','$CN','$RN','$TI','$TO','$DATE')";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		header("update.php");
	}
}


if(isset($_POST['update']))
{

	$flno=$_POST['FNO1'];
    $AD1=$_POST['AD1'];
	//$CID1=$_POST['CID1'];
	$CN1=$_POST['CN1'];
	$RN1=$_POST['RN1'];
	$TI1=$_POST['TI1'];
	$TO1=$_POST['TO1'];
	//$DATE1=$_POST['DATE1'];

	
	$sql="UPDATE `atc` SET `ArrDep`='$AD1',`CntrollerName`='$CN1',`RunwayNo`='$RN1',`TimeIn`='$TI1',`TimeOut`='$TO1' WHERE `FlightNo`='$flno'";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		header("ATCupdate.php");
	}
	
}

if(isset($_POST['delete']))
{

	$FNO2=$_POST['FNO2'];
    

	 $sq = "SELECT  `ControllerID` FROM `atc` WHERE `FlightNo`='$FNO2'";

                                    $resul = mysqli_query($conn ,$sq);

                                    if(mysqli_num_rows($resul)>0)
                                    { //echo "Hey";
	while ($row = mysqli_fetch_array($resul))
                                        { 
                                            $cd=$row["ControllerID"]; 
                                            //echo $cd; }
                                        }
                                        }

	$sql="DELETE FROM `atc` WHERE `FlightNo`='$FNO2' AND `ControllerID`='$cd'";
	//echo $sql;
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		header("ATCupdate.php");
	}
	
}



?>