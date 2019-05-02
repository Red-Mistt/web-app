<!doctype html>
<html>

<head>
        <title>Sports Camp | Book Tickets</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree" rel="stylesheet">
        <!-- Font Awesome Plugin -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/slideshow.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../css/forms.css">
        <link rel="stylesheet" type="text/css" href="../css/gallery.css">
        <link rel="stylesheet" type="text/css" href="../css/staff.css">
        <link rel="stylesheet" type="text/css" href="../css/timetable.css">
        <!-- Javascript -->
        <script type="text/javascript" src="../js/dropdown.js"></script>
        <script type="text/javascript" src="../js/slideshow.js"></script>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.png">
    </head>
	<body>
        <header class="navbar">
            <div class="header">
                <div class="column left">
                    <p class="logo"><a href="../index.php">LOGO</a></p>
                </div>
                <div class="column middle">
                    <h1>Sports Camp</h1>
                </div>
                <div class="column right">
                    <i class="fas fa-bars dropbtn" onclick="dropdown()"></i>
                </div>
            </div>
            
            <div id="dropdownNav" class="dropdown-content">
                <ul>
                    <li class=""><a href="../index.php"><i class="fas fa-home"></i></a></li>
                    <li class="active"><a href="book-tickets.php"><i class="fas fa-ticket-alt"></i></a></li>
                    <li class=""><a href="location.php"><i class="fas fa-map-marker-alt"></i></a></li>
                    <li class=""><a href="timetable.php"><i class="fas fa-calendar-day"></i></a></li>
                    <li class=""><a href="gallery.php"><i class="fas fa-camera"></i></a></li>
                    <li class=""><a href="login.php"><i class="fas fa-user"></i></a></li>
                    <li class=""><a href="staff-info.php"><i class="fas fa-users"></i></a></li>
                </ul>
            </div>
        </header>
