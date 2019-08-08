<?php

if(isset($_POST['insert1']))
{

	$UID=$_POST['UID'];
    $CN=$_POST['CN'];
	$CL=$_POST['CL'];
	$TN=$_POST['TN'];
	$QP=$_POST['QP'];
	$QC=$_POST['QC'];
	$QA=$_POST['QA'];
	
	$sql="INSERT INTO fuelstorage VALUES('$UID','$CN','$CL','$TN','$QP','$QC','$QA')";

	$result=mysqli_query($conn,$sql);
	if($result)
	{
		header("fsupdate.php");
	}
}


if(isset($_POST['update1']))
{

	$UID1=$_POST['UID1'];
    $CN1=$_POST['CN1'];
	//$CID1=$_POST['CID1'];
	$CL1=$_POST['CL1'];
	$TN1=$_POST['TN1'];
	$QP1=$_POST['QP1'];
	$QC1=$_POST['QC1'];
	$QA1=$_POST['QA1'];

	
	$sql="UPDATE `fuelstorage` SET `CompanyName`='$CN1',`Cost/Ltr`='$CL1',`TankNo`='$T',`QuantityPurchased`='$QP1',`QuantityConsumed`='$QC1',`QuantityAvailable`='$QA1' WHERE `UniqueID`='$UID1'";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		header("fsupdate.php");
	}
	
}





?>