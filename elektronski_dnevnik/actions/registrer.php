<?php
include "connections.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $mysqli->query($sql);

$error = "";

if($result->num_rows > 0) {
	$error = "Ovaj username je vec zauzet";
} else {
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$result = $mysqli->query($sql);

	if($result->num_rows > 0) {
		$error = "Ovaj email je vec zauzet";
	} else {
		$password = password_hash($password, PASSWORD_BCRYPT);

		$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

		if($mysqli->query($sql)) {
			$_SESSION['message'] = "Nalog uspjesno kreiran";
			header('location:../index.php');
			} else{
				$error = "Greska pri kreiranju naloga";
			}
		}
	}
			echo $error;
