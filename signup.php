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
        <h1> Sign up for the CS Club weekly newsletter </h1>
        <div id='signupform'>
            <form method='POST' action='signup.php'>
                <input type='name' name='name' size='20' maxlength='50'
                    onfocus="if( this.value==this.defaultValue ) this.value='';"
                    onblur="if ( this.value=='' ) this.value=this.defaultValue;"
                    value='Your Name'>
                <br>
                <input type='text' name='email' size='20' maxlength='50'
                    onfocus="if( this.value==this.defaultValue ) this.value='';"
                    onblur="if ( this.value=='' ) this.value=this.defaultValue;"
                    value='Email Address'>
                <br>
                <input type='submit' value='Sign Up!'>
            </form>
        </div>
        <div id='signup-bottom-nav'>
            [ <a href='.'>Home</a> ]
        </div>
    </div>
</body>
</html>
