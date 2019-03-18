<?php
$e_docIdentidad = "";

    // Recepción por Post del nombre
    $e_name = "";
    $e_name = @$_POST["name"];
    $e_name = (empty(trim($e_name))) ? null : trim($e_name);
    // Recepción por Post del apellido
    $e_phone = "";
    $e_phone = @$_POST["phone"];
    $e_phone = (empty(trim($e_phone))) ? null : trim($e_phone);
    // Recepción por Post del Evento
    $e_mail = "";
    $e_mail = @$_POST["email"];
    $e_mail = (empty(trim($e_mail))) ? null : trim($e_mail);
    // Recepción por Post del Asistencia
    $e_msg = "";
    $e_msg = @$_POST["msg"];
    $e_msg = (empty(trim($e_msg))) ? null : trim($e_msg);

    $email_to = "comercial@centrolinguistica.com";
    $email_subject = "Contact from LINGUISTICA";


    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $e_name . "\n";
    $email_message .= "E-mail: " . $e_mail . "\n";
    $email_message .= "Teléfono: " . $e_phone . "\n";
    $email_message .= "Comentarios: " . $e_msg . "\n\n";


    // Ahora se envía el e-mail usando la función mail() de PHP
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    header("Location: index.html");
    exit;
?>
