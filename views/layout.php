<?php

// SI NO EXISTE SESSION, LA INICIAMOS
// if(!isset($_SESSION)){
//     session_start();
// }

// $auth=$_SESSION['login'] ?? false;
// $auth2=$_SESSION['login_pag'] ?? false;
// if(!isset($inicio)){
//     $inicio =false;
// }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../build/css/app.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Hotel Rosa bela</title>

    <style>
     .counter-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .counter-input {
        font-size: 1.5rem;
        text-align: center;
  width: 17rem;
  border-radius: 0.9rem;
  border: .2rem solid #ecebeb;
  padding: 0.4rem .2rem;
  margin-bottom: 1rem;
  background: #e6e6e6;
    }
    .counter-btn {
        cursor: pointer;
        font-size: 1.2em;
        margin: 0 5px;
        width: 3rem;
        border-radius: 30rem;
        background: #cf5a60;
        border: 0;
        height: 3rem;
        color: white;
    }
  </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="header_cont contenedor">
            <nav class="navegacion">
                <a href="/"><img src="/build/img/logopng.webp" alt="logo"></a>
                <a href="/nosotros">Nosotros</a>
                <a href="/centros">Centros de consumo</a>
                <a href="/salones">Salones</a>
                <a href="/eventos">Eventos</a>
                <a href="/empleados">Empleados</a>
                <a href="/contacto">Contacto</a>
            </nav>
            <div class="redes">
                <div class="redes_div">
                    <a href="https://www.instagram.com/hotelrosabela/?hl=es"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="redes_div">
                    <a href="https://es-es.facebook.com/hotelrosabela/"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <div class="redes_div">
                    <a href="https://twitter.com/hotelrosabela?lang=es"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </header>
    <section class="seccion_registrar">
        <a href="/loginusuario">Iniciar sesion</a>
        <a href="#">Registrar</a>
    </section>

    <!-- <div class="imagen_header">
        <div class="imagen_header_fondo"></div>
        <img src="/build/img/inicio.webp" alt="imagen del header" class="img_header">
        <img src="/build/img/logopng.webp" alt="logo del hotel" class="logo_header">
    </div> -->
<div class="video33 <?php echo $inicio ? 'inicio' : ''; ?> <?php echo $no ? 'no' : ''; ?>">
<div class="cuadro"></div>
        <div class="video">   
            <video autoplay muted loop>
                <source src="/build/video/video1.mp4" type="video/mp4">
            </video>
        </div>
    <div class="header-flex">
            <!-- <img src="/build/img/logotipo.webp" alt="logo del hotel" class="logo_header"> -->
            <!-- <img src="/build/img/logo2.webp" alt="logo del hotel" class="logo_header"> -->
    </div>
