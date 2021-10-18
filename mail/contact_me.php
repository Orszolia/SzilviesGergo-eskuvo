<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$plus_names = $_POST['plus_names'];
$plus_names_imp = implode(", ", $plus_names);
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$coming = strip_tags(htmlspecialchars($_POST['coming']));
$accomodation = strip_tags(htmlspecialchars($_POST['accomodation']));
$for_people;

if($accomodation != "Nem kérek szállást" || $accomodation != "I don't need an accomodation"){
  $for_people = strip_tags(htmlspecialchars($_POST['for_people']));
}
else{
  $for_people = 0;
}

// Create the email and send the message
$to = "szilvi.krausz@gmail.com"; // Add your email address in between the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = " $name válasza: $coming";
$body = "Visszajelzés érkezett az esküvői meghívóra:\n\n".
"Név: $name\n\nKísérői: $plus_names_imp\n\nEmail: $email\n\nTelefonszám: $phone\n\nVálasza: $coming\n\nSzállás: $accomodation $for_people főre\n\nÜzenete:\n$message";
$header = "From: noreply@szilviesgergo.hu\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
