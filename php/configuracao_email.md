# Orientações para Configuração do Formulário de Contato

Este formulário utiliza a biblioteca **PHPMailer** e está configurado para funcionar com um e-mail do Gmail.

Para que funcione corretamente, siga os passos abaixo:

---

## 1. Obtenha uma senha de aplicativo do Gmail

Caso não saiba o que é, pesquise por "senha de app Gmail". Mas veja abaixo uma explicação rápida:

### 📌 O que é uma senha de app do Gmail?

A senha de app é um código gerado pelo Google que permite que aplicativos (como este formulário) acessem sua conta com segurança, **sem usar sua senha principal**.

Isso é necessário porque o Google bloqueia acessos considerados "menos seguros", como scripts PHP que tentam enviar e-mails diretamente.

#### Como gerar:

1. Ative a **verificação em duas etapas** na sua conta Google.
2. Acesse: [https://myaccount.google.com/apppasswords](https://myaccount.google.com/apppasswords)
3. Acesse a seção Senhas de app.
4. Informe um nome adequado (ex: "formulário PHPMailer") e clique em "Gerar".
5. Copie a senha gerada e cole no campo `senha_aplicativo` do arquivo `config_email.php`.

⚠️ Atenção: A senha gerada é exibida apenas uma vez! Se houver espaços em branco na senha, remova-os.

---

## 2. Configure o arquivo `config_email.php`

Abra o arquivo e substitua os dados abaixo:

- `'seu_gmail'` → Seu e-mail do Gmail.
- `'senha_aplicativo'` → A senha de app gerada no passo anterior.
- `'email_destino'` → O e-mail que deve receber os contatos (pode ser Gmail ou outro provedor).

---

## 3. Requisitos mínimos da hospedagem

- PHP 7.2 ou superior  
- Acesso SMTP externo (por exemplo: `smtp.gmail.com`)  
- Extensões habilitadas: `openssl`, `mbstring`  
- Porta 587 (TLS) ou 465 (SSL) liberada  

---

## 4. Hospedagens recomendadas (com suporte conhecido)

- Hostinger  
- KingHost  
- Locaweb  
- UOLHost  
- HostGator  
- WebLink  

Antes de contratar ou publicar o site, verifique se o servidor atende aos requisitos acima.  
É altamente recomendável entrar em contato com o suporte técnico do provedor antes.

---

# Teste Local com XAMPP (ou similares)

Você pode testar este formulário em um ambiente local, com:

- XAMPP (Windows, Linux, macOS)
- WampServer (Windows)
- MAMP (macOS)

Para funcionar corretamente localmente:

- É necessário ter acesso à internet.
- O envio de e-mails só funcionará se as portas necessárias estiverem liberadas (porta 587 ou 465).
- Algumas conexões podem ser bloqueadas por firewall ou antivírus local.
- Certifique-se de que o Apache e o PHP estão ativos no painel de controle do XAMPP.

> 💡 Mesmo em ambiente local, o formulário precisa se conectar ao servidor SMTP do Gmail — ou seja, o envio de mensagens exige internet ativa.

