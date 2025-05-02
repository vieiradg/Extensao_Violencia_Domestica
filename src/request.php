<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__.'/../vendor/autoload.php';
 
require_once 'config.php';
class Request{
    //posso trocar por uma função sanititzer
    public function sanitizador(){
        filter_input(INPUT_POST, 'formNome', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'formAssunto', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'formMensagem', FILTER_SANITIZE_STRING);
        filter_input(INPUT_POST, 'formEmail', FILTER_SANITIZE_EMAIL);
        if (filter_var($_POST['formEmail'], FILTER_VALIDATE_EMAIL)) {
            echo "Este endereço de e-mail (a) sanitizado é considerado válido.\n";
        }
    }


    public function enviarEmail($nome, $assunto, $mensagem, $user_email){
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();

            //coloque seu servidor smtp
            $mail->Host = MAILHOST;
            $mail->Port = 000;

            //tipo de segurança
            $mail->SMTPSecure = 'plain';
            $mail->SMTPAuth = true;

            //seu username e sua senha (seu provedor de smtp te disponibiliza esses dados)
            $mail->Username = USERNAME;
            $mail->Password = PASSWORD;

            //PHPMailer vai usar o padrão de encriptação STARTLS
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            //Configurar as contas para as quais você deseja enviar a mensagem
            
            $mail->setFrom(SEND_FROM, SEND_FROM_NAME);

            //Também o que você deseja enviar na mensagem, como HTML, texto e anexos...
            $mail->Subject = 'Envio de email para testes';
            $mail->Charset = 'UTF-8';
            $mail->msgHTML("< p >Mensagem de < b >boas-vindas< /b >!< /p >");
            $mail->AltBody = 'Mensagem de teste, cheque se seu provedor de email tem acesso a html';
            $mail->FromName = $user_email; 
            $mail->addAddress($nome); 
            $mail->Body = $mensagem; 
            $mail->Subject = $assunto; 

            return $mail->send();


        } catch (\PHPMailer\PHPMailer\Exception $erro) {
            echo $mail->ErrorInfo;
            throw $erro;
        }finally{
            //retorna a home
        }
        
    }
}