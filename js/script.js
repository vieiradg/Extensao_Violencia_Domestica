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
