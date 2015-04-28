<?php
// check if fields passed are empty
if(empty($_POST['Name']) ||
empty($_POST['property']) ||
empty($_POST['BillingAddress']) ||
empty($_POST['apt']) ||
empty($_POST['floor']) ||
empty($_POST['MachineType']) ||
empty($_POST['MachineLocation']) ||
empty($_POST['description']) ||
empty($_POST['email']) ||
empty($_POST['daytime']) ||
!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
echo "No arguments Provided!";
return false;
}
$Name = $_POST['Name'];
$property = $_POST['property'];
$BillingAddress = $_POST['BillingAddress'];
$apt = $_POST['apt'];
$floor = $_POST['floor'];
$MachineType = $_POST['MachineType'];
$MachineLocation = $_POST['MachineLocation'];
$description = $_POST['description'];
$email = $_POST['email'];
$daytime = $_POST['daytime'];

// create email body and send it
$to = 'mcadamsjustin@gmail.com'; // put your email
$email_subject = "Service Request form submitted by: $Name $property";
$email_body = "You have received a new Service Request. \n\n".
" Here are the details:\n \n Name: $Name \n ".
"Porperty Name: $property \n ".
"Billing Address: $BillingAddress \n".
"Email: $email\n". 
"Property: $property\n".
"Apartment Number: $apt \n".
"Floor: $floor \n".
"Machine Type: $MachineType \n".
"Machine Location: $MachineLocation \n".
"Description: $description \n".
"Daytime Phone: $daytime \n";
$headers = "From: test@justinmcadams.com\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
