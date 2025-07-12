<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Violência doméstica é um problema sério que atinge milhares de pessoas todos os dias, principalmente mulheres. Este espaço foi criado para informar, acolher e orientar vítimas e pessoas próximas sobre como identificar os sinais, buscar ajuda e romper o ciclo de violência." />
    <link rel="stylesheet" href="./scss/style.css" />
    <title>Juntos Contra a Violência Doméstica</title>
    <?php include 'php/head.php'; ?> <!-- Título dinâmico e ícone -->
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav-container">

                <div class="nav-menu">
                    <a href="#inicio" class="nav-link">Início</a>
                    <a href="#sobre" class="nav-link">Sobre</a>
                    <a href="#contato" class="nav-link">Contato</a>
                    <button onclick="openModal('modal-help')" class="btn-help">Peça Ajuda</button>
                </div>

                <button id="mobile-menu-btn" class="mobile-menu-btn">
                    <svg id="menu-icon" class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="menu-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div id="mobile-menu" class="mobile-menu hidden">
                <div class="mobile-menu-content">
                    <a href="#inicio" class="mobile-nav-link" onclick="closeMobileMenu()">Início</a>
                    <a href="#sobre" class="mobile-nav-link" onclick="closeMobileMenu()">Sobre</a>
                    <a href="#contato" class="mobile-nav-link" onclick="closeMobileMenu()">Contato</a>
                    <button onclick="openModal('modal-help'); closeMobileMenu();" class="btn-help mobile">Peça Ajuda</button>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="inicio" class="hero">
            <div class="container">
                <h1 class="hero-title">Juntos Contra a Violência Doméstica</h1>
                <p class="hero-subtitle">Estamos unidos para criar um mundo onde todos possam viver sem medo, com dignidade e respeito.</p>
            </div>
        </section>

        <section id="sobre" class="cards-section">
            <div class="container">
                <h2 class="section-title">Como podemos ajudar?</h2>

                <div class="cards-grid">
                    <!-- Cartões -->
                    <?php require_once 'php/cards.php'; ?>
                </div>
            </div>
        </section>

        <section id="contato" class="resources-section">
            <div class="container">
                <h2 class="section-title dark">Recursos de ajuda</h2>
                <p class="section-subtitle">Se você ou alguém que você conhece precisa de apoio, saiba que existem recursos confiáveis prontos para ajudar. Não hesite em buscar ajuda!</p>

                <div class="resources-grid">
                    <?php require_once 'php/recursos.php'; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 class="footer-title">Disque Denúncia</h3>
                    <ul class="footer-list">
                        <li><span class="highlight">Ligue 180 -</span> Central de Atendimento</li>
                        <li><span class="highlight">Disque 100 -</span> Direitos Humanos</li>
                        <li><span class="highlight">Ligue 190 -</span> Polícia Militar (Emergências)</li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3 class="footer-title">Desenvolvido Por:</h3>
                    <div class="credits-grid">
                        <div>Gustavo Marques</div>
                        <div>Davi Benegto</div>
                        <div>Diego Vieira</div>
                        <div>Miguel Ângelo</div>
                        <div>Kamila</div>
                        <div>Nicolly</div>
                        <div>Oséias</div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2025 Desenvolvido por alunos da Uniamerica</p>
            </div>
        </div>
    </footer>

    <!-- Modal do formulário de ajuda -->
    <?php require_once 'php/formulario.php'; ?>

    <script src="./js/script.js"></script>
</body>
</html>
