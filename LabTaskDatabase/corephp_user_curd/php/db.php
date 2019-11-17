<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'webproject');
		return $conn;
	}
?>