<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
   http_response_code(403);
   exit("Acesso negado.");
}

/*
==================================================================
   ORIENTAÇÕES PARA CONFIGURAÇÃO DO FORMULÁRIO DE CONTATO
==================================================================

NÃO ALTERE ESTE ARQUIVO!

Este formulário utiliza a biblioteca PHPMailer e está configurado 
para funcionar com um e-mail do Gmail.

Para que funcione corretamente, siga os passos abaixo:

1. Obtenha uma senha de aplicativo do Gmail.
   Caso não saiba o que é, pesquise por "senha de app Gmail".

2. Abra o arquivo "config_email.php" e substitua os dados:

   - Substitua 'seugmail@gmail.com' pelo seu e-mail do Gmail.
   - Substitua 'senha_aplicativo' pela sua senha de app do Gmail.
   - Substitua 'email_destino@gmail.com' pelo e-mail que deve receber os contatos (pode ser qualquer provedor).

3. Requisitos mínimos da hospedagem:

   - PHP 7.2 ou superior
   - Acesso SMTP externo (por exemplo: smtp.gmail.com)
   - Extensões habilitadas: openssl, mbstring
   - Porta 587 (TLS) ou 465 (SSL) liberada

4. Hospedagens recomendadas (com suporte conhecido):

   - Hostinger
   - KingHost
   - Locaweb
   - UOLHost
   - HostGator
   - WebLink

Antes de contratar ou publicar o site, verifique se o servidor atende aos requisitos acima.
É altamente recomendável entrar em contato com o suporte técnico do provedor antes.

==================================================================
==================================================================
   TESTE LOCAL COM XAMPP (OU SIMILARES)
==================================================================

Você pode testar este formulário em um ambiente local, com o uso:

   - XAMPP (Windows, Linux, macOS)
   - WampServer (Windows)
   - MAMP (macOS)

Para funcionar corretamente localmente:

   - É necessário ter acesso à internet.
   - O envio de e-mails só funcionará se as portas necessárias estiverem liberadas (porta 587 ou 465).
   - Algumas conexões podem ser bloqueadas por firewall ou antivírus local.
   - Certifique-se de que o Apache e o PHP estão ativos no painel de controle do XAMPP.

Atenção: mesmo em ambiente local, o formulário precisa se conectar ao servidor SMTP do Gmail — ou seja, o envio de mensagens exige internet ativa.

==================================================================
*/
?>