<?php
    $title = "Staff Login";
    include("shared/header-no-menu.php");
?>

<div class="main-container forms">
    <div class="container">
		<form action="Staff_Login_Process.php" method="post">
			<label for="username"><b>Username:</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="password"><b>Password:</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit" class="registerbtn">Login</button>
			<button type="button" class="cancelbtn pull-right" onclick="goBack()">Back</button>
		</form>
	</div>

    <div class="container">
        <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
</div>

<?php
    include("shared/footer.php");
?>

<!-- Scripts -->
<script>
    function goBack() 
    {
        window.history.back();
    }
</script>