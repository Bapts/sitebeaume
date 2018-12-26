<?php

//Retrieve form data. 
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$roomType = ($_GET['room-type']) ? $_GET['room-type'] : $_POST['room-type'];
$checkin = ($_GET['check-in']) ? $_GET['check-in'] : $_POST['check-in'];
$checkout = ($_GET['check-out']) ? $_GET['check-out'] : $_POST['check-out'];
$roomNumber = ($_GET['room-number']) ? $_GET['room-number'] : $_POST['room-number'];
$adult = ($_GET['adult-persons']) ? $_GET['adult-persons'] : $_POST['adult-persons'];
$child= ($_GET['child-persons']) ? $_GET['child-persons'] : $_POST['child-persons'];

$name = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
$surname = ($_GET['surname']) ? $_GET['surname'] : $_POST['surname'];
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];

$creditCard = ($_GET['credit-number']) ?$_GET['credit-number'] : $_POST['credit-number'];
$cardHolder = ($_GET['card-holder']) ?$_GET['card-holder'] : $_POST['card-holder'];
$cvvCode = ($_GET['cvv-code']) ?$_GET['cvv-code'] : $_POST['cvv-code'];

$phone = ($_GET['phone']) ?$_GET['phone'] : $_POST['phone'];
$additionalText = ($_GET['additional-text']) ?$_GET['additional-text'] : $_POST['additional-text'];

$sum = ($_GET['total-sum']) ?$_GET['total-sum'] : $_POST['total-sum'];

//flag to indicate which method it uses. If POST set it to 1
if ($_POST) $post=1;

//Simple server side validation for POST data, of course, you should validate the email
if (!$roomType) $errors[count($errors)] = 'Please select room type.'; 
if (!$checkin) $errors[count($errors)] = 'Please select check-in date.'; 
if (!$checkout) $errors[count($errors)] = 'Please select check-out date.'; 
if (!$roomNumber) $errors[count($errors)] = 'Please enter room number to reserve.'; 
if (!$adult) $errors[count($errors)] = 'Please select how many adults will check-in.'; 
if (!$child) $errors[count($errors)] = 'Please select how many children will check-in.'; 


if (!$name) $errors[count($errors)] = 'Please enter your name.';
if (!$surname) $errors[count($errors)] = 'Please enter your surname.';
if (!$email) $errors[count($errors)] = 'Please enter your email.'; 

if (!$creditCard) $errors[count($errors)] = 'Please enter your credit card number.'; 
if (!$cardHolder) $errors[count($errors)] = 'Please enter name and surname of credit card holder.'; 
if (!$cvvCode) $errors[count($errors)] = 'Please enter CVV2 code.'; 


//if the errors array is empty, send the mail
if (!$errors) {
	
	//recipient
	$to = '';
	//sender
	$from = $name . ' ' . $surname . ' <' . $email . '>';
	
	//subject and the html message
	$subject = 'Reservation request from ' . $name . ' ' . $surname;	
	$message = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head></head>
	<body>
	<table>
		<tr><td>Name</td><td>' . $name . ' ' . $surname. '</td></tr>
		<tr><td>Email</td><td>' . $email . '</td></tr>';
	if ( $phone != '' ) {
		$message .= '<tr><td>Phone</td><td>' . $phone . '</td></tr>';
	}
	
	$message .= 
		'<tr><td>Room Type</td><td>' . $roomType . '</td></tr>
		<tr><td>Check in date</td><td>' . $checkin . '</td></tr>
		<tr><td>Check out date</td><td>' . $checkout . '</td></tr>
		<tr><td>Room Number</td><td>' . $roomNumber . '</td></tr>
		<tr><td>Adults (18+)</td><td>' . $adult . '</td></tr>
		<tr><td>Children (0-17)</td><td>' . $child . '</td></tr>
		
		<tr><td>Credit Card Number</td><td>' . $creditCard . '</td></tr>
		<tr><td>Credit Card Holder</td><td>' . $cardHolder . '</td></tr>
		<tr><td>CVV2 Code</td><td>' . $cvvCode . '</td></tr>';
	if ( $additionalText != '' ) {
		$message .= '<tr><td>Additional Text</td><td>' . $additionalText . '</td></tr>';
	}
	
	$message .= '
	
		<tr><td>Total Sum: </td><td>' . $sum . '</td></tr>
	</table>
	</body>
	</html>';

	//send the mail
	$result = sendmail($to, $subject, $message, $from);
	
	//if POST was used, display the message straight away
	if ($_POST) {
		if ($result) echo 'Thank you! We have received your message.';
		else echo 'Sorry, unexpected error. Please try again later';
		
	//else if GET was used, return the boolean value so that 
	//ajax script can react accordingly
	//1 means success, 0 means failed
	} else {
		echo $result;	
	}

//if the errors array has values
} else {
	//display the errors message
	for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
	echo '<a href="form.php">Back</a>';
	exit;
}

//Simple mail function with HTML header
function sendmail($to, $subject, $message, $from) {
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
	
	if ($result) return 1;
	else return 0;
}

?>