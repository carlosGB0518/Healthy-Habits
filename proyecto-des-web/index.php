<?php 

include 'php/db.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy-Habits</title>
    <link rel="stylesheet" href="pag-inicio/css/Styles.css">
    <link rel="icon" href="img/logo.png">
    <style>
        .fade-in {
            opacity: 0;
            transition: opacity 2s;
        }
        .blink {
            animation: blink 2s infinite;
        }
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }
        .typing {
            border-right: .15em solid #000;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
        }
        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }
        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: black; }
        }
        .splash {
            position: relative;
            overflow: hidden;
        }
        .splash::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s, opacity 0.5s;
            opacity: 0;
        }
        .splash:active::after {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
            transition: 0s;
        }
    </style>
</head>
<body>
    <main class="PagInicio">
        <!-- Header Section -->
        <header class="Header">
            <div class="HeaderAuth">
                <a href="http://localhost/proyecto-des-web/iniciar_sesion/Iniciar_sesion.html" class="ButtonS splash">Sign in</a>
                <a href="http://localhost/proyecto-des-web/registrar/Registro.html" class="Button splash">Registrar</a>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="HeroActions">
            <div class="TextContentTitle">
                <h1 class="Title blink">Healthy-Habits</h1>
            </div>
        </section>

        <!-- Section with Image -->
        <div class="ver">
            <!-- texto -->
            <div class="section1">
                <h2 class="bienvenida typing">¿buscas un lugar dónde puedas organizar tus tareas,<br>
                    crear proyectos y trabajar en equipo?</h2>
            </div>
            <div class="Section">
                <img class="Image1" src="img/productividad.png" alt="Healthy-Habits">
            </div>

        </div>

        <!-- Footer Section -->
        <footer class="Footer">
            <div class="FooterContent">
                <div class="Title">
                    <div class="Figma">
                        <div class="Icon"></div>
                    </div>
                    <div class="ButtonList">
                        <a href="#" class="XLogo">
                            <div class="Icon"></div>
                        </a>
                        <a href="#" class="LogoInstagram">
                            <div class="Icon"></div>
                        </a>
                        <a href="#" class="LogoYoutube">
                            <div class="Icon"></div>
                        </a>
                        <a href="#" class="Linkedin">
                            <div class="Icon"></div>
                        </a>
                    </div>
                </div>

                <div class="TextLinkList">
                    <h3 class="Title">Sobre nosotros</h3>
                    <ul>
                        <li><a href="#" class="ListItem">Información de contacto</a></li>
                        <li><a href="#" class="ListItem">Logros</a></li>
                    </ul>
                </div>

                <div class="TextLinkList">
                    <h3 class="Title">Resources</h3>
                    <ul>
                        <li><a href="#" class="ListItem">Testimonios</a></li>
                        <li><a href="#" class="ListItem">Recursos</a></li>
                        <li><a href="#" class="ListItem">Soporte</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const h1 = document.querySelector(".Title");
            h1.classList.add("blink");

            const h2 = document.querySelector(".bienvenida");
            const text = h2.textContent;
            h2.textContent = "";
            let i = 0;
            function typeWriter() {
                if (i < text.length) {
                    h2.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 100);
                } else {
                    h2.classList.remove("typing");
                }
            }
            typeWriter();
        });
    </script>
</body>
</html>
