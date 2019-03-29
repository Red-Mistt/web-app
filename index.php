<?php
    $title = "Home";
    include("php/shared/index-header.php");
?>

<div class="main-container">
    <p>The Sports Camp offers booked adventure/wilderness sessions.</p>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="assets/images/sample01.jpg" style="width:100%">
        <div class="text">Sample One</div>
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="assets/images/sample02.jpg" style="width:100%">
        <div class="text">Sample Two</div>
        </div>
    
        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="assets/images/sample03.jpg" style="width:100%">
        <div class="text">Sample Three</div>
        </div>
    
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

        <p class="slideshow-column">Please be sure to have a look at out timetable for availability.</p>
        <p class="slideshow-column">
            Be sure to check out our <a href="php/gallery.php">gallery</a> for pictures of our staff
            and members taking part in our wilderness sessions.</p>
    </div>

    <?php
        include("php/shared/footer.php");
    ?>
</body>

<!-- Scripts -->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) 
    {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) 
    {
        showSlides(slideIndex = n);
    }

    function showSlides(n) 
    {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length)
        {
            slideIndex = 1
        } 
        if (n < 1) 
        {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) 
        {
            slides[i].style.display = "none"; 
        }
        for (i = 0; i < dots.length; i++) 
        {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block"; 
        dots[slideIndex-1].className += " active";
    }
</script>
</html>