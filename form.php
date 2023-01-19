<?php
if(!isset($_POST['submit']))
{
    echo "error, you need to submit the form!";
}
$name = $_POST['Nume'];
$firstName = $_POST['Prenume'];
$phone = $_POST['Telefon'];
$visitor_email = $_POST['Email'];
$message = $_POST['Mesaj'];

if(empty($name) || empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = $visitor_email;
$email_subject = "New Form submission";
$email_body=" You have recieved a new message from $name $firstName.\n".
    "Phone Number: $phone\n".
    "Email adress: $visitor_email\n".
    "Here is the message:\n $message";
$to="office.aivan@gmail.com";
$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);
{
    echo "Va multumim, emailul dumneavoastra a fost trimis.";
}

?>