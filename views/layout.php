<?php

// SI NO EXISTE SESSION, LA INICIAMOS
if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;
$auth_recepcion = $_SESSION['login_recepcion'] ?? false;
$auth_comercializacion = $_SESSION['login_comercializacion'] ?? false;
$auth_redes = $_SESSION['login_redes'] ?? false;
$auth2 = $_SESSION['login_pag'] ?? false;
$login_id = $_SESSION['usuario_id'] ?? false;
$sexo = $_SESSION['usuario_sexo'] ?? false;
if (!isset($inicio)){
    $inicio = false;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../build/css/app.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../build/dist/star-rating.css">

    <title>Hotel Rosa bela</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<style>
    #\:0\.targetLanguage {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        background: #fff;
        border: none;
    }

    .goog-te-menu-value {
        padding: 5px 10px;
        font-size: 14px;
        background-color: #007bff;
        /* Color de fondo del botón */
        color: #fff;
        /* Color del texto */
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .VIpgJd-ZVi9od-xl07Ob-lTBxed {
        display: flex !important;
        justify-content: center;
        align-items: center;
        width: 15rem;
    }

    .traductor_pag {
        display: flex;
        border-top: 1px solid gainsboro;
        background: #181414de;
    }

    #google_translate_element {
        width: 21rem;
        border: none;
        margin-left: 5rem;
    }
</style>

