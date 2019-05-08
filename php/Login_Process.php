<?php
	session_start();
	
	require_once('db_connection2.php');
	

	
	if(isset($_POST['Submit']))
	{
		
		
		echo $_POST['username'];
		
		$Username = $_POST['username'];
		$Password = $_POST['password'];
	
		$sql = "SELECT username, password FROM Users WHERE username = '$Username' ";
		$result = $connection->query($sql);
		
		
		
		
		
		if ($result->num_rows > 0) 
		{
			
			
			
			
			$row = $result->fetch_array(MYSQLI_ASSOC);
			
			
			
			
			
			echo strlen($row['password']);
			 if(password_verify($_POST['password'], $row['password'])) 
			 {
				$_SESSION['Username'] = $Username;
				
			
				header("Location: index.php");
			 }
			 else
			 {
				header("Location: login.php");
				
			 }
			 
		
		
		
		
	
		
		}
		else
			 {
				echo "Invalid password";
			 }
	}	

?>
