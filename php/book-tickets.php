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
        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <button type="submit">submit</button>
    </div>
</div>

<?php
    include("shared/footer.php");
?>