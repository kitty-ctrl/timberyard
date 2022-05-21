<?php
include 'config.php';

session_start();

if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password  = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT * FROM login WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_array($result);
		if ($row['password'] == $password) {
			header("Location: index1.html");
		} else {
			echo "<script>alert('Wrong password Please check your password!');</script>";
		}
	} else {
		echo "<script>alert('User does not exist please SignUp!')</script>";
		echo "<script>location.replace('signuppage.php');</script>";
	}
}
?>

<link rel="stylesheet" href="logcss.css" />
<div id="background1">
	<div class="login">
		<br /><br /><br />
		<h1 align="center" style="color: purple;">TIMBERYARD</h1><br />
		<div>
			<img src="images/logo.png" style="margin-left: 125px;height:115px;width:125px;" /><br /><br /><br />
		</div>
		<form enctype="multipart/form-data" method="post" role="form">
			<div class="fields">
				<div class="email">
					<label>

						<input type="email" id="email" name="email" class="e-input" value="" placeholder=" E-mail" required>
					</label><br><br>
				</div><br /><br />
				<div class="email">
					<label>

						<input type="password" name="password" class="pass-input" value="" placeholder=" Password" required>
					</label><br><br>
				</div>
				<br /><br />

				<button name="login" type="login" placeholder="login" class="signin-button" onclick="handlel()">Login</button> <br>
			</div>


		</form>
		<div class="link">
			Don't have account? <a href="signuppage.php">SignUp Now</a>
		</div>

	</div>
</div>
<script>
	function handlel() {
		const email = document.getElementById("email").value;
		localStorage.setItem("EMAIL", email);
		return;
	}
</script>
</body>

</html>