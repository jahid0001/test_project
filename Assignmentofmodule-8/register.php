<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Check if all fields are filled
	if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
		echo "All fields are required.";
		exit();
	}

	// Check if email is valid
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email address.";
		exit();
	}

	// Check if password and confirm password match
	if($_POST['password'] != $_POST['confirm_password']) {
		echo "Passwords do not match.";
		exit();
	}

	// Registration successful
	// Save user information to database
	echo "Registration successful!";
}
?>
