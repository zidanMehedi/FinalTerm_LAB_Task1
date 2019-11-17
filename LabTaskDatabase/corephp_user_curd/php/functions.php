<?php
	require_once('db.php');

	function validate($uname, $password){

		$conn = getConnection();
		
		$sql = "select * from user where username='{$uname}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return count($user);
	}


	function register($uname, $password, $email){

		$conn = getConnection();
		$sql = "insert into user values('{$uname}','{$password}', '{$email}', 0)";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}

	function getuser()
	{
		$conn = getConnection();
		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);
		while($user = mysqli_fetch_assoc($result))
		{
			$users[] = $user;
		}

		return $users;
	}

	function getinfo($username)
	{
		$conn = getConnection();
		$sql = "select * from user where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function deleteuser($username)
	{
		$conn = getConnection();
		$sql = "delete from user where username='{$username}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}
		else
			return false;
	}

	function update($username, $email, $password)
	{
		$conn = getConnection();
		$sql = "update user set email='{$email}',password='{$password}' where username='{$username}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}
		else
			return false;
	}



?>