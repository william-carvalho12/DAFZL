<?php

/* Contact form script configuartion */

// Enter your email, where you want to receive the messages.
$contact_email_to = "contato@dafzl.com.br";

// Subject prefix
$contact_subject_prefix = "Mensagem formulario de contato: ";

// Name too short error text
$contact_error_name = "Nome incompleto ou vazio";

// Email invalid error text
$contact_error_email = "E-mail Inválido!";

// Subject too short error text
$contact_error_subject = "Assunto vazio ou sem o numero minimo de caracteres!";

// Message too short error text
$contact_error_message = "Por favor preencha o campo mensagem";

/********** Do not edit from the below line ***********/

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    die('Sorry Request must be Ajax POST'); 
}

if( isset($_POST) ) {

    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    if(strlen($name)<4){ 
        die($contact_error_name);
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
        die($contact_error_email);
    }
    
    if(strlen($message)<3){ 
        die($contact_error_subject);
    }
    
    if(strlen($message)<3){ 
        die($contact_error_message);
    }

    $sendemail = mail($contact_email_to, $contact_subject_prefix . $subject, $message,
         "From: ".$name." <".$email.">" . PHP_EOL
        ."Reply-To: ".$email . PHP_EOL
        ."X-Mailer: PHP/" . phpversion()
    );
    
    if( $sendemail ) {
        echo 'OK';
    } else {
        echo 'E-mail não pôde ser enviado! Entre em contato pelo e-mail: contato@biomedico.com.br';
    }
}
?>