  <?php
  function sanitizationUserName($inputText) 
  {
  	# code... for pwd remove the replace part! ad for username remove the strtolower part! 
  	$inputText = strip_tags($inputText);
    $inputText = str_replace(" ","", $inputText);
    return $inputText;
  }
  function sanitizationString($inputText) 
  {
    # code... for pwd remove the replace part! ad for username remove the strtolower part! 
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
  }

 function sanitizationPwd($inputText) 
  {
    # code... for pwd remove the replace part! and for username remove the strtolower part! 
    $inputText = strip_tags($inputText);
    return $inputText;
  }
  

  function authen($Authentication)
  {
    if($Authentication=='12AB34CD'){
      return true;
    }
    else 
    {
      return false;
    }
  }


  




if (isset($_POST['Submit'])) {
	# code... this is for registration 

	//echo "<br> Create WORKED <br>";
	$Username = sanitizationUserName($_POST['Username']);
	//echo $Username;
  $Name = sanitizationString($_POST['Name']);
  //echo $Name;
  $Birthday = sanitizationString($_POST['Birthday']);
  //echo $Birthday;
  $Gender = sanitizationString($_POST['Gender']);
  //echo $Gender;
  $Phone = sanitizationString($_POST['Phone']);
  $Email = sanitizationString($_POST['Email']);
  $Email1 = sanitizationString($_POST['Email1']);
  //echo $Phone;
  //echo $Email;
  //echo $Email1;
  $Pwd = sanitizationPwd($_POST['Pwd']);
  //echo $Pwd;
  $Pwd1 = sanitizationPwd($_POST['Pwd1']);
  //echo $Pwd1;

  $Authentication = $_POST['Authentication'];
   //echo $Authentication; 
  $wassuccessful= $account->register($Username,$Name,$Birthday,$Gender,$Phone,$Email,$Email1,$Pwd,$Pwd1);
  $auth= authen($Authentication);
  if(($wassuccessful == true))
  {
    header("Location:Login.php");
  }
  
 }

?> 