﻿﻿<?php

if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    http_response_code(403);
    exit("Acesso negado.");
}

$email_smtp = 'seu_gmail';          // G-mail que irá enviar o formulario de contato.
$senha_smtp = 'senha_aplicativo';            // Senha aplicativo do Gmail que irá enviar o formulario de contato.
$destinatario = 'email_destino';        // E-mail que vai receber o formulario de contato!
?>