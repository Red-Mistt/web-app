<?php
session_start();
?>
<!doctype html>
<html>
    <head>
        <title>Sports Camp | <?php echo $title;?></title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree" rel="stylesheet">
        <!-- Font Awesome Plugin -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
            crossorigin="anonymous">
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="css/header.css"/>
        <link rel="stylesheet" type="text/css" href="css/slideshow.css"/>
        <link rel="stylesheet" type="text/css" href="css/footer.css"/>
        <link rel="stylesheet" type="text/css" href="css/forms.css"/>
        <link rel="stylesheet" type="text/css" href="css/gallery.css"/>
        <link rel="stylesheet" type="text/css" href="css/staff.css"/>
        <link rel="stylesheet" type="text/css" href="css/timetable.css"/>
        <!-- Javascript -->
        <script type="text/javascript" src="js/dropdown.js"></script>
        <script type="text/javascript" src="js/slideshow.js"></script>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="assets/images/SportsCampLogoCrop.png">
    </head>

    <body>
        <header class="navbar">
            <div class="header">
                <div class="column left">
                    <img src="assets/images/SportsCampLogoCrop.png" class="logo"/>
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
                    <li class="<?php if($title=="Home"){?>active<?php }?>"><a href="/index.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="php/book-tickets.php"><i class="fas fa-ticket-alt"></i></a></li>
                    <li><a href="php/location.php"><i class="fas fa-map-marker-alt"></i></a></li>
                    <li><a href="php/timetable.php"><i class="fas fa-calendar-day"></i></a></li>
                    <li><a href="php/gallery.php"><i class="fas fa-camera"></i></a></li>
                    <li><a href="php/login.php"><i class="fas fa-user"></i></a></li>
                    <li><a href="php/staff-info.php"><i class="fas fa-users"></i></a></li>
                </ul>
            </div>
        </header>