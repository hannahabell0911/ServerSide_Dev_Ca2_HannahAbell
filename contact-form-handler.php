<?php

$errors = '';
$myemail = 'D00249620@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['house_number']) ||
   empty($_POST['house_address']) ||
   empty($_POST['county']) ||
   empty($_POST['gender']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$email_address = $_POST['email'];
$house_number = $_POST['house_number'];
$house_address = $_POST['house_address'];
$county = $_POST['county'];
$gender = $_POST['gender'];
$message = $_POST['message'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}
if (is_numeric($house_number) == FALSE) {
    $errors .= "\n Error: Invalid house number";
}

if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n House number: $house_number \n House address: $house_address 
        \n County: $county \n Gender: $gender \n Message \n $message";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>