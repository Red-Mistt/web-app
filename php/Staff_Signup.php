<?php
require_once("db_connection2.php");
session_start();

echo "<pre>\$_POST = ",PRINT_r($_POST),"</pre>";

function is_post_request() {
	return $_SERVER['REQUEST_METHOD'] == 'POST';
}
if(is_post_request()){
	
	
		$details = [];
		$details['Susername'] = isset($_POST['Susername']) ? $_POST['Susername'] : '';
		$details['Spassword'] = isset($_POST['Spassword']) ? $_POST['Spassword'] : '';
		$details['Spassword_confirmation'] = isset($_POST['Spassword_confirmation']) ? $_POST['Spassword_confirmation'] : '';
		$details['Sfirst_name'] = isset($_POST['Sfirst_name']) ? $_POST['Sfirst_name'] : '';
		$details['Slast_name'] = isset($_POST['Slast_name']) ? $_POST['Slast_name'] : '';
		$details['Semail'] = isset($_POST['Semail']) ? $_POST['Semail'] : '';
		$details['Snationality'] = isset($_POST['Snationality']) ? $_POST['Snationality'] : '';
		
		
	
		
	if($details['Spassword'] == $details['Spassword_confirmation'])
	{
		echo "Your passwords match";
		
		
		$Username = $details['Susername'];
		$U_Password = $details['Spassword'];
		$U_Password2 = $details['Spassword_confirmation'];
		$Forename = $details['Sfirst_name'];
		$Surname = $details['Slast_name'];
		$Email = $details['Semail'];
		$Nationality = $details['Snationality'];
		
		
		$hash = password_hash( $U_Password, PASSWORD_BCRYPT );
		
		$query = "INSERT INTO Customer(Susername, Spassword, Sfirst_name, Slast_name, Semail, Snationality) VALUES ('$Username ', '$hash', '$Forename', '$Surname', '$Email', '$Nationality')";
		
		$result = mysqli_query($connection, $query);
		
		if(($result) >0)
		{
			echo"i am a golden god";
			
		}
	
		header("Location:" . "index.php");
		
	
	}
	else
	{
		echo "Please make sure your passwords are the same!";
		
		
		
	}
	
	
	

	
}
?>