<?php

if (isset($_POST['submit'])) {
	$subject=$_POST['_subject'];
	$name=$_POST['name'];
	$mailFrom=$_POST['Phone'];
	$message=$_POST['text'];

	$mailTo="brunokralj2146@gmail.com";
	$headers="from: ".$mailFrom;
	$txt="you have received an email form ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: povratak.php?mailsend");

}