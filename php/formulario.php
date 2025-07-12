<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    http_response_code(403);
    exit("Acesso negado.");
}
?>

                <div id="modal-help" class="modal hidden">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">Fale com a gente</h2>
                            <button onclick="closeModal('modal-help')" class="modal-close">
                                <svg class="close-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <form id="form-ajuda" method="POST" class="modal-form">
                            <div class="form-group">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required class="form-input">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" placeholder="Digite seu email" required class="form-input">
                            </div>
                            <div class="form-group">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="tel" id="celular" name="celular" placeholder="(00) 00000-0000" required class="form-input">
                            </div>
                            <div class="form-group">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea id="mensagem" name="mensagem" rows="4" placeholder="Escreva uma mensagem" required class="form-textarea"></textarea>
                            </div>
                            <button type="submit" class="form-submit">Enviar</button>
                            <p id="mensagem-status" class="status-msg"></p>
                        </form>
                    </div>
                </div>

                <script>
                document.getElementById("form-ajuda").addEventListener("submit", async function (e) {
                    e.preventDefault();

                    const form = e.target;
                    const formData = new FormData(form);
                    const statusMsg = document.getElementById("mensagem-status");

                    try {
                        const response = await fetch("php/env.php", {
                            method: "POST",
                            body: formData
                        });

                        const result = await response.text();

                        if (response.ok && result.includes("sucesso")) {
                            statusMsg.textContent = "Mensagem enviada com sucesso!";
                            statusMsg.style.color = "green";
                            form.reset();
                        } else {
                            statusMsg.textContent = result || "Erro ao enviar a mensagem.";
                            statusMsg.style.color = "red";
                        }
                    } catch (error) {
                        statusMsg.textContent = "Erro ao enviar: " + error.message;
                        statusMsg.style.color = "red";
                    }
                });
                </script>
