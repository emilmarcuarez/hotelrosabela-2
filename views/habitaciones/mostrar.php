
<main class="contenedor seccion">
    <!-- estos numeros de resultado se mandan por el header que redirecciona a la pagina principal-->
    <?php 
    if($resultado){
         $mensaje=mostrarNotificacion(intval($resultado));
        if($mensaje){?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>
        
        
        <?php } ?>
    <?php } ?>
    <div class="espacio"></div>
<a href="/admin" class="boton boton-rosado">Volver</a> 
<a href="/habitaciones/crear" class="boton boton-rosado">Nueva Habitacion</a>
<h2>Eventos</h2>
<div class="tabla_general contenedor">
    <div class="cabecera_tabla_general">

            <div class="cabecera_cont"><h2>Nro</h2></div>
            <div class="cabecera_cont"><h2>Nombre</h2></div>
            <div class="cabecera_cont"><h2>descripcion</h2></div>
            <div class="cabecera_cont"><h2>precio</h2></div>
            <div class="cabecera_cont"><h2>servicios</h2></div>
            <div class="cabecera_cont"><h2>Accioness</h2></div>
            
    </div>

    <div class="body_tabla_general">
        <!-- MOSTRAR RESULTADOS DE LA BD EN LA TABLA -->
        <?php foreach ($habitaciones as $indice => $habitacion) : ?>
            <?php if($indice%2===0){ ?>
                <div class="body_tabla_info f_grisc">
            <?php } else {?>
                <div class="body_tabla_info f_griso">
            <?php }?>
           
                <div class="body_infor_div"><p><?php echo $habitacion->id; ?> </p></div>
                <div class="body_infor_div"><p><?php echo $habitacion->nombre; ?> </p></div>
                <div><img src="../imagenes_e/<?php echo $habitacion->imagen; ?>" class="imagen-tabla" alt=""></div>
                <div>
                    <form method="POST" class="w-100" action="/eventos/eliminar">
                        <!-- ESTOS INPUT HIDDEN SIRVEN PARA MANDAR INFORMACION, QUE EN ESTE CASO ES EL ID -->
                        <input type="hidden" name="id" value="<?php echo $habitacion->id; ?>">
                        <input type="hidden" name="tipo" value="eventos">

                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>

                    <a href="/eventos/actualizar?id=<?php echo $habitacion->id; ?>" class="boton-verde-block">Actualizar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="espacio"></div>
</main>