<?php
	//session_start();
	// require("user_login.php");

	$response = [
        "status" => "fail",
    ];
	
	if(!empty( $_SESSION[$key])){
		$u_id = $_SESSION["id"];
    	$response["u_id"] = $u_id;
	}

	echo json_encode($response);

	// $_POST["u_id"];
	
?>