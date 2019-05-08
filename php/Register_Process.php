<?php
require_once("db_connection2.php");
session_start();

echo "<pre>\$_POST = ",PRINT_r($_POST),"</pre>";

function is_post_request() {
	return $_SERVER['REQUEST_METHOD'] == 'POST';
}
if(is_post_request()){
	
	
		$details = [];
		$details['username'] = isset($_POST['username']) ? $_POST['username'] : '';
		$details['password'] = isset($_POST['password']) ? $_POST['password'] : '';
		$details['password_confirmation'] = isset($_POST['password_confirmation']) ? $_POST['password_confirmation'] : '';
		$details['first_name'] = isset($_POST['first_name']) ? $_POST['first_name'] : '';
		$details['last_name'] = isset($_POST['last_name']) ? $_POST['last_name'] : '';
		$details['email'] = isset($_POST['email']) ? $_POST['email'] : '';
		$details['nationality'] = isset($_POST['nationality']) ? $_POST['nationality'] : '';
		
		
	
		
	if($details['password1'] == $details['password2'])
	{
		echo "Your passwords match";
		
		
		$Username = $details['username'];
		$U_Password = $details['password'];
		$U_Password2 = $details['password_confirmation'];
		$Forename = $details['first_name'];
		$Surname = $details['last_name'];
		$Email = $details['email'];
		$Nationality = $details['nationality'];
		
		
		$hash = password_hash( $U_Password, PASSWORD_BCRYPT );
		
		$query = "INSERT INTO Customer(username, password, first_name, last_name, email, Nationality) VALUES ('$Username ', '$hash', '$Forename', '$Surname', '$Email', '$Nationality')";
		
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