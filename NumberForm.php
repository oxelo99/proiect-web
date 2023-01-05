<?php
if(!isset($_POST['submit']))
{
    echo "error, you need to submit the form!";
}
$number = $_POST['PhoneNumber'];

if(empty($number))
{
    echo "Phone number is mandatory!";
    exit;
}

$email_subject = "New Number submission";
$email_body=" You have recieved a new phone number: $number";
$to="office@nit4u.ro";
$headers = "New phone number! \r\n";

mail($to, $email_subject, $email_body, $headers);
{
    echo "Va multumim, numarul dumneavoastra a fost trimis.";
}

?>