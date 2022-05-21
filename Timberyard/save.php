<?php
include('config.php');
?>

<?php

if (isset($_POST['order'])) {

	$email = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$pin = $_POST['pin'];
	$phone = $_POST['phone'];
	$totalc = $_POST['totalc'];
	$method = $_POST['method'];
	$date = date("Y/m/d");
	date_default_timezone_set("Asia/Calcutta");
	$time = date("H:i:s");

	$teakp = $_POST['teakp'];
	$teakt = $_POST['teakt'];
	$teakc = $_POST['teakc'];


	$silverp = $_POST['silverp'];
	$silvert = $_POST['silvert'];
	$silverc = $_POST['silverc'];

	$sandalp = $_POST['sandalp'];
	$sandalt = $_POST['sandalt'];
	$sandalc = $_POST['sandalc'];


	$pinkp = $_POST['pinkp'];
	$pinkt = $_POST['pinkt'];
	$pinkc = $_POST['pinkc'];


	$blackp = $_POST['blackp'];
	$blackt = $_POST['blackt'];
	$blackc = $_POST['blackc'];

	$neemp = $_POST['neemp'];
	$neemt = $_POST['neemt'];
	$neemc = $_POST['neemc'];

	$bamboop = $_POST['bamboop'];
	$bamboot = $_POST['bamboot'];
	$bambooc = $_POST['bambooc'];

	$redp = $_POST['redp'];
	$redt = $_POST['redt'];
	$redc = $_POST['redc'];

	if ($totalc == 0) {
		echo "<script>alert('You have not ordered anything! REDIRECTING TO HOME PAGE')</script>";
		echo "<script>location.replace('index1.html');</script>";
		exit();
	}


	$query = "INSERT INTO customer VALUES ('$email', '$address', '$city', '$pin','$phone','$totalc','$date','$time');";
	$result = mysqli_query($conn, $query);


	if ($teakp) {
		$query = "INSERT INTO orders(email,date,time,pid,noitm,tpcost)  VALUES ('$email', '$date', '$time','$teakc','$teakp','$teakt')";
		$result = mysqli_query($conn, $query);
	}

	if ($silverp) {
		$query = "INSERT INTO orders VALUES ('$email', '$date', '$time','$silverc','$silverp','$silvert')";
		$result = mysqli_query($conn, $query);
	}

	if ($sandalp) {
		$query = "INSERT INTO orders VALUES ('$email', '$date', '$time','$sandalc','$sandalp','$sandalt')";
		$result = mysqli_query($conn, $query);
	}

	if ($pinkp) {
		$query = "INSERT INTO orders VALUES ('$email', '$date', '$time','$pinkc','$pinkp','$pinkt')";
		$result = mysqli_query($conn, $query);
	}

	if ($blackp) {
		$query = "INSERT INTO orders VALUES ('$email', '$date', '$time','$blackc','$blackp','$blackt')";
		$result = mysqli_query($conn, $query);
	}

	if ($neemp) {
		$query = "INSERT INTO orders VALUES ('$email', '$date', '$time','$neemc','$neemp','$neemt')";
		$result = mysqli_query($conn, $query);
	}


	if ($bamboop) {
		$query = "INSERT INTO orders VALUES ('$email', '$date', '$time','$bambooc','$bamboop','$bamboot')";
		$result = mysqli_query($conn, $query);
	}

	if ($redp) {
		$query = "INSERT INTO orders VALUES ('$email', '$date', '$time','$redc','$redp','$redt')";
		$result = mysqli_query($conn, $query);
	}

	if ($result) {
		echo "<script>alert('Orders have been placed successfully!');</script>";
		echo "<script>location.replace('index1.html');</script>";
	} else {
		echo "<script>alert('Something Went Wrong!')</script>";
	}
} else {
	echo "<script>alert('Something Went Wrong!')</script>";
}
?>