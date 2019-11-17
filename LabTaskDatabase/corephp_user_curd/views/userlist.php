<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<br>
	<br>

	<table border="1" >
		<tr>
			<th>UserName</th>
			<th>Password</th>
			<th>Type</th> 
			<th>Action</th> 
		</tr>
		<?php
			require_once('../php/functions.php');

			$count = getuser();

			for ($i=0; $i < count($count); $i++) { 
		?>
				<tr>
					<td><?= $count[$i]['username']?></td>
					<td><?= $count[$i]['password']?></td>
					<td><?= $count[$i]['type']?></td> 
					<td>
						<a href="edituser.php?username=<?= $count[$i]['username']?>">EDIT</a> |
						<a href="../php/deleteuser.php?username=<?= $count[$i]['username']?>">DELETE</a>
					</td> 
				</tr>
		<?php
					}
		?>
		
		
	</table>
</body>
</html>