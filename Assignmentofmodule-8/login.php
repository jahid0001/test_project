<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Check if both fields are filled
	if(empty($_POST['email']) || empty($_POST['password'])) {
		echo "Both email and password are required.";
		exit();
	}

	// Check if login credentials are valid (e.g. by querying the database)
	// For this example, let's assume a user with email "test@example.com" 
	// and password "password" is valid
	if($_POST['email'] == 'test@example.com' && $_POST['password'] == 'password') {
		// Redirect to welcome page with first name in URL parameter
		$first_name = 'John'; // Get first name from database
		header('Location: welcome.php?first_name=' . urlencode($first_name));
		exit();
	} else {
		// Invalid login credentials
		echo "Invalid login credentials.";
		exit();
	}


}
?>


