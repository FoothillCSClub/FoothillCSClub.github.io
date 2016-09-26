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
    <div id='signup-container'>

<?php
	$issubmit = 0;
	if (
		array_key_exists('email', $_REQUEST) &&
		strlen($_REQUEST['email']) > 0 &&
		array_key_exists('name', $_REQUEST) &&
		strlen($_REQUEST['name']) > 0
	) {
		$issubmit = 1;

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
			if (
				!($fh = fopen("/var/spool/subscription-queue/csclub-announcements", "a")) ||
				!flock($fh, LOCK_EX) ||
				!fwrite($fh, "$name <$email>\n") ||
				!flock($fh, LOCK_UN) ||
				!fclose($fh)
			) {
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
				echo ("
<script type='text/javascript'>
    setTimeout(redirectPage, 20000)

    function redirectPage() {
        location.assign(\"signup.php\")
    }
</script>
<h1 class='alls-well'>
    Thank You...
</h1>
<h3 class='alls-well'>
    You've just subscribed yourself to our mailing list.
    <br>
    Now we can spam you. (NOT!)
    <p><p>
    Have a nice day, NSA
</h3>
				");

			}
		}
	} else {
		echo("
<h1> Sign up for the CS Club weekly newsletter </h1>
<div id='signupform'>
    <form method='POST' action='signup.php'>
        <input type='name' name='name' size='20' maxlength='50'
            onfocus=\"if( this.value==this.defaultValue ) this.value='';\"
            onblur=\"if ( this.value=='' ) this.value=this.defaultValue;\"
            value='Your Name'>
        <br>
        <input type='text' name='email' size='20' maxlength='50'
            onfocus=\"if( this.value==this.defaultValue ) this.value='';\"
            onblur=\"if ( this.value=='' ) this.value=this.defaultValue;\"
            value='Email Address'>
        <br>
        <input type='submit' value='Sign Up!'>
    </form>
</div>
		");
	}
	echo ("
<div id='signup-bottom-nav'>
    [ <a href='.'>Home</a>". (($issubmit) ? " | <a href='signup.php'>Signup Sheet</a>" : "") ." ]
</div>
	");
?>
    </div>
</body>
