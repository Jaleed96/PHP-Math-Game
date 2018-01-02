<?php 
	session_start();
	$_SESSION['result'];
	$_SESSION['message'];
	$_SESSION['answer'] = $_POST[input];
	$_SESSION["score"];
	$_SESSION["attempts"];
	if ($_SESSION['operation'] == 0) {
		$_SESSION['result'] = $_SESSION['num1'] + $_SESSION['num2'];
	} else if ($_SESSION['operation'] == 1) {
		$_SESSION['result'] = $_SESSION['num1'] - $_SESSION['num2'];
	}

	if ($_SESSION['result'] == $_SESSION['answer']) {
		$_SESSION['message'] = "<p class='green-text'>Correct answer</p>";
		$_SESSION['score'] += 1;
		$_SESSION['attempts'] += 1;
	} else if ($_SESSION['result'] != $_SESSION['answer']) {
		$_SESSION['message'] = "<p class='red-text'>Wrong answer</p>";
		$_SESSION['attempts'] += 1;
	}
   	header( 'Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Processing...</title>
</head>
<body>
	<a href="index.php">Click to go back</a>
</body>
</html>