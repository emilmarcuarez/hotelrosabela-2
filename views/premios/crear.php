<div class="logo_rosa_bela_pgsecundarias_slogo">

    <img src="../build/img/logopng_bien2.webp" alt="" class="logo_negro_hotel">
   
</div>
<main class="contenedor">
<div class="espacio"></div>
<a href="/premios/mostrar" class="boton boton-rosado">Volver</a> 

    <h1>Registrar Premio</h1>

   

    <!-- FOREACH PARA IR MOSTRANDO LOS ERRORES ALMACENADOS EN EL ARREGLO DE ERRORES EN LA PAGINA -->
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach ?>

    <form class="formulario" method="POST" action="/premios/crear">
        <?php include 'formulario.php' ;?>
        <input type="submit" id="btnEnviar" value="Registrar premio" class="boton boton-rosado">
    </form>

</main>
<div class="espacio"></div>