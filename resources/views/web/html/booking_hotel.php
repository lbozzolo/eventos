<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hosteria, alta montaña, Caviahue,  sauna, spa, jardín">
    <meta name="author" content="Ansonika">
    <title>Kallfu.com | Hostería de Alta Montaña</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "index.html"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
<?php
						$mail = $_POST['email'];
						$to = "reservas@kallfu.com";/* YOUR EMAIL HERE */
						$subject = "Reserva desde Web - Kallfu";
						$headers = "De: Kallfu <reservas@kallfu.com>";
						$message = "Detalles\n";
						$message .= "\nCheck in > Check out: " . $_POST['dates'];
						$message .= "\nTipo Habitacion: " . $_POST['room_type'];
						$message .= "\nAdultos: " . $_POST['adults'];
						$message .= "\Niños: " . $_POST['child'];
						if( isset( $_POST['Detalles'] ) && $_POST['notes']) {
						$message .= "\Detalles Especial: " . $_POST['notes'];
						}
						
						$message .= "\Datos de Reserva:\n" ;
						foreach($_POST['options'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
	
						$message .= "\nNombre: " . $_POST['first_name'];
						$message .= "\nApellido: " . $_POST['last_name'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nTelefono: " . $_POST['telephone'];
						$message .= "\nTerms and conditions accepted: " . $_POST['terms']. "\n";
	
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Gracias";
						$userheaders = "De: reservas@kallfu.com\n";
						/*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Gracias por tu tiempo. Su solicitud se ha enviado correctamente. Le responderemos en breve\n\nResumen:\n\n$message"; 
						mail($user,$usersubject,$usermessage,$userheaders);
	
?>
<!-- END SEND MAIL SCRIPT -->   

<div id="success">
    <div class="icon icon--order-success svg">
         <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
          <g fill="none" stroke="#8EC343" stroke-width="2">
             <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
             <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
          </g>
         </svg>
     </div>
	<h4><span>Solicitud enviada con éxito!</span>Gracias por tu tiempo</h4>
	<small>Serás redirigido de nuevo en 5 segundos.</small>
</div>
</body>
</html>