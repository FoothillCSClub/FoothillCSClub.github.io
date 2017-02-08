<!DOCTYPE html>
<html>
    <head>
        <title> Owl Hacks 2017: RSVP </title>
        <meta charset='UTF-8'>
        <meta name='keywords' content='Foothill, college, CS, computer science, club, owl hacks'>
        <link rel='icon' type='image/icon' href='/favicon.ico'>
        <link rel='stylesheet' type='text/css' href='index.css'>
    </head>
    <body>
        <div id="header">
            Owl Hacks 2017: RSVP
        </div>

        <div id="content">

<?php
    $is_submission = 0;
    $is_error = 0;

    $name = '';
    $email = '';
    $comment = '';
    $name_error = '';
    $email_error = '';
    $comment_error = '';

    if (array_key_exists('name', $_REQUEST)) {
        $is_submission = 1;
        $name = $_REQUEST['name'];
    }
    if ( array_key_exists('email', $_REQUEST)) {
        $is_submission = 1;
        $email = $_REQUEST['email'];
    }
    if (array_key_exists('comment', $_REQUEST)) {
        $is_submission = 1;
        $comment = $_REQUEST['comment'];
    }

    # kill newlines and nulls
    $name = str_replace("\n", "", str_replace("\0", "", $name));
    $email = str_replace("\n", "", str_replace("\0", "", $email));
    $comment = str_replace("\n", "", str_replace("\0", "", $comment));

    if (strlen($name) == 0 || strlen($name) > 100) {
        $name_error = "Oh come on, I can't call you that!";
        $is_error = 1;
    }
    if (!($email = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))) {
        $email_error = "Invalid email address";
        $is_error = 1;
    }
    if (strlen($comment) > 1000) {
        $comment_error = "If you need to say this much, you should get in contact with president@cs.foothillstemclubs.org.";
        $is_error = 1;
    }

    if ($is_submission && !$is_error) {
        if (
            !($fh = fopen("/var/lib/owlhacks-rsvp.list", "a")) ||
            !flock($fh, LOCK_EX) ||
            !fwrite($fh,
                "Name: $name\n".
                "Email: $email\n".
                "Comment: $comment\n".
                "\n"
            ) ||
            !flock($fh, LOCK_UN) ||
            !fclose($fh)
        ) {
            echo (
                "<a class='error'>\n".
                "   Error saving data. please contact postmaster@foothillstemclubs.org regarding the problem\n".
                "</a>\n"
            );
        } else {
            echo (
                "Thanks for telling us you'll be coming. See you there!"
            );
        }
    } else {
        echo (
            "<form action='' method='POST' id='owlhacks-rsvp-form'>\n".
            "   Please RSVP so that we know how many people are coming (and how much food to buy for all of you).\n".
            "   <p>\n"
        );

        if ($is_submission && $name_error) {
            echo (
                "<a class='error'>\n".
                "   $name_error\n".
                "</a>\n".
                "<br>\n"
            );
        }
        echo (
            "<input\n".
            "   type='text'\n".
            "   name='name'\n".
            "   class='contact-input'\n".
            "   value='".htmlspecialchars($name)."'\n".
            "   placeholder='Your Name'\n".
            ">\n".
            "<p>\n"
        );

        if ($is_submission && $email_error) {
            echo (
                "<a class='error'>\n".
                "   $email_error\n".
                "</a>\n".
                "<br>\n"
            );
        }
        echo (
            "<input\n".
            "   type='text'\n".
            "   name='email'\n".
            "   class='contact-input'\n".
            "   value='".htmlspecialchars($email)."'\n".
            "   placeholder='Your Email Address'\n".
            ">\n".
            "<p>\n"
        );

        if ($is_submission && $comment_error) {
            echo (
                "<a class='error'>\n".
                "   $comment_error\n".
                "</a>\n".
                "<br>\n"
            );
        }
        echo (
            "<textarea\n".
            "   name='comment'\n".
            "   placeholder=\"Anything else you'ld like to tell us? (max 1000 characters)\"\n".
            "   style='height: 50%; width: 30%;'\n".
            ">".htmlspecialchars($comment)."</textarea>\n".
            "<p>\n"
        );

        echo (
            "   <input type='submit' value='RSVP!'>\n".
            "</form>\n"
        );
    }
?>

        </div>
    </body>
</html>

