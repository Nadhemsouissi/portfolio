<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anliegen = htmlspecialchars($_POST['anliegen']);
    $anrede = htmlspecialchars($_POST['anrede']);
    $name = htmlspecialchars($_POST['name']);
    $nachname = htmlspecialchars($_POST['nachname']);
    $telefonnummer = htmlspecialchars($_POST['telefonnummer']);
    $email = htmlspecialchars($_POST['email']);

    $to = "kontakt@nadhemsouissi.de";
    $subject = "New Contact Form Submission";
    $message = "
    <html>
    <head>
        <title>New Contact Form Submission</title>
    </head>
    <body>
        <p><strong>Anliegen:</strong> $anliegen</p>
        <p><strong>Anrede:</strong> $anrede</p>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Nachname:</strong> $nachname</p>
        <p><strong>Telefonnummer:</strong> $telefonnummer</p>
        <p><strong>Email:</strong> $email</p>
    </body>
    </html>
    ";

    // To send HTML mail, the Content-type header must be set
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= "From: <$email>" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to thank you page
        header("Location: thank_you.html");
        exit;
    } else {
        echo "There was an error sending the email.";
    }
}
?>
