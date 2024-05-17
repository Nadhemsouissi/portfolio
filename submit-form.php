<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anliegen = $_POST["anliegen"];
    $name = $_POST["name"];
    $nachname = $_POST["nachname"];
    $telefonnummer = $_POST["telefonnummer"];
    $email = $_POST["email"];

    $to = "kontakt@nadhemsouissi.de"; // Replace this with your actual email address
    $subject = "New Form Submission";
    $message = "Anliegen: $anliegen\n";
    $message .= "Name: $name\n";
    $message .= "Nachname: $nachname\n";
    $message .= "Telefonnummer: $telefonnummer\n";
    $message .= "Email: $email\n";

    mail($to, $subject, $message);
    header("Location: index.html"); // Redirect to thank you page
}
?>
