<?php

session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'schoolsportcarnivals');

/* Security Considerations
 * https://owasp.org/www-community/attacks/xss/
 */

$errors = [];

// Set the usernames for checking which account to go to
$sportsCoord = 'sportsCoordinator';
$marshal = 'marshal';
$teacher = 'teacher';
$public = 'publicSports';

if(isset($_POST['login-btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	//validation
	if (empty($username)) {
		$errors['username'] = "Username required";
	}
	if (empty($password)) {
		$errors['password'] = "Password required";
	}

	//if no errors try to create a connection
	if( count($errors) === 0 ) {
		$conn = mysqli_connect(DB_HOST, $username, $password, DB_NAME);

		if (mysqli_connect_errno ())
		{
			http_response_code(503);
			$errors['db_connection'] = "Failed to connect to MySQL: " . mysqli_connect_error();
		} else if ($username == $sportsCoord){
			//login user
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header('location: ../sportsCoord.php');
			exit();
		} else if ($username == $marshal){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header('location: ../marshal.php');
			exit();
		} else if ($username == $teacher){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header('location: ../teacher.php');
			exit();
		} else {
			$msg = "Your username isn't linked yet";
    	echo $msg;
			exit();
		}
	}
}
