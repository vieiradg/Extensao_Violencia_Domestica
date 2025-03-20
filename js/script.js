document.addEventListener("DOMContentLoaded", function () {
    // Função para abrir o modal
    const abrirModal = (modalId) => {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = "flex";
        }
    };

    // Função para fechar o modal
    const fecharModal = (modalId) => {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = "none";
        }
    };

    // Adiciona eventos de clique aos links "Leia mais" e "Peça ajuda"
    document.querySelectorAll("[data-modal]").forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            const modalId = link.getAttribute("data-modal");
            if (modalId) {
                abrirModal(modalId);
            }
        });
    });

    // Adiciona eventos de clique aos botões de fechar
    document.querySelectorAll(".fechar-modal").forEach((botao) => {
        botao.addEventListener("click", () => {
            const modal = botao.closest(".modal");
            if (modal) {
                fecharModal(modal.id);
            }
        });
    });

    // Fecha o modal ao clicar fora dele
    window.addEventListener("click", (event) => {
        if (event.target.classList.contains("modal")) {
            fecharModal(event.target.id);
        }
    });

    // Máscara para o campo de celular
    const celularInput = document.getElementById("celular");
    if (celularInput) {
        celularInput.addEventListener("input", function (e) {
            let value = e.target.value.replace(/\D/g, "");
            if (value.length > 0) {
                if (value.length > 2) {
                    value = value.slice(0, 2) + " " + value.slice(2);
                }
                if (value.length > 7) {
                    value = value.slice(0, 7) + "-" + value.slice(7, 11);
                }
            }
            e.target.value = value;
        });
    }

    // Contador de caracteres para a mensagem
    const mensagemTextarea = document.getElementById("mensagem");
    const charCounter = document.querySelector(".char-counter");
    if (mensagemTextarea && charCounter) {
        const maxLength = 100;
        mensagemTextarea.maxLength = maxLength;

        const updateCounter = () => {
            const currentLength = mensagemTextarea.value.length;
            charCounter.textContent = `${currentLength}/${maxLength}`;
        };

        mensagemTextarea.addEventListener("input", updateCounter);
        updateCounter(); // Inicializa o contador
    }

    // Manipula o envio do formulário
    const formulario = document.querySelector(".formulario-ajuda");
    if (formulario) {
        formulario.addEventListener("submit", function (e) {
            e.preventDefault();

            // Aqui você pode adicionar a lógica para enviar os dados do formulário
            // Por exemplo, usando fetch para enviar para um servidor

            // Por enquanto, vamos apenas mostrar uma mensagem de sucesso
            alert("Formulário enviado com sucesso! Entraremos em contato em breve.");

            // Limpa o formulário
            this.reset();

            // Reseta o contador de caracteres
            if (charCounter) {
                charCounter.textContent = "0/100";
            }

            // Fecha o modal
            fecharModal("modal-ajuda-form");
        });
    }
});