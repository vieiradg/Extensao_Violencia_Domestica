<?php

if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    http_response_code(403);
    exit("Acesso negado.");
}

$email_smtp = 'ixunda.if@gmail.com';          // G-mail que irá enviar o formulario de contato.
$senha_smtp = 'cfqmaehxfdqojnqs';            // Senha aplicativo do Gmail que irá enviar o formulario de contato.
$destinatario = 'ixunda.if@gmail.com';        // E-mail que vai receber o formulario de contato!
?>