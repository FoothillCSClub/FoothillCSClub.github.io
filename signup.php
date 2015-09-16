<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name='description' content='Foothill College Computer Science Club - information and discussions.'>
    <meta name='keywords' content='Foothill, college, CS, computer science, club'>
    <title>CS Club</title>
    <link rel='icon' type='image/icon' href='favicon.ico'>
    <link rel='stylesheet' type='text/css' href='common.css'>
    <link rel='stylesheet' type='text/css' href='signup.css'>
</head>
<body>
    <div style="text-align: center;">

<?php
	$email = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
	$name = $_REQUEST['name'];

	if (! $email || strlen($email) > 50 || strlen($name) > 50) {
		echo (
			"<h1 class='error'>\n".
			"Invalid name or email address.\n".
			"<br>\n".
			"Try again please.\n".
			"</h1>\n"
		);
	} else {
		if ( ! ($fh = fopen("../members.list", "a")) || ! fwrite($fh, $_REQUEST['name'].":".$_REQUEST['email']."\n")) {
			echo (
				"<h1 class='error'>\n".
				"Oh Shit!\n".
				"</h1>\n".
				"<br>\n".
				"<h3 class='error'>\n".
				"Something bad has happend!\n".
				"<br>\n".
				"Please find Grond (Samuel), and beat him over the head with a frying pan for his supidity.\n".
				"</h3>\n"
			);
		} else {
			echo (
				"<h1 class='alls-well'>\n".
				"Thank You...\n".
				"</h1>\n".
				"<h3 class='alls-well'>\n".
				"You've just subscribed yourself to our mailing list.\n".
				"<br>\n".
				"Now we can spam you. (NOT!)\n".
				"<p><p>\n".
				"Have a nice day, NSA\n".
				"</h3>\n"
			);

		}
	}
?>

	Back to start...
	<a href="index.html" style="font-size: 5em; margin: 0px; font-family: monospace; font-style: normal;">
	    <blockquote style="margin: 0px;"><-</blockquote>
	</a>
    </div>
</body>
