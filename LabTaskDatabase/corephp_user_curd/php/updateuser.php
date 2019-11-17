<?php
	//session_start();
	require_once('functions.php');
			
		if(isset($_REQUEST['save'])){
			$username = $_REQUEST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
		if(empty($username)==true || empty($email)==true || empty($password)==true)
		{

			echo "Empty Informations";
		}
		else
		{
			$count = update($username, $email, $password);

			if(!$count) {
				header('location: ../views/edituser.php');
			}

			else {
				header('location: ../views/userlist.php');
			}
		}
	}

	else
		header('location: ../views/index.php');
?>