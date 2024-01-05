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
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet"> -->
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
                <a href="#"><img src="/build/img/logopng.webp" alt="logo"></a>
                <a href="#">Nosotros</a>
                <a href="#">Centros de consumo</a>
                <a href="#">Salones</a>
                <a href="#">Eventos</a>
                <a href="#">Empleados</a>
                <a href="#">Contacto</a>
            </nav>
            <div class="redes">
                <div class="redes_div">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="redes_div">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <div class="redes_div">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- <div class="imagen_header">
        <div class="imagen_header_fondo"></div>
        <img src="/build/img/inicio.webp" alt="imagen del header" class="img_header">
        <img src="/build/img/logopng.webp" alt="logo del hotel" class="logo_header">
    </div> -->

    <div class="slideshow">
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
            </li>
            <!-- <li>
				<img src="build/img/4.png" alt="">
	
			</li> -->
        </ul>

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
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="redes_div">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="redes_div">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                        <div class="redes_div">
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
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