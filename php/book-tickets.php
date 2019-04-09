<?php
    $title = "Book Tickets";
    include("shared/header.php");
?>

<div class="main-container center">
    <!-- If user is logged out -->
    <!-- <p>To be able to book tickets, please sign in first.</p>
    <p><a href="login.php">Click here</a> to sign in.</p> -->

    <!-- If uer is logged in -->
    <div class="container">
        <label class="pull-left" for="forename"><b>First Name:</b></label>
        <input type="text" placeholder="First Name" name="forename" required>

        <label class="pull-left" for="surname"><b>Last Name:</b></label>
        <input type="text" placeholder="Last Name" name="surname" required>

        <label class="pull-left" for="email"><b>Email:</b></label>
        <input type="email" placeholder="Email" name="email" required>

        <label class="pull-left" for="contactno"><b>Contact Number:</b></label>
        <input type="tel" placeholder="Contact Number" name="contactno" pattern="[0-9]{5} [0-9]{6}" required>

        <!-- Address Form - House Name, street name, town/city, county, country, postcode -->
        <label class="pull-left" for="houseno"><b>House Number/Name:</b></label>
        <input type="text" placeholder="House Number/Name" name="houseno" required>

        <label class="pull-left" for=street""><b>Street Name:</b></label>
        <input type="text" placeholder="Street Name" name="street" required>

        <label class="pull-left" for="town"><b>Town/City:</b></label>
        <input type="text" placeholder="Town/City" name="town" required>

        <label class="pull-left" for="county"><b>County:</b></label>
        <input type="text" placeholder="County" name="county" required>

        <label class="pull-left" for="country"><b>Country:</b></label>
        <input type="text" placeholder="Country" name="country" required>

        <label class="pull-left" for="postcode"><b>Post Code:</b></label>
        <input type="text" placeholder="Post Code" name="postcode" required>

        <button type="submit" class="registerbtn">Next</button>
        <button type="button" class="cancelbtn pull-right">Clear</button>
    </div>
</div>

<?php
    include("shared/footer.php");
?>