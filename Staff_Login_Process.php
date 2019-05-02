<?php
	session_start();
	
	require_once('db_connection2.php');
	

	
	if(isset($_POST['Submit']))
	{
		
		
		echo $_POST['Susername'];
		
		$Username = $_POST['Susername'];
		$Password = $_POST['Spassword'];
	
		$sql = "SELECT Susername, Spassword FROM SUsers WHERE Susername = '$Username' ";
		$result = $connection->query($sql);
		
		
		
		
		
		if ($result->num_rows > 0) 
		{
			
			
			
			
			$row = $result->fetch_array(MYSQLI_ASSOC);
			
			
			
			
			
			echo strlen($row['Spassword']);
			 if(password_verify($_POST['Spassword'], $row['Spassword'])) 
			 {
				$_SESSION['SUsername'] = $Username;
				
			
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

