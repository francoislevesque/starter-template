<?php

$EmailFrom = Trim(stripslashes($_POST['email'])); 
$EmailTo = "francois@witify.io";

$subject = Trim(stripslashes($_POST['type']));

$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$message = Trim(stripslashes($_POST['message']));

// Validation
$validationOK=true;
if (!$validationOK) {
	header('Location: contact.php?success=0');
	exit;
}

// Prepare email body text
$body = "";

$body .= "Name: ";
$body .= $name;
$body .= "\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n";


if($subject == "career") {
	$city = Trim(stripslashes($_POST['city']));

	$body .= "City: ";
	$body .= $city;
	$body .= "\n";
}

if($subject == "press") {
	$business = Trim(stripslashes($_POST['business']));

	$body .= "Business: ";
	$body .= $business;
	$body .= "\n";
}

if($subject == "business") {

	$business = Trim(stripslashes($_POST['business']));
	$application = Trim(stripslashes($_POST['application']));
	$number_of_vehicules = Trim(stripslashes($_POST['number_of_vehicules']));
	$daily_distance = Trim(stripslashes($_POST['daily_distance']));

	$body .= "Business: ";
	$body .= $business;
	$body .= "\n";

	$body .= "Application: ";
	$body .= $application;
	$body .= "\n";

	$body .= "Number of vehicules: ";
	$body .= $number_of_vehicules;
	$body .= "\n";

	$body .= "Daily distance: ";
	$body .= $daily_distance;
	$body .= "\n";
}

$body .= "Message: ";
$body .= $message;
$body .= "\n";

var_dump($EmailTo);
var_dump($subject);
var_dump($body);
var_dump($EmailFrom);


// Send email 
$success = mail($EmailTo, $subject, $body, "From: <$EmailFrom>");

// Redirect to success page 
if ($success){
	header('Location: contact.php?success=true');
}
else{
	header('Location: contact.php?success=false');
}
?>