<div class="main-container center">
    <!-- If user is logged out -->
    <!-- <p>To be able to book tickets, please sign in first.</p>
    <p><a href="login.php">Click here</a> to sign in.</p> -->

    <!-- If uer is logged in -->
	
    <div class="container">
	<form action="book_tickets_process.php" method="post">
	 <tr>
			 <select name="LeaveDate" required="true">
			  <option value="">Leave Date</option>
				<optgroup label="Monday">
				  <option value="Monday;09:00">09:00</option>
				  <option value="Monday;10:00">10:00</option>
				  <option value="Monday;11:00">11:00</option>
				  <option value="Monday;12:00">12:00</option>
				  <option value="Monday;13:00">13:00</option>
				  <option value="Monday;14:00">14:00</option>
				  <option value="Monday;15:00">15:00</option>
				  <option value="Monday;16:00">16:00</option>
				 </optgroup>
				 
				  
				<optgroup label="Tuesday">
				  <option value="Tuesday;09:00">09:00</option>
				  <option value="Tuesday;10:00">10:00</option>
				  <option value="Tuesday;11:00">11:00</option>
				  <option value="Tuesday;12:00">12:00</option>
				  <option value="Tuesday;13:00">13:00</option>
				  <option value="Tuesday;14:00">14:00</option>
				  <option value="Tuesday;15:00">15:00</option>
				  <option value="Tuesday;16:00">16:00</option>
				 </optgroup>
				 
				  <optgroup label="Wednesday">
				  <option value="Wednesday;09:00">09:00</option>
				  <option value="Wednesday;10:00">10:00</option>
				  <option value="Wednesday;11:00">11:00</option>
				  <option value="Wednesday;12:00">12:00</option>
				  <option value="Wednesday;13:00">13:00</option>
				  <option value="Wednesday;14:00">14:00</option>
				  <option value="Wednesday;15:00">15:00</option>
				  <option value="Wednesday;16:00">16:00</option>
				 </optgroup>
				 
				 <optgroup label="Thursday">
				  <option value="Thursday;09:00">09:00</option>
				  <option value="Thursday;10:00">10:00</option>
				  <option value="Thursday;11:00">11:00</option>
				  <option value="Thursday;12:00">12:00</option>
				  <option value="Thursday;13:00">13:00</option>
				  <option value="Thursday;14:00">14:00</option>
				  <option value="Thursday;15:00">15:00</option>
				  <option value="Thursday;16:00">16:00</option>
				 </optgroup>
				 
				 <optgroup label="Friday">
				  <option value="Friday;09:00">09:00</option>
				  <option value="Friday;10:00">10:00</option>
				  <option value="Friday;11:00">11:00</option>
				  <option value="Friday;12:00">12:00</option>
				  <option value="Friday;13:00">13:00</option>
				  <option value="Friday;14:00">14:00</option>
				  <option value="Friday;15:00">15:00</option>
				  <option value="Friday;16:00">16:00</option>
				 </optgroup>
				 
				 <optgroup label="Saturday">
				  <option value="Saturday;09:00">09:00</option>
				  <option value="Saturday;10:00">10:00</option>
				  <option value="Saturday;11:00">11:00</option>
				  <option value="Saturday;12:00">12:00</option>
				  <option value="Saturday;13:00">13:00</option>
				  <option value="Saturday;14:00">14:00</option>
				  <option value="Saturday;15:00">15:00</option>
				  <option value="Saturday;16:00">16:00</option>
				 </optgroup>
				 
				 <optgroup label="Sunday">
				  <option value="Sunday;09:00">09:00</option>
				  <option value="Sunday;10:00">10:00</option>
				  <option value="Sunday;11:00">11:00</option>
				  <option value="Sunday;12:00">12:00</option>
				  <option value="Sunday;13:00">13:00</option>
				  <option value="Sunday;14:00">14:00</option>
				  <option value="Sunday;15:00">15:00</option>
				  <option value="Sunday;16:00">16:00</option>
				 </optgroup>
				 
			   </select>
			   
			   <select name="ReturnDate" required="true">
				  <option value="">Return Date</option>
					<optgroup label="Monday">
					  <option value="Monday;09:00">10:00</option>
					  <option value="Monday;10:00">11:00</option>
					  <option value="Monday;11:00">12:00</option>
					  <option value="Monday;12:00">13:00</option>
					  <option value="Monday;13:00">14:00</option>
					  <option value="Monday;14:00">15:00</option>
					  <option value="Monday;15:00">16:00</option>
					  <option value="Monday;16:00">17:00</option>
					 </optgroup>
					 
					  
					<optgroup label="Tuesday">
					  <option value="Tuesday;09:00">10:00</option>
					  <option value="Tuesday;10:00">11:00</option>
					  <option value="Tuesday;11:00">12:00</option>
					  <option value="Tuesday;12:00">13:00</option>
					  <option value="Tuesday;13:00">14:00</option>
					  <option value="Tuesday;14:00">15:00</option>
					  <option value="Tuesday;15:00">16:00</option>
					  <option value="Tuesday;16:00">17:00</option>
					 </optgroup>
					 
					  <optgroup label="Wednesday">
					  <option value="Wednesday;09:00">10:00</option>
					  <option value="Wednesday;10:00">11:00</option>
					  <option value="Wednesday;11:00">12:00</option>
					  <option value="Wednesday;12:00">13:00</option>
					  <option value="Wednesday;13:00">14:00</option>
					  <option value="Wednesday;14:00">15:00</option>
					  <option value="Wednesday;15:00">16:00</option>
					  <option value="Wednesday;16:00">17:00</option>
					 </optgroup>
					 
					 <optgroup label="Thursday">
					  <option value="Thursday;09:00">10:00</option>
					  <option value="Thursday;10:00">11:00</option>
					  <option value="Thursday;11:00">12:00</option>
					  <option value="Thursday;12:00">13:00</option>
					  <option value="Thursday;13:00">14:00</option>
					  <option value="Thursday;14:00">15:00</option>
					  <option value="Thursday;15:00">16:00</option>
					  <option value="Thursday;16:00">17:00</option>
					 </optgroup>
					 
					 <optgroup label="Friday">
					  <option value="Friday;09:00">10:00</option>
					  <option value="Friday;10:00">11:00</option>
					  <option value="Friday;11:00">12:00</option>
					  <option value="Friday;12:00">13:00</option>
					  <option value="Friday;13:00">14:00</option>
					  <option value="Friday;14:00">15:00</option>
					  <option value="Friday;15:00">16:00</option>
					  <option value="Friday;16:00">17:00</option>
					 </optgroup>
					 
					 <optgroup label="Saturday">
					  <option value="Saturday;09:00">10:00</option>
					  <option value="Saturday;10:00">11:00</option>
					  <option value="Saturday;11:00">12:00</option>
					  <option value="Saturday;12:00">13:00</option>
					  <option value="Saturday;13:00">14:00</option>
					  <option value="Saturday;14:00">15:00</option>
					  <option value="Saturday;15:00">16:00</option>
					  <option value="Saturday;16:00">17:00</option>
					 </optgroup>
					 
					 <optgroup label="Sunday">
					  <option value="Sunday;09:00">10:00</option>
					  <option value="Sunday;10:00">11:00</option>
					  <option value="Sunday;11:00">12:00</option>
					  <option value="Sunday;12:00">13:00</option>
					  <option value="Sunday;13:00">14:00</option>
					  <option value="Sunday;14:00">15:00</option>
					  <option value="Sunday;15:00">16:00</option>
					  <option value="Sunday;16:00">17:00</option>
					 </optgroup>
				 
			   </select>
			</tr>
	
	
        <label class="pull-left" for="No_of_Tickets"><b>Number of tickets:</b></label>
        <input type="text" placeholder="No_of_Tickets" name="No_of_Tickets" required="">

		<label class="pull-left" for="contactno"><b>Contact Number:</b></label>
        <input type="text" placeholder="Contact Number" name="contactno" required="">

        <!-- Address Form - House Name, street name, town/city, county, country, postcode -->
        <label class="pull-left" for="houseno"><b>House Number/Name:</b></label>
        <input type="text" placeholder="House Number/Name" name="houseno" required="">

        <label class="pull-left" for="street&quot;&quot;"><b>Street Name:</b></label>
        <input type="text" placeholder="Street Name" name="street" required="">

        <label class="pull-left" for="town"><b>Town/City:</b></label>
        <input type="text" placeholder="Town/City" name="town" required="">

        <label class="pull-left" for="postcode"><b>Post Code:</b></label>
        <input type="text" placeholder="Post Code" name="postcode" required="">

        <button type="submit" class="registerbtn">Next</button>
        <button type="button" class="cancelbtn pull-right">Clear</button>
    </div>
</div>

<footer>
    <h4>Moray College UHI</h4>
    <h4>Email: example@uhi.ac.uk | Phone: 01343 810555</h4>
</footer></body>
</html>