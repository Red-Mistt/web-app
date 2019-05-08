<?php
require_once("db_connection2.php");
session_start();

echo "<pre>\$_POST = ",PRINT_r($_POST),"</pre>";

function is_post_request() {
	return $_SERVER['REQUEST_METHOD'] == 'POST';
}
if(is_post_request()){
		
		
		
		$details = [];
		$details['LeaveDate'] = isset($_POST['LeaveDate']) ? $_POST['LeaveDate'] : '';
		$details['ReturnDate'] = isset($_POST['ReturnDate']) ? $_POST['ReturnDate'] : '';
		$details['BookTicketNo'] = isset($_POST['No_of_Tickets']) ? $_POST['No_of_Tickets'] : '';
		$details['contactno'] = isset($_POST['contactno']) ? $_POST['contactno'] : '';
		$details['houseno'] = isset($_POST['houseno']) ? $_POST['houseno'] : '';
		$details['street'] = isset($_POST['street']) ? $_POST['street'] : '';
		$details['town'] = isset($_POST['town']) ? $_POST['town'] : '';
		$details['country'] = isset($_POST['country']) ? $_POST['country'] : '';
		$details['postcode'] = isset($_POST['postcode']) ? $_POST['postcode'] : '';
		
		
		list($Leave_Date, $Leave_Time) = explode(";",$LeaveDate);
		list($Return_Date, $Return_Time) = explode(";",$ReturnDate);
		
	$Username = $_SESSION['Username'];
	
	$query = "Select * From customer Where username = '$Username'";
	$result = $connection->query($query);
	
	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_array(MYSQLI_ASSOC);
		
		
		$Leave_Date = $Leave_Date;
		$Leave_Time = $Leave_Time;
		$Return_Date = $Return_Date;
		$Return_Time = $Return_Time;
		$BookTicketNo = $details['BookTicketNo'];
		$ContactNo = $details['contactno'];
		$HouseNo = $details['houseno'];
		$Street = $details['street'];
		$Town = $details['town'];
		$Country = $details['country'];
		$Postode = $details['postcode'];
		
		
		
		
		$query = "INSERT INTO Booking(BookTicketNo, BookContactNo, BookHouseNo, BookStreet, BookTown, BookCountry, BookPostcode) VALUES ('$Username ', '$hash', '$Forename', '$Surname', '$Email', '$Nationality')";
		
		$result = mysqli_query($connection, $query);
		
		
		
	
	}
	else
	{
		<script>
			function myFunction() 
			{
			  alert("Please Login first before booking tickets");
			}
		</script>
		
		
		header("Location: index.php");
		
	}
	
	
	

	
}
?>