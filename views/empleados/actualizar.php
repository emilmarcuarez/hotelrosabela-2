<main class="contenedor seccion">
    <div class="espacio"></div>
    <a href="/empleados/mostrar" class="boton boton-rosado">Volver</a> 

    <h1>Actualizar los datos de "<?php echo s($empleado->nombre); ?>"</h1>

    <!-- <a href="/admin" class="boton boton-verde">Volver</a> -->

    <!-- FOREACH PARA IR MOSTRANDO LOS ERRORES ALMACENADOS EN EL ARREGLO DE ERRORES EN LA PAGINA -->
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include 'formulario.php' ;?>
        <input type="submit" id="btnEnviar" value="Actualizar empleado" class="boton boton-rosado">
    </form>
</main>
<div class="espacio"></div>