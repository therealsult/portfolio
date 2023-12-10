<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail</title>
</head>
<body>
    
    <?php

    $to = "asultan.london@gmail.com";
    $subject = "subject of the email";
    $message = "body of email";


    $mailSuccess = mail($to, $subject, $message);

    if ($mailSuccess) {
        echo 'Email sent.';
    }

    else {
        echo "Error, unable to send email.";
    }
    
    ?>

</body>
</html>