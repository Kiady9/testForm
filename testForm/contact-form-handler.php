
<?php

include('connexion.php');
$errors = '';
$myemail = 'kiady@hotmail.fr';//<-----Put Your email address here.
if (empty($_POST['name']) ||
empty($_POST['email']) ||
empty($_POST['message']))
{
$errors .= "\n Error: all fields are required";
}


$name = $_POST['fname'];
$email_address = $_POST['mail'];
$message = $_POST['message'];
// $subject = $_POST['subject'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/i",
$email_address))

{
$errors .= "\n Error: Invalid email address";
}

if( empty($errors))

{
// $query = "INSERT INTO `contact` (name, email, subject, message, time) VALUES ('$name', '$email_address', '$subject', '$message', NOW())";
// $result = mysqli_query($connection, $query);

// var_dump($result);
// die();

$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: index.html');

}

?> 