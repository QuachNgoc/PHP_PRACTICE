<?php

function sanitizeFormPassword($inputText){
	$inputText = strip_tags($inputText); 
	return $inputText;
}

function sanitizeFormUsername($inputText){
	$inputText = strip_tags($inputText); 
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormString($inputText){
	$inputText = sanitizeFormUsername($inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}



// if register Button is pressed
if( isset($_POST['registerButton']) ){
	//register Button was pressed, username get value from register 
	
	$username = sanitizeFormUsername( $_POST['username'] );
	//echo ~ print
	
	$firstname = sanitizeFormString( $_POST['firstname'] );
	$lastname = sanitizeFormString( $_POST['lastname'] );
	$email = sanitizeFormString( $_POST['email'] );
	$email2 = sanitizeFormString( $_POST['email2'] );
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($username, $firstname, $lastname, $email, $email2, $password, $password2);
	
	if ($wasSuccessful) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: mission-complete.php");
	}
}

?>