</div>
    <!-- <div class="slideshow">
        <ul class="slider">
            <li>
                <img src="/build/img/inicio.webp" alt="" class="img_slider">
                <div class="imagen_header">
                    <div class="imagen_header_fondo"></div>
                    <img src="/build/img/logopng.webp" alt="logo del hotel" class="logo_header">
                </div>
            </li>
            <li>
                <img src="/build/img/slider2.webp" alt="" class="img_slider">>
                <div class="imagen_header">
                    <div class="imagen_header_fondo"></div>
                    <img src="/build/img/logopng.webp" alt="logo del hotel" class="logo_header">
                </div>
            </li>
            <li>
                <img src="/build/img/slider3.webp" alt="" class="img_slider">>
                <div class="imagen_header">
                    <div class="imagen_header_fondo"></div>
                    <img src="/build/img/logopng.webp" alt="logo del hotel" class="logo_header">
                </div>
            </li> -->
            <!-- <li>
				<img src="build/img/4.png" alt="">
	
			</li> -->
        <!-- </ul> -->

        <!-- <ol class="pagination">
			
		</ol>
	 -->
     <!-- <div class="contenedor">
           <div class="left">
            <span class="fa fa-chevron-left"></span>
        </div>

        <div class="right">
            <span class="fa fa-chevron-right"></span>
        </div>
     </div> -->
     

    <!-- </div> -->
    <div class="inicio_info <?php echo $inicio ? 'inicio' : ''; ?> <?php echo $no ? 'no' : ''; ?>">
    <div class="contenedor inicio_logos">
        <div class="logos_part_flex">
            <div class="l_partes2">
                <img src="/build/img/logopng.png" alt="">
            </div>
        </div>
        <div class="logos_part_flex">
            <div class="l_partes">
                <div class="inicio_svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="43" viewBox="0 0 51 43" fill="none">
                        <path d="M11.475 0.5C13.0244 0.5 14.516 1.14845 15.6201 2.31203C16.725 3.4765 17.35 5.06121 17.35 6.71875C17.35 8.37629 16.725 9.961 15.6201 11.1255C14.516 12.289 13.0244 12.9375 11.475 12.9375C9.92558 12.9375 8.43395 12.289 7.3299 11.1255C6.22501 9.961 5.6 8.37629 5.6 6.71875C5.6 5.06121 6.22501 3.4765 7.3299 2.31203C8.43395 1.14845 9.92558 0.5 11.475 0.5ZM40.8 0.5C42.3494 0.5 43.841 1.14845 44.9451 2.31203C46.05 3.4765 46.675 5.06121 46.675 6.71875C46.675 8.37629 46.05 9.961 44.9451 11.1255C43.841 12.289 42.3494 12.9375 40.8 12.9375C39.2506 12.9375 37.759 12.289 36.6549 11.1255C35.55 9.961 34.925 8.37629 34.925 6.71875C34.925 5.06121 35.55 3.4765 36.6549 2.31203C37.759 1.14845 39.2506 0.5 40.8 0.5ZM0.5 25.0861C0.5 20.3905 4.10962 16.625 8.50266 16.625H11.9053C12.9654 16.625 13.9785 16.8442 14.9083 17.239C14.8397 17.7545 14.808 18.2821 14.808 18.8125C14.808 21.7198 15.8615 24.3735 17.5862 26.375H1.69734C1.06556 26.375 0.5 25.8177 0.5 25.0861ZM36.192 18.8125C36.192 18.2761 36.1544 17.7527 36.0882 17.2384C37.0165 16.8391 38.0306 16.625 39.0947 16.625H42.4973C46.8904 16.625 50.5 20.3905 50.5 25.0861C50.5 25.8245 49.9359 26.375 49.3027 26.375H33.4162C35.1451 24.3729 36.192 21.719 36.192 18.8125ZM18.35 18.8125C18.35 16.7986 19.1093 14.8721 20.4533 13.4556C21.7965 12.04 23.6124 11.25 25.5 11.25C27.3876 11.25 29.2035 12.04 30.5467 13.4556C31.8907 14.8721 32.65 16.7986 32.65 18.8125C32.65 20.8264 31.8907 22.7529 30.5467 24.1694C29.2035 25.585 27.3876 26.375 25.5 26.375C23.6124 26.375 21.7965 25.585 20.4533 24.1694C19.1093 22.7529 18.35 20.8264 18.35 18.8125ZM10.7 40.7576C10.7 34.8274 15.2579 30.0625 20.8223 30.0625H30.1777C35.7421 30.0625 40.3 34.8274 40.3 40.7576C40.3 41.7424 39.55 42.5 38.6723 42.5H12.3277C11.4556 42.5 10.7 41.7483 10.7 40.7576Z" stroke="white" />
                    </svg>
                </div>
                <div class="inicio_texto">
                    <p>Trabajo en equipo</p>
                </div>
            </div>
            <div class="l_partes">
                <div class="inicio_svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="31" viewBox="0 0 55 31" fill="none">
                        <path d="M16.2509 14.1608L16.2508 14.1607C14.1682 11.4726 14.7017 7.71811 17.435 5.64103L23.8293 0.781681C23.1495 0.600315 22.4417 0.508074 21.725 0.508074H21.7225C20.202 0.500469 18.7219 0.92595 17.4522 1.71596C17.452 1.71607 17.4519 1.71618 17.4517 1.7163L11.5 5.44398V22.7522H13.4234H13.6084L13.7489 22.8726L21.6035 29.6061L21.6037 29.6062C23.0887 30.8804 25.392 30.7786 26.745 29.3881C27.1599 28.9554 27.4354 28.4561 27.5763 27.9404L27.7851 27.1763L28.3851 27.6935L29.846 28.953L29.8461 28.9531C31.3236 30.2273 33.6363 30.132 34.9885 28.7482L34.9885 28.7481C35.3253 28.4036 35.5723 28.0027 35.7293 27.5883L35.9459 27.0166L36.4633 27.3423C37.9384 28.271 39.9455 28.0728 41.1755 26.8109L41.176 26.8105C42.5107 25.4444 42.4173 23.3235 40.9581 22.0648L16.2509 14.1608ZM16.2509 14.1608C18.4495 16.9965 22.6846 17.5461 25.6042 15.4042C25.6042 15.4041 25.6043 15.4041 25.6044 15.4041L29.726 12.3931L40.9578 22.0646L16.2509 14.1608ZM43.5 19.3166L32.8578 10.1096L34.1451 9.17223L34.1477 9.1703C34.9698 8.56348 35.1413 7.42739 34.475 6.63068C33.8288 5.85812 32.6724 5.73494 31.8644 6.32053L31.8629 6.32162L23.3293 12.5545L23.3286 12.555C22.0537 13.4897 20.2054 13.2386 19.2678 12.0231L19.2666 12.0216C18.3944 10.9 18.6069 9.32631 19.7756 8.43975L19.7762 8.43931L28.094 2.11026C28.0942 2.11007 28.0945 2.10989 28.0947 2.10971C29.4668 1.07117 31.1819 0.5 32.9484 0.5C34.4241 0.5 35.8729 0.896347 37.1078 1.63947L37.3652 1.21178L37.1078 1.63947L43.3467 5.39364L43.3469 5.39374L43.5 5.48595V19.3166ZM5.43963 20.6826L5.09727 21.047L5.43963 20.6826C5.08594 20.3503 4.61256 20.1687 4.125 20.1687C3.63744 20.1687 3.16406 20.3503 2.81037 20.6826L3.15273 21.047L2.81037 20.6826C2.45563 21.0159 2.25 21.4748 2.25 21.9604C2.25 22.4461 2.45563 22.905 2.81037 23.2383C3.16406 23.5706 3.63744 23.7522 4.125 23.7522C4.61256 23.7522 5.08595 23.5706 5.43963 23.2383C5.79437 22.905 6 22.4461 6 21.9604C6 21.4748 5.79437 21.0159 5.43963 20.6826ZM49.5604 20.6826L49.9027 21.047L49.5604 20.6826C49.2056 21.0159 49 21.4748 49 21.9604C49 22.4461 49.2056 22.905 49.5604 23.2383C49.9141 23.5706 50.3874 23.7522 50.875 23.7522C51.3626 23.7522 51.8359 23.5706 52.1896 23.2383C52.5444 22.905 52.75 22.4461 52.75 21.9604C52.75 21.4748 52.5444 21.0159 52.1896 20.6826L51.8473 21.047L52.1896 20.6826C51.8359 20.3503 51.3626 20.1687 50.875 20.1687C50.3874 20.1687 49.9141 20.3503 49.5604 20.6826ZM0.5 6.45895C0.5 6.05356 0.865031 5.66716 1.375 5.66716H7.75V23.2522C7.75 24.3762 6.77481 25.3358 5.5 25.3358H2.75C1.47519 25.3358 0.5 24.3762 0.5 23.2522V6.45895ZM47.25 23.2522V5.66716H53.625C54.135 5.66716 54.5 6.05356 54.5 6.45895V23.2522C54.5 24.3762 53.5248 25.3358 52.25 25.3358H49.5C48.2252 25.3358 47.25 24.3762 47.25 23.2522Z" stroke="white" />
                    </svg>
                </div>
                <div class="inicio_texto">
                    <p>Compromiso</p>
                </div>
            </div>
            <div class="l_partes">
                <div class="inicio_svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="44" height="44" viewBox="0 0 24 24" stroke-width="0.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                    </svg>
                </div>
                <div class="inicio_texto">
                    <p>Pasion</p>
                </div>
            </div>
        </div>
    </div>
