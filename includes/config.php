<?php
	ob_start();

	session_start();

	//set time zone
	$timezone = date_default_timezone_set("Asia/Ho_Chi_Minh");

	//connect database
	//điền tên database mik đã tạo vô
	$con = mysqli_connect("localhost", "root","");

	if (mysqli_connect_errno()){
		echo "Failed to connect: ".mysqli_connect_errno();
	}


?>