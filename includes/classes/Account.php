<?php
	class Account{

		private $con;
		private $errorArray;

		public function __construct($con){
			$this->con = $con;

			//Lưu ý cái này
			$this->errorArray = array();
		}

		//login cần lấy gì??
		public function login($un, $pw){
			$pw = md5($pw);
			$query = mysqli_query($this->con, "SELECT  FROM users WHERE ");

			if(mysqli_num_rows($query) == 1){
				return true;
			}
			else{
				
				//Để có thể gọi biến trong lớp Constrants thì Ở Register.php phải include Constrants.php
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}
		}


		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
			$this->validateUsername($un);
			$this->validateFirstname($fn);
			$this->validateLastname($ln);
			$this->validateEmail($em, $em2);
			$this->validatePassword($pw, $pw2);

			//Check errorArray is empty?
			if (){
				//Insert into DB
				return $this->insertUserDetails( $un, $fn, $ln, $em, $pw );
			}
			else{
				return false;
			}

		}

		public function getError($error){
			//check xem trong errorArray có hiện error nào k?Nếu k có error =""
			if (){
				$error ="";
			}
			return "<span class='errorMessage'>$error</span>";
		}

		//Add to DB
		private function insertUserDetails( $un, $fn, $ln, $em, $pw ){
			$encryptedPw = md5($pw);
			$profilePic = "assets/images/profilePics/profilepic.jpg";
			$date = date("Y-m-d");

			// insert VALUES to DB
			$result = mysqli_query($this->con, "INSERT INTO users VALUES ()");

			return $result;
		}

		private function validateUsername($un){
			
			if() {
				array_push($this->errorArray, Constants::$usernameCharacters );
				return;	
			}

			//Check if username exsits
			$checkUsernameQuery = mysqli_query($this->con, "SELECT  FROM users WHERE ");
			if(){
				array_push($this->errorArray, Constants::$usernameTaken);
				return;
			}

		}

		private	function validateFirstname($fn){
			if() {
				array_push($this->errorArray, Constants::$firstnameCharacters);
				return;	
			}
		}

		private	function validateLastname($ln){
			if() {
				array_push($this->errorArray, Constants::$lastnameCharacters);
				return;	
			}
		}

		//check xem email đã nhập có giống email đã nhập lại lần 2
		private	function validateEmail($em, $em2){
			if () {
				array_push($this->errorArray, Constants::$emailsDoNotMatch);
				return;	
			}

			if( !filter_var($em, FILTER_VALIDATE_EMAIL) ){
				array_push($this->errorArray, Constants::$emailsInvalid);
				return;	
			}

			//Check that email hasn't being used
			$checkEmailQuery = mysqli_query($this->con, "SELECT  FROM users WHERE ");
			if(){
				array_push($this->errorArray, Constants::$emailsTaken);
				return;
			}
		}

		private	function validatePassword($pw, $pw2){
			if () {
				array_push($this->errorArray, Constants::$passwordsDoNotMatch);
				return;	
			}

			if(  ){
				array_push($this->errorArray, Constants::$passwordsNotAlphanumeric);
				return;	
			}

			if() {
				array_push($this->errorArray, Constants::$passwordsCharacter);
				return;	
			}
		}
	}
?>