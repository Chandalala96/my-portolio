<?php 

if(isset($_POST['contact'])) {
	$to = "chandalala96@gmail.com";
	$headers = "From:" . $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$text = "You have recieved an email from". $_POST["email"] .".\n\n".$message;


 mail($to,$subject,$text,$headers);
 header("Location: index.php?sent=true");
}

if(isset($_POST['contact1'])) {
	$to = "chandalala96@gmail.com";
	$headers = "From:" . $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$text = "You have recieved an email from". $_POST["email"] .".\n\n".$message;


 mail($to,$subject,$text,$headers);
 header("Location: about.php?sent=true");
}

if(isset($_POST['contact2'])) {
	$to = "chandalala96@gmail.com";
	$headers = "From:" . $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$text = "You have recieved an email from". $_POST["email"] .".\n\n".$message;


 mail($to,$subject,$text,$headers);
 header("Location: projects.php?sent=true");
}