</div>
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
    <script>
         
  // Funciones para incrementar y decrementar la cantidad de personas y habitaciones
  function incrementar(tipo) {
    var inputElement = document.getElementById(tipo);
    var cantidad = parseInt(inputElement.value);

    if (tipo === 'habitaciones') {
      inputElement.value = (cantidad + 1) + " habitación";
    } else {
      inputElement.value = (cantidad + 1) + " " + tipo;
    }

    // Verificar si se está incrementando el número de habitaciones
    if (tipo === 'habitaciones') {
      asignarAdultos(); // Asignar automáticamente adultos al incrementar habitaciones
    }
  }

  function decrementar(tipo) {
    var inputElement = document.getElementById(tipo);
    var cantidad = parseInt(inputElement.value);

    if (cantidad > 1) {
      // Disminuir solo si la cantidad es mayor a 1
      inputElement.value = (cantidad - 1) + (tipo === 'habitaciones' ? ' habitación' : ' ' + tipo);

      // Verificar si se está decrementando el número de habitaciones
      if (tipo === 'habitaciones') {
        asignarAdultos(); // Asignar automáticamente adultos al decrementar habitaciones
      }
    }
  }

  function editar(tipo) {
    var inputElement = document.getElementById(tipo);
    inputElement.readOnly = false;
    inputElement.focus();
  }

  // Función para asignar automáticamente adultos según el número de habitaciones
  function asignarAdultos() {
    var habitacionesElement = document.getElementById('habitaciones');
    var adultosElement = document.getElementById('adultos');
    var cantidadHabitaciones = parseInt(habitacionesElement.value);

    // Asignar un adulto por cada habitación
    adultosElement.value = cantidadHabitaciones + " adultos";
  }
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/8aca401b21.js" crossorigin="anonymous"></script>
    <script src="../build/js/bundle.min.js"></script>
</body>

</html>