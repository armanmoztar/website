<?php>

if <isset($_POST)['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	$mailTO = "armanmoztar@outlook.com";
	$headers = "From: ".$email;
	$txt = "You have recieved an email from ".$name.".\n\n".$message;


	mail($mailTO, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}
