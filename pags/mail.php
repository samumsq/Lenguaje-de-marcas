<?php
 $from = 'asdasd@asdasd';
 $to = 'miralosiquieres@gmail.com';
 $subject = 'correo pag web';
 $message = 'Mi nombre es: ' . $_POST['nombre'] . "\n" . $_POST['opinion'];
 $headers = 'test';
 mail($to,$subject,$message, $headers);
?>