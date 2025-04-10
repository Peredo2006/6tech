<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/scrollreveal"></script>

    <link rel="icon" href="images/logo.png" type="image/png">
    <title>6Tech</title>
</head>
<body>
    <header>
        <nav id="navbar">
        
            <img id="nav_logo" src="images/name-logo.png" alt="">
            
            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#equipe">Equipe</a>
                </li>
                <li class="nav-item">
                    <a href="#sobre">Sobre</a>
                </li>
            </ul>

            <a href="contato.php">
                <button class="btn-default">
                    Entre em contato
                </button>
            </a>

            
            
            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#equipe">Equipe</a>
                </li>
                <li class="nav-item">
                    <a href="#sobre">Sobre</a>
                </li>
            </ul>

            <button class="btn-default">
                Entre em contato
            </button>
        </div>
    </header>

    <main id="content">
        <section id="home">
            <div class="shape"></div>

            <div id="cta">
                <h1 class="title">
                    Tenha o seu site
                    <span>agora mesmo</span>.
                </h1>

                <p class="description">A 6Tech sabe que, em tecnologia, não existe limite para a criatividade – 6 cabeças pensam melhor que uma!</p>

                <div id="cta_buttons">
                    <a id="contato_button" href="contato.php" class="btn-default">Contato</a>

                    <a href="tel:+55112304-4251" id="phone_button">
                        <button class="btn-default">
                            <i class="fa-solid fa-phone"></i>
                        </button>(11) 2304-4251
                    </a>
                </div>

                <div class="social-media-buttons">
                    <a href="https://web.whatsapp.com/">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="https://www.instagram.com/ifspgru/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://www.facebook.com/ifspguarulhos/?locale=pt_BR">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>

            <div id="banner">
                <img src="images/principal.png" alt="">
            </div>
        </section>

        <section id="equipe">
            <h2 class="section-title">Equipe</h2>
            <h3 class="section-subtitle">Nossa equipe focada em te oferecer o melhor resultado!</h3>

            <div id="integrantes">
                
                <div id="integrante">
                    <div class="integrante-heart">
                        <a href="https://github.com/beamarques12/"><i class="fa-brands fa-github fa-lg" style="color: #ffffff;"></i></a>
                        
                    </div>
                    
                    <img src="images/integrantes/beatriz.jpg" class="integrante-image" alt=""> <!--BEATRIZ-->

                    <h3 class="integrante-name">
                        Beatriz Marques
                    </h3>

                    <span class="integrante-description">
                        Desenvolvedora Front-End
                    </span>

                </div> <!--beatriz-->

                <div id="integrante">
                    <div class="integrante-heart">
                    <a href="https://github.com/Brogisgu"><i class="fa-brands fa-github fa-lg" style="color: #ffffff;"></i></a>
                    </div>
                    
                    <img src="images/integrantes/borges.jpg"class="integrante-image" alt=""> <!--GUSTAVO-->

                    <h3 class="integrante-name">
                        Gustavo Borges
                    </h3>

                    <span class="integrante-description">
                        Desenvolvedor Full Stack
                    </span>
                </div> <!--gustavo-->

                <div id="integrante">
                    <div class="integrante-heart">
                        <a href="https://github.com"><i class="fa-brands fa-github fa-lg" style="color: #ffffff;"></i></a>
                    </div>
                    
                    <img src="images/integrantes/lilian.png" class="integrante-image" alt=""> <!--Lilian-->

                    <h3 class="integrante-name">
                        Lilian Semeão
                    </h3>

                    <span class="integrante-description">
                        Revisora de código
                    </span>
                </div> <!--lilian-->

                <div id="integrante">
                    <div class="integrante-heart">
                    <a href="https://github.com/luisrech"><i class="fa-brands fa-github fa-lg" style="color: #ffffff;"></i></a>
                    </div>
                    
                    <img src="images/integrantes/luis.jpg" class="integrante-image" alt=""> <!--LUÍS-->

                    <h3 class="integrante-name">
                        Luís Rech
                    </h3>

                    <span class="integrante-description">
                        Desenvolvedor Back-End
                    </span>
                </div> <!--luis-->

                <div id="integrante">
                    <div class="integrante-heart">
                        <a href="https://github.com/oipaula"><i class="fa-brands fa-github fa-lg" style="color: #ffffff;"></i></a>
                    </div>
                    
                        <img src="images/integrantes/paula.jpg" class="integrante-image" alt=""> <!--PAULA-->

                        <h3 class="integrante-name">
                            Paula Xavier
                        </h3>

                        <span class="integrante-description">
                            UX/UI Designer
                        </span>
                </div> <!--paula-->

                <div id="integrante">
                    <div class="integrante-heart">
                        <a href="https://github.com/Peredo2006"><i class="fa-brands fa-github fa-lg" style="color: #ffffff;"></i></a>
                    </div>
                    
                    <img src="images/integrantes/pedro.jpg" class="integrante-image" alt=""> <!--PEDRO-->
                
                    <h3 class="integrante-name">
                        Pedro Santos
                    </h3>
                
                    <span class="integrante-description">
                        Gerente <br>Desenvolvedor Full Stack
                    </span>
                </div> <!--pedro-->
            </div>
        </section>

        <section id="sobre">
            <img src="images/avaliacao.png" id="sobre_avaliacao" alt="">

            <div id="valores_content">
                <h2 class="section-title">Sobre a 6Tech</h2>
                <h3 class="section-subtitle">A nossa missão, valores e visão!</h3>

                <div id="feedbacks">
                    <div class="feedback">
                        <i class="fa-regular fa-handshake" id="feedback-avatar"></i>

                        <div class="feedback-content">
                            <p>
                                Missão
                            </p>
                            <p>
                                Desenvolver sites e soluções web que atendam às necessidades dos nossos clientes de forma simples, eficiente e criativa. Queremos ajudar negócios a crescer com tecnologia acessível e de qualidade.
                            </p>
                        </div>
                    </div>

                    <div class="feedback">
                        <i class="fa-regular fa-thumbs-up" class="feedback-avatar"></i>

                        <div class="feedback-content">
                            <p>
                                Valores
                            </p>
                            <p>
                                Trabalhamos com transparência, colaboração e respeito, buscando sempre inovar e entregar o melhor. Acreditamos em soluções práticas que fazem a diferença para quem confia em nosso trabalho.
                            </p>
                        </div>
                    </div>

                    <div class="feedback">
                        <i class="fa-regular fa-eye" class="feedback-avatar"></i>

                        <div class="feedback-content">
                            <p>
                                Visão
                            </p>
                            <p>
                                Ser reconhecida pela capacidade de oferecer soluções web criativas, eficientes e acessíveis, sempre buscando entender e atender às necessidades reais dos nossos clientes, com transparência e respeito.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
            <img src="images/wave.svg" alt="">

            <div id="footer-items">
                <span id="copyright">&copy 2025 | 6Tech</span>

                <div class="social-media-buttons">
                    <a href="https://web.whatsapp.com/">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="https://www.instagram.com/ifspgru/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://www.facebook.com/ifspguarulhos/?locale=pt_BR">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>
    </footer>
    
    <script src="javascript/script.js"></script>
</body>
</html>