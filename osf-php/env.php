<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'config_email.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $celular = htmlspecialchars($_POST["celular"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]); 

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $email_smtp;
        $mail->Password   = $senha_smtp;
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom($email_smtp, 'Contato Violencia Domestica');
        $mail->addAddress($destinatario);

        $mail->isHTML(false);
        $mail->Subject = 'Novo Contato de Violencia Domestica';
        $mail->Body    = "Nome: $nome\nEmail: $email\nCelular: $celular\n\nMensagem:\n$mensagem";

        $mail->send();
        echo "Mensagem enviada com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao enviar: {$mail->ErrorInfo}";
    }
} else {
    echo "Acesso inválido.";
}
?>