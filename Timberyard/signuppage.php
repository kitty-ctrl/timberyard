<?php
include('config.php');
session_start();
if (isset($_POST['signup'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['confirm_password']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM login WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			echo "<script>alert('User already exist!');</script>";
			if ($conn->query($sql) == TRUE) {
				echo "<script>location.replace('signuppage.php');</script>";
			} else {
				echo "<script>alert('There was an Error!')<script>" . $sql . "<br>" . $conn->error;
			}
		} else {
			$sql = "INSERT INTO login (fname, lname, email, password) VALUES ('$fname','$lname','$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registration Completed!');</script>";
				echo "<script>location.replace('loginpage.php');</script>";
			} else {
				echo "<script>alert('Something Went Wrong!')</script>";
			}
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>


<link rel="stylesheet" href="logcss.css" />
<div id="background1">
	<div class="signu">
		<br />
		<h1 style="color: purple;padding-left:4%;">Sign Up</h1><br /><br />

		<form enctype="multipart/form-data" method="post" role="form">
			<div class="fields1" style="display: flex;">
				<div class="email" style="width:45%;">
					<label>
						<input style="width: 80%;" type="Firstname" name="fname" value="" placeholder="Firstname" required>
					</label>
				</div>
				<div style="padding-left: 4%;">
					<div class="email" style="width:130%;padding-top:3%;padding-left:4%;">
						<label>
							<input style="width: 80%;" type="Lastname" name="lname" value="" placeholder="Lastname" required>
						</label>
						<br /><br />
					</div>
				</div>
				<br /><br />
			</div>
			<br />
			<div class="fields">
				<div class="email" style="width: 75%;padding-bottom:2%">
					<input type="email" name="email" value="" placeholder="E-mail" required />
				</div>
				<br />
				<div class="email" style="width: 75%;padding-bottom:2%">
					<input type="password" name="password" value="" placeholder="Password" minlength="8" maxlength="16" required />
				</div>
				<br />
				<div class="email" style="width: 75%;padding-bottom:2%">
					<input type="password" name="confirm_password" value="" placeholder="Confirm Password" required />
				</div>

				<br />
				<h5 style="font-family: 'Roboto', sans-serif; padding-left:3%;font-weight:lighter">* I agree to the terms and conditions and privacy policy</h5>
				<br />
				<div align="center">
					<button name="signup" type="submit" placeholder="signup" class="signup-button">SignUp</button> <br>
				</div>
		</form>
		<div class="link">
			Already have account? <a href="loginpage.php">Login Now</a>
		</div>

	</div>
</div>
</body>

</html>