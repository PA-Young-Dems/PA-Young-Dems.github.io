<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo';
    $to = 'gianni.hill@icloud.com';
    $subject = 'Hello';
    $human = $_POST['human'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) {
	    echo '<p>Your message has been sent!</p>';
	} else {
	    echo '<p>Something went wrong, go back and try again!</p>';
	}
    } else if ($_POST['submit']) {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
