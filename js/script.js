document.addEventListener("DOMContentLoaded", function () {
    const modais = {
        "modal-ajuda": document.getElementById("modal-ajuda"),
        "modal-alerta": document.getElementById("modal-alerta"),
        "modal-agressor": document.getElementById("modal-agressor"),
    };

    const abrirModal = (modalId) => {
        if (modais[modalId]) {
            modais[modalId].style.display = "flex";
        }
    };

    const fecharModal = (modalId) => {
        if (modais[modalId]) {
            modais[modalId].style.display = "none";
        }
    };

    document.querySelectorAll(".card__link a").forEach((botao) => {
        botao.addEventListener("click", (event) => {
            event.preventDefault();
            const modalId = botao.getAttribute("data-modal"); // Usa um atributo data-modal para identificar qual modal abrir
            abrirModal(modalId);
        });
    });

    document.querySelectorAll(".fechar-modal").forEach((botao) => {
        botao.addEventListener("click", (event) => {
            event.preventDefault();
            const modal = botao.closest(".modal");
            if (modal) {
                modal.style.display = "none";
            }
        });
    });

    window.addEventListener("click", (event) => {
        Object.values(modais).forEach((modal) => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Função para abrir o modal
    function abrirModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = 'flex';
        }
    }

    // Função para fechar o modal
    function fecharModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = 'none';
        }
    }

    // Eventos de clique "Leia Mais"
    document.querySelector('.leia-mais.ajuda').addEventListener('click', function() {
        abrirModal('modal-ajuda');
    });

    document.querySelector('.leia-mais.alerta').addEventListener('click', function() {
        abrirModal('modal-alerta');
    });

    document.querySelector('.leia-mais.agressor').addEventListener('click', function() {
        abrirModal('modal-agressor');
    });

    // Eventos de clique "Fechar Modal"
    document.querySelectorAll('.fechar-modal').forEach(function(botao) {
        botao.addEventListener('click', function() {
            const modal = botao.closest('.modal');
            if (modal) {
                fecharModal(modal.id);
            }
        });
    });

    // Eventos de clique fora do modal
    window.addEventListener('click', function(event) {
        if (event.target.classList.contains('modal')) {
            fecharModal(event.target.id);
        }
    });
});