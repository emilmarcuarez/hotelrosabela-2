<main class="contenedor seccion">
<div class="espacio"></div>
<a href="/empleados/mostrar" class="boton boton-rosado">Volver</a> 

    <h1>Registrar empleados</h1>

   

    <!-- FOREACH PARA IR MOSTRANDO LOS ERRORES ALMACENADOS EN EL ARREGLO DE ERRORES EN LA PAGINA -->
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach ?>


    <!-- GET EXPONE LOS DATOS EN LA URL, POST NO LOS EXPONE Y ES MAS SEGURO. INICIO DE SESION POST. POST PARA ENVIAR DATOS, GET PARA OBTENER DATOS DE UN SERVIDOR -->
    <!-- enctype sirve para indicar al formulario que tendra archivos que enviar, como imagenes -->
    <form class="formulario" method="POST" action="/empleados/crear" enctype="multipart/form-data">
        <?php include 'formulario.php' ;?>
        <input type="submit" id="btnEnviar" value="Registrar empleado" class="boton boton-rosado">
    </form>

</main>
<div class="espacio"></div>