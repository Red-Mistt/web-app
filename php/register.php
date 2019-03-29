<?php
    $title = "Register";
    include("shared/header.php");
?>

<div class="main-container forms">
    <div class="container">
        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="password_confirmation"><b>Password:</b></label>
        <input type="password" placeholder="Re-enter Password" name="password_confirmation" required>
        
        <label for="first_name"><b>First Name:</b></label>
        <input type="text" placeholder="Enter First Name" name="first_name" required>
        
        <label for="last_name"><b>Last Name:</b></label>
        <input type="text" placeholder="Enter Last Name" name="last_name" required>

        <label for="email"><b>Email:</b></label>
        <input type="email" placeholder="Enter Your Email" name="email" required>
        
        <label for="nationality"><b>Nationality:</b></label>
        <input type="text" placeholder="Enter Your Nationality" name="nationality" required>

        <button type="submit" class="registerbtn">Register</button>
        <button type="button" class="cancelbtn pull-right">Clear</button>
        <!-- <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>
        <label class="pull-right">
            <input type="checkbox" name="staff-login"> I am a Staff Member
        </label> -->
    </div>
    <br />
    <p class="center">Already have an account? <a href="login.php">Click here</a> to sign in.</p>
</div>

<?php
    include("shared/footer.php");
?>