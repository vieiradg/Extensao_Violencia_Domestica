<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    http_response_code(403);
    exit("Acesso negado.");
}
?>

                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div id="mensagem-status"></div>
                        <span class="close">&times;</span>
                        <h2>Fale com a gente</h2>
                        <form class="modal-form" id="formulario-contato">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                        
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                        
                            <label for="celular">Celular</label>
                            <input type="tel" id="celular" name="celular" placeholder="(00) 00000-0000" required>
                        
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" rows="4" placeholder="Escreva uma mensagem" required></textarea>
                        
                            <button type="submit">Enviar</button>
                        </form>
                        
                        <script>
                            document.getElementById('formulario-contato').addEventListener('submit', function(e) {
                                e.preventDefault();
                            
                                const form = e.target;
                                const dados = new FormData(form);
                                const mensagemStatus = document.getElementById('mensagem-status');
                            
                                mensagemStatus.innerText = '⏳ Enviando...';
                                mensagemStatus.style.color = 'blue';
                            
                                fetch('osf-php/env.php', {
                                    method: 'POST',
                                    body: dados
                                })
                                .then(response => response.text())
                                .then(texto => {
                                    const sucesso = texto.toLowerCase().includes('sucesso');
                                    const icone = sucesso ? '✔️' : '❌';
                            
                                    mensagemStatus.innerText = `${icone} ${texto}`;
                                    mensagemStatus.style.color = sucesso ? 'green' : 'red';
                            
                                    form.reset();
                            
                                    setTimeout(() => {
                                        mensagemStatus.innerText = '';
                                    }, 5000);
                                })
                                .catch(erro => {
                                    mensagemStatus.innerText = '❌ Erro ao enviar. Tente novamente.';
                                    mensagemStatus.style.color = 'red';
                            
                                    setTimeout(() => {
                                        mensagemStatus.innerText = '';
                                    }, 5000);
                                });
                            });
                            </script>
                    </div>
                </div>