<body>
    <div id="miModal2" class="modal2">
        <div class="flex2" id="flex2">
            <div class="contenido-modal2">
                <div class="modal-header2 flex2" id="miModal2">
                    <div class="part_modal_header">
                        <img src="build/img/logor.webp" alt="">
                        <h2>Hotel Rosa Bela - chat en vivo</h2>
                    </div>

                    <span class="close2" id="close2">&times;</span>
                </div>
                <div class="modal-body2" id="modal-body2">
                    <section class="chat-area">


                        <div class="chat-box" id="chat-box" data-user-id="<?php echo $_SESSION['usuario_id'] ?>">

                        </div>
                        <form action="#" class="typing-area">
                            <input type="hidden" class="incoming_id" name="mensaje[usuarios_id]" value="<?php echo $_SESSION['usuario_id'] ?>">
                            <input type="text" name="mensaje[mensaje]" class="input-field" placeholder="Escribe tu mensaje aquí..." autocomplete="off" required>
                            <button id="btn_chat"><i class="fab fa-telegram-plane"></i></button>
                        </form>
                    </section>
                </div>

                <div class="footer2">
                    <div id="seleccionar_hab_p2">Seleccionar</div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER -->
    <div class="admin  <?php echo $inicio2 ? 'inicio' : ''; ?> <?php echo $no3 ? 'no' : ''; ?>">


        <header class="header">
            <div class="header_cont">
                <a href="/">
                    <p>Hotelrosabela.com</p>
                </a>
                <!-- <a href="/"><img src="/build/img/logopng_bien.webp" alt="logo"></a> -->
                <div class="menu">
                    <i class="fas fa-bars" id="btn_menu"></i>
                    <!-- <a href="/"><img src="/build/img/logopng.webp" alt="logo"></a> -->
                    <div id="back_menu"></div>
                    <nav class="navegacion" id="nav">

                        <a href="/nosotros">Nosotros</a>
                        <a href="/habitaciones">Habitaciones</a>
                        <a href="/centros">Centros de consumo</a>
                        <a href="/salones">Salones</a>
                        <a href="/eventos">Eventos</a>
                        <a href="/empleados">Empleados</a>
                        <a href="/contacto">Contacto</a>

                        <!-- <div id="google_translate_element" class="google"></div> -->

                        <?php if ($auth2 || $auth || $auth_recepcion || $auth_comercializacion || $auth_redes) { ?>
                            <?php if (!$auth && !$auth_recepcion && !$auth_comercializacion && !$auth_redes) { ?>
                                <button id="menu_usuario" class="btn_menu_usuario"><i class="fa-solid fa-sliders"></i> RB loyalty</button>
                                    <div class="nav_menu_bg">
                                    <div class="nav_menu_usuario">
                                        <a href="/logout">Cerrar Sesion</a>
                                        <a href="/reservas-usuario">Reservas</a>
                                    </div>
                                </div>
                                
                                <div class="nav_menu_usuario_movile">
                                        <a href="/logout">Cerrar Sesion</a>
                                        <a href="/reservas-usuario">Reservas</a>
                                    </div>
                            <?php } else if ($auth || $auth_recepcion || $auth_comercializacion || $auth_redes) { ?>
                                <a href="/logout">Cerrar Sesion</a>
                            <?php } ?>
                        <?php } ?>
                        <!-- <a href="/fidelizacion" class="rb_diseno">RB loyalty</a> -->
                        <input type="hidden" name="id" id="id_usuario_acti" value="<?php echo $_SESSION['usuario_id'] ?>">
                        <div class="cont_chat_linea" id="abrir_modal">

                            <a>
                                <i class="fa-regular fa-comments"></i>
                                Chat en linea</a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <section class="traductor_pag">
                <div id="google_translate_element" class="google"></div>
          
           
    </div>
    </section>


    <div class="video33 <?php echo $inicio ? 'inicio' : ''; ?> <?php echo $no ? 'no' : ''; ?>">
    <div class="logo_arriba">
            <img src="/build/img/logo_color_bien-01.png" alt="">
        </div>
    <div class="cuadro"></div>
        <div class="video">
            <video autoplay muted loop>
                <source src="/build/video/video1.mp4" type="video/mp4">
            </video>
        </div>
     
  
    </div>


    <div class="video33 <?php echo $imghabitaciones ? 'imghabitaciones' : ''; ?> <?php echo $no2 ? 'no' : ''; ?>">
        <div class="cuadro"></div>
        <div class="video">
            <video autoplay muted loop>
                <source src="/build/video/habitaciones.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    </div>
    <div class="chatbot" id="chatbot">


        <div class="chatbot_2">
            <div class="part_chatbot_img">
                <img src="build/img/logopng.webp" alt="logo_hotel">
                <i class="fa-solid fa-xmark cerrar_chatbot"></i>
            </div>
            <div class="part_chatbot_ia">
                <img src="build/img/bela-01.webp" alt="logo_hotel">
            </div>
            <div class="part_chatbot_ia2">
                <img src="build/img/rosa-01-01.webp" alt="logo_hotel">
            </div>
        </div>
        <div class="elegir_chatbot">
            <p class="elegir_chatbot-p">Elige a un recepcionista para que sea tu asistente virtual</p>

            <div class="elegir_btn">
                <button id="bela_ia" class="btn_elegir_p">
                    <img src="build/img/bela-01.webp" alt="bela_hotel">
                    <p>Rose</p>
                </button>
                <button id="rose_ia" class="btn_elegir_p">
                    <img src="build/img/rosa-01-01.webp" alt="logo_hotel">
                    <p>Bela</p>
                </button>
            </div>

            <p class="ambos_chatbot-p">¡Ambos estaremos felices de atenderte!</p>
        </div>

        <div class="chatbot_part2" id="chat_display2">
            <div class="chatbot_text">
                <div class="msg-header">

                    <p>¡Hola!, me llamo Bela &#128075; y soy tu asistente virtual, ¿cómo puedo ayudarte?</p>
                </div>
            </div>
            <form class="typing-area5">
                <input type="hidden" class="incoming_id5" name="mensaje[usuarios_id]" value="<?php echo $_SESSION['usuario_id'] ?>">
                <input id="data" type="text" name="mensaje[mensaje]" class="input-field5" placeholder="Escribe tu mensaje aquí..." autocomplete="off">
                <button id="btn_chat5"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </div>

        <div class="chatbot_part2" id="chat_display">
            <div class="chatbot_text chat_2">
                <div class="msg-header">

                    <p>¡Hola!, me llamo Rose &#128075; y soy tu asistente virtual, ¿cómo puedo ayudarte?</p>
                </div>
            </div>
            <form class="typing-area5 typ2">
                <input type="hidden" class="incoming_id5" name="mensaje[usuarios_id]" value="<?php echo $_SESSION['usuario_id'] ?>">
                <input id="data2" type="text" name="mensaje[mensaje]" class="input-field5" placeholder="Escribe tu mensaje aquí..." autocomplete="off">
                <button id="btn_chat6"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </div>

    </div>
    <?php if (!$auth && !$auth_recepcion && !$auth_redes && !$auth_comercializacion) { ?>
        <div class="chatbot_abrir_btn" id="abrirChatbot">
            <div class="text_chatbot">
                <p>Chatea con nosotros</p>
            </div>
            <div class="img_chatbot_portada">
                <img src="build/img/bela-01.webp" alt="logo_hotel">
            </div>

        </div>
    <?php } ?>
    <?php echo $contenido; ?>


    <footer class="footer">
        <div class="footer_todo contenedor">
            <img src="/build/img/logopng.webp" alt="logo" class="logo_footer">

            <div class="footer_info">
                <div class="footer_info_part">
                    <div class="footer_titulo">
                        <h5>Sobre nosotros</h5>
                    </div>
                    <br>
                    <p>Rosa Bela Hotel & Convention Center es sinónimo de prestigio y confort. Somos el hotel en Venezuela que supera las expectativas de sus clientes, ofreciendo la mejor atención de calidad, bienestar y descanso en el suroriente del país.</p>
                </div>
                <div class="footer_info_part">
                    <div class="footer_titulo">
                        <h5>Contactanos</h5>
                    </div>
                    <br>
                    <p>Edificio Hotel Rosa Bela, Av. Norte-Sur 4, Ciudad Guayana 8050, Bolívar, Venezuela.
                        <br>
                        Master: +58 286 9550 811
                        WhatsApp: +58 424 9739360
                        <br>
                        ventas@hotelrosabela.com
                        banquetes@hotelrosabela.com
                    </p>
                </div>
                <div class="footer_redes">
                    <div class="footer_titulo">
                        <h5>Siguenos</h5>

                    </div>
                    <br>
                    <div class="redes_part_footer">
                        <div class="redes_div">
                            <a href="https://www.instagram.com/hotelrosabela/?hl=es"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="redes_div">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="redes_div">
                            <a href="https://es-es.facebook.com/hotelrosabela/"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                        <div class="redes_div">
                            <a href="https://twitter.com/hotelrosabela?lang=es"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>

                </div>

            </div>
            <p class="copyright">&copy; Desarrollado por el equipo de sistemas del hotel RosaBela</p>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../build/dist/star-rating.min.js?ver=4.3.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/8aca401b21.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="../build/js/bundle.min.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'es',
                includedLanguages: 'ca,eu,gl,en,fr,it,pt,de',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                gaTrack: true
            }, 'google_translate_element');
        }
        //    que aparezca el pais en lapagina de gestion de usuario
        if (document.getElementById('countries-list2')) {
            fetch('https://restcountries.com/v2/all')
                .then(response => response.json())
                .then(data => {
                    const countriesList = document.getElementById('countries-list2');
                    data.forEach(country => {
                        const listItem = document.createElement('option');
                        listItem.textContent = country.name;
                        countriesList.appendChild(listItem);
                    });

                    // Luego de construir las opciones, seleccionamos el país del usuario si coincide
                
                    const usuarioPais = '<?php echo s($usuario->pais); ?>';

                    if (usuarioPais) {
                        const options = countriesList.options;
                        for (let i = 0; i < options.length; i++) {
                            if (options[i].textContent === usuarioPais) {
                                options[i].selected = true;
                                break;
                            }
                        }
                    }
                });
        }

        if (document.getElementById('countries-list3')) {
            fetch('https://restcountries.com/v2/all')
                .then(response => response.json())
                .then(data => {
                    const countriesList = document.getElementById('countries-list3');
                    data.forEach(country => {
                        const listItem = document.createElement('option');
                        listItem.textContent = country.name;
                        countriesList.appendChild(listItem);
                    });

                    // Luego de construir las opciones, seleccionamos el país del usuario si coincide
                    const usuarioPais = '<?php echo s($usuario->pais); ?>';

                    if (usuarioPais) {
                        const options = countriesList.options;
                        for (let i = 0; i < options.length; i++) {
                            if (options[i].textContent === usuarioPais) {
                                options[i].selected = true;
                                break;
                            }
                        }
                    }
                });
        }

        var stars = new StarRating('.star-rating');
        var stars2 = new StarRating('.star-rating2');
    </script>
</body>

</html>