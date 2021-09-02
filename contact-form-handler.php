
<?php


$errors = '';
$myemail = 'kiady@hotmail.fr';//<-----Put Your email address here.
if (empty($_POST['fname']) ||
empty($_POST['lname']) ||
empty($_POST['mail']) ||
empty($_POST['message']) ||
empty($_POST['country']) ||
empty($_POST['remember']))
{
$errors .= "\n Error: all fields are required";
}

// isset($_POST['country']);
// echo($_POST['country']);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email_address = $_POST['mail'];
$message = $_POST['message'];
$country = $_POST['country'];
// $subject = $_POST['subject'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/i",
$email_address))

{
$errors .= "\n Error: Invalid email address";
}

if( empty($errors))

{
$query = "INSERT INTO `contact` (fname, lname, mail, message, country, time, remember) VALUES ('$fname','$lname', '$email_address', '$message', '$country', NOW(), '$remember')";
$result = mysqli_query($connection, $query);

// var_dump($result);
// die();

$to = $myemail;

$email_subject = "Contact form submission: $lname";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $fname \n ".

"Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: thxpage.php?fname='.$fname);

}

?> 