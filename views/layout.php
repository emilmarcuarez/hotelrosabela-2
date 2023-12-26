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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../build/css/app.css">
    <title>Hotel Rosa bela</title>
</head>
<body>
    <div class="pre-header">
        <header>
      
            <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
            <nav class="nav" id="nav">
                <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
                <ul class="nav-list">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Reservaciones</a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                </ul>
            </nav>
        </header>
        <a href="/eventos">Eventos</a>
        <a href="/localesfrecuentes?frecuente=1">Lugares mas frecuentes</a>
        <a href="/contacto">Contactanos</a>
        <?php if($auth): ?>
                 <a href="/logout">Cerrar Sesion</a>
         <?php endif; ?>
    </div>
    <div class="redes">
        <div class="redes_">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                <path d="M16.5 7.5l0 .01"></path>
             </svg>
             <p>@encuentrapzo</p>
        </div>
        <div class="redes_">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
             </svg>
             <p>Encuentra pzo</p>
        </div>
        <?php if(!$auth2): ?>
            <div class="redes_ inire">
                <a href="/loginusuario">Iniciar sesion</a>
            </div>
            <div class="redes_ inire">
                 <a href="/siginusuario">Registrarse</a>
            </div>
            <?php endif; ?>
        <?php if($auth2): ?>
            <div class="redes_ inire">
                 <a href="/logout">Cerrar Sesion</a>
                 </div>
         <?php endif; ?>
    </div>
    <div class="header <?php echo $inicio ? 'inicio' : ''; ?> <?php echo $no ? 'no' : ''; ?>">
        <div class="cuadro"></div>
        <div class="video">   
            <video autoplay muted loop>
                <source src="build/video/parque.mp4" type="video/mp4">
            </video>
        </div>

        <div class="header_flex">
            <div class="header_titulo">
            <img src="build/img/logo.webp" alt="">
                <a href="/" class="tituloh"> <span>Encuentra</span> Puerto Ordaz</a>
            </div>
            <form class="buscador" method="GET" action="/busqueda">
                <input type="text"  id="busqueda" name="busqueda" class="buscador_inp">
                <input type="submit" value="Buscar" class="buscador_btn">
            </form>
        </div>
      
    </div>

<?php echo $contenido; ?>


   <footer class="footer">
        <p>&copy; 2023 Emilmar Cuarez y Paola Salazar. Todos los derechos reservados.</p>
   </footer> 
  <!-- Ruta local de jQuery desde node_modules -->
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
   <script src="../build/js/bundle.min.js"></script>
</body>
</html>