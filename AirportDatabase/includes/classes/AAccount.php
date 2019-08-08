 <?php
   
   class AAccount 
   {    private $errorarray;
   	    private $con;
        private $bday;
        private $gender;
        private $phone;
   		public	function __construct($conn)
   			{       $this->con = $conn;
   					$this->errorarray = array();
   			}

    public function login($unn,$pw) {
    	//$pw= md5($pw);
    	$query = mysqli_query($this->con,"SELECT * FROM users WHERE username='$unn' AND Password = '$pw'");
    	if(mysqli_num_rows($query) == 1 )
    	{
    		return true;
    	}
    	else
    	{   array_push($this->errorarray, AConstants::$loginfailed);
    		return false;
    	}
    }

   	public function register($un, $name, $bday, $gender, $phone, $em, $em2,$pwd,$pwd2)
   	{
   		$this->validateUsername($un);
  		$this->validatefname($name);
      $this->bday = $bday;
      $this->gender = $gender;
      $this->validatePhone($phone);
  		//$this->validatelname($ln);
  		$this->validatemails($em, $em2 );
  		$this->validatepwd($pwd, $pwd2);

  		if(empty($this->errorarray)){
  			// insert into DB
  			return $this->insertuserDetails($un,$name,$bday,$gender,$phone,$em,$pwd);
  		}
  		else {
  			return false;
  		}
   	}		
    


    public function geterror($error)
    {
    	if(!in_array($error, $this->errorarray))
    	{
    		$error="";
    	}
    	return "<span class='errorMessage'>$error</span>"; 
    }

    private function insertuserDetails($un,$name,$bday,$gender,$phone,$em,$pwd) {
                  //$encryptedPw = md5($pwd);
                  //$profilepic = "images";// from the images folder
                  //$id = 1;
                  $date= date("Y-m-d");
                  echo "INSERT INTO users VALUES (NULL,'$un', '$pwd', '$name', '$em', '$phone', '$bday', '$gender'";
                  $result = mysqli_query($this->con, "INSERT INTO users VALUES ('$un', '$pwd', '$name', '$em', '$phone', '$bday', '$gender')");
                  return $result;
          }

    private function validateUsername($un) {
    	//echo "fncn called";
    if (strlen($un)>25 || strlen($un)<5) {
     
      array_push($this->errorarray,AConstants::$usernamechars);
    }
    $checUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username ='$un' ");
    if(mysqli_num_rows($checUsernameQuery)!=0)
    {
    	array_push($this->errorarray,AConstants::$usernametaken);
    	return;
    }
  }

  	private function validatefname($name) {
    if (strlen($name)>25 || strlen($name)<2) {
     
      array_push($this->errorarray,AConstants::$firstnamechars);
    }
  }
	/*private function validatelname($ln) {
    if (strlen($ln)>25 || strlen($ln)<2) {
     
      array_push($this->errorarray,AConstants::$lastnamechars);
    }
  } */
    private function validatemails($em,$em2) {
    if ($em != $em2) {
      array_push($this->errorarray,AConstants::$emailsdontmatch);
      return;
    }
    if(!filter_var($em, FILTER_VALIDATE_EMAIL)){ #checks for .com in mail 
     array_push($errorarray,Constants::$emailinvalid); 
      return;
    } 

   $checemailQuery = mysqli_query($this->con, "SELECT Email FROM users WHERE Email ='$em' ");
    if(mysqli_num_rows($checemailQuery)!=0)
    {
    	array_push($this->errorarray,AConstants::$emailexists);
    	return;
    }
  }
  private function validatepwd($pwd,$pwd2) {
    if($pwd!=$pwd2 )
    {
      array_push($this->errorarray,AConstants::$passwordsdontmatch);
      return;
    }
    if(preg_match('/[^A-Za-z0-9]/', $pwd)){
      #Just to make sure pwd can contain only letters & nos
    	array_push($this->errorarray,AConstants::$passwordnotalphanumeric);
      return;
    }
    if (strlen($pwd)>30 || strlen($pwd)<5) {
     
      array_push($this->errorarray,AConstants::$passwordchars);
    }
  }
   private function validatePhone($phone){

    if(strlen($phone)>10)
    {
      array_push($this->errorarray,AConstants::$numberlenghty);
    }
    
    if(strlen($phone)<10)
    {
      array_push($this->errorarray,AConstants::$numberlenghty);
    }


    if(preg_match('/[^0-9]/',$phone))
    {
      array_push($this->errorarray,AConstants::$phonenumberwrong);
    }
   } 


   }



 ?>