<?php

    $to = "vinodpal09@gmail.com";
	
	$name = $_REQUEST['name'];
    $from = $_REQUEST['email'];
    $arival_date = $_REQUEST['arival_date'];
    $departure_date = $_REQUEST['departure_date'];
    $chooseAdults = $_REQUEST['chooseAdults'];
	$chooseChildren = $_REQUEST['chooseChildren'];
	$message = $_REQUEST['message'];
	

	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Contact Booking";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Industrial Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody><tr><td style='border:none;' colspan='2'>Dear Admin, <br /> <br />You have got a new contact form message !!! <br />Please find details below:</td></tr>";
	$body .= "<tr><td style='border:none;height:10px'>&nbsp;</td><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Name</td><td style='border:none;'>{$name}</td></tr>";
	$body .= "<tr><td style='border:none;'>Email</td><td style='border:none;'>{$from}</td></tr>";
	$body .= "<tr><td style='border:none;'>Ariaval Date:</td><td style='border:none;'>{$arival_date}</td></tr>";
	$body .= "<tr><td style='border:none;'>Departure Date:</td><td style='border:none;'>{$departure_date}</td></tr>";
	$body .= "<tr><td style='border:none;'>Adults:</td><td style='border:none;'>{$chooseAdults}</td></tr>";
	$body .= "<tr><td style='border:none;'>Children</td><td style='border:none;'>{$chooseChildren}</td></tr>";
	$body .= "<tr><td style='border:none;'>Message</td><td style='border:none;'>{$message}</td></tr>";
	$body .= "<tr><td style='border:none;height:10px'>&nbsp;</td><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Thank you</td><td style='border:none;'></td></tr>";
	$body .= "<tr><td style='border:none;'>Team Resort</td><td style='border:none;'></td></tr>";
	

	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = @mail($to, $subject, $body, $headers);

	if($send)
	{
		echo 'Email has been sent successfully !!!';
	}
	else
	{
		echo 'There was an error while sending email. Please try again.';
	}
?>




