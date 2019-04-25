<?php
	// Check for empty fields
	if(
		empty($_POST['name'])     ||
		empty($_POST['email'])    ||
		empty($_POST['phone'])    ||
		empty($_POST['message'])  ||
		!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)
	) {
		echo "No arguments Provided!";
		return false;
	}

	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$message = strip_tags(htmlspecialchars($_POST['message']));

	$to = 'wendersonej.74@gmail.com';
	$email_subject = "Enviado por:  $name";
	$email_body = "Você recebeu uma nova mensagem do seu site.\n\n"."Veja os detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
	$headers = "De: wendersonej.74@gmail.com\n";
	$headers .= "Respondendo a: $email_address";   

	return mail($to,$email_subject,$email_body,$headers);         
     