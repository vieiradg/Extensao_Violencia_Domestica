# Projeto_Extensão

Este projeto é um projeto de carga horária de extensão feito por alunos da Uniasselvi. Ele implementa um sistema de modais interativos utilizando HTML, SCSS, JavaScript e PHP. O sistema permite a abertura e o fechamento de modais ao clicar em botões específicos e o envio de E-mail através do formulário de contato disponível, proporcionando uma interface dinâmica e intuitiva.


📌 Funcionalidades


Exibição de modais ao clicar nos botões correspondentes.

Fechamento do modal ao clicar no botão de fechar ou fora da área do modal.

Interface estilizada com SCSS para melhor experiência do usuário.

Envio de E-mail através do formulário de contato disponível.


🛠️ Tecnologias Utilizadas


HTML5: Estruturação do conteúdo.

SCSS (SASS): Estilização avançada e modular.

JavaScript (ES6+): Manipulação do DOM para interatividade.

PHP (>= 7.2): Utilizado para o processamento do formulário de contato com envio de e-mails via biblioteca PHPMailer, validação de dados no servidor e organização modular por meio de includes.


🚀 Como Usar


1: Clone este repositório:


git clone [Clone o projeto](https://github.com/vieiradg/Extensao_Violencia_Domestica.git)

Deploy [Visualize o site](https://vieiradg.github.io/Extensao_Violencia_Domestica/)


2: Acesse o diretório do projeto:


cd nome-do-projeto


3: Configure o formulário de contato:


No arquivo php/config_email.php, substitua os campos necessários:

seu_gmail pelo seu e-mail do Gmail.

senha_aplicativo pela senha de aplicativo gerada no Gmail.

email_destino pelo e-mail que deve receber os formulários.


4: Execute o projeto:


Abra o arquivo index.php em um servidor local (como XAMPP, WAMP, Laragon ou similar) ou um servidor web com suporte a PHP.


⚠️ Requisitos:


PHP 7.2 ou superior.

Navegador moderno com suporte a HTML5, CSS3 e JavaScript ES6+.

Conexão com a internet (para envio de e-mails via PHPMailer).


⚠️ Importante: Este projeto não funcionará corretamente se aberto diretamente no navegador sem o uso de um servidor PHP.

⚠️ Se necessário, consulte o arquivo php/orientacoes.md para mais detalhes.


📂 Estrutura do Projeto


├── index.php        	# Estrutura principal do site

├── styles.scss       	# Estilos da aplicação (compilado para CSS)

├── script.js         	# Código JavaScript para interatividade

├── php/

│   ├── config_email.php  # Configuração de envio de e-mail

│   ├── orientacoes.md   # Instruções adicionais para configuração PHP

├── README.md         	# Documentação do projeto


🎨 Estilização


O projeto utiliza SCSS para organização e otimização do CSS. Certifique-se de compilar o SCSS para CSS antes de executar o projeto:

📝 Licença

Este projeto está sob a licença MIT. Sinta-se à vontade para utilizá-lo e melhorá-lo! 🎉
