<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>

    <link rel="icon" href="images/logo.png" type="image/png">
    <title>Entre em contato! | 6Tech</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <img id="nav_logo" src="images/name-logo.png" alt="">

            <a href="index.php">
                <button class="btn-default">
                    Página Inicial
                </button>
            </a>

            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
            <a href="index.php">
                <button class="btn-default">
                    Página Inicial
                </button>
            </a>
        </div>
    </header>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get("sucesso") === "1") {
            alert("Mensagem enviada com sucesso!");
            urlParams.delete('sucesso'); // Remove o parâmetro 'sucesso'
            const newUrl = window.location.pathname + (urlParams.toString() ? '?' + urlParams.toString() : '');
            window.history.replaceState({}, '', newUrl);
        }
    </script>
    <main id="content">
        <section id="form">
            <div class="form-container">
            <div id="alerta"></div>
                <h2 class="section-title">Fale com a 6Tech!</h2>
                <form action="php/enviar-email.php" method="POST">
                    <div class="form-row">
                        <div class="form-group half">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group half">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" id="sobrenome" name="sobrenome" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group half">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group half">
                            <label for="assunto">Assunto:</label>
                            <input type="text" id="assunto" name="assunto" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem:</label>
                        <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-default">Enviar</button>
                </form>
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