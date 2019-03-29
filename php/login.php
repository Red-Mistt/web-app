<?php
    $title = "Login";
    include("shared/header.php");
?>

<div class="main-container forms">
    <div class="container">
        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>
        <label class="pull-right">
            <input type="checkbox" name="staff-login"> I am a Staff Member
        </label>
    </div>

    <div class="container">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    <br />
    <p>Haven't yet created an account? <a href="register.php">Click here</a> to register.</p>
</div>

<?php
    include("shared/footer.php");
?>