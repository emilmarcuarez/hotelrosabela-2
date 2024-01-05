
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
<a href="/eventos/crear" class="boton boton-rosado">Nuevo Evento</a>
<h2>Eventos</h2>
<div class="tabla_general contenedor">
    <div class="cabecera_tabla_general">

            <div class="cabecera_cont"><h2>Nro</h2></div>
            <div class="cabecera_cont"><h2>Nombre</h2></div>
            <div class="cabecera_cont"><h2>fecha</h2></div>
            <div class="cabecera_cont"><h2>Horario</h2></div>
            <div class="cabecera_cont"><h2>Imagen</h2></div>
            <div class="cabecera_cont"><h2>Accioness</h2></div>
            
    </div>

    <div class="body_tabla_general">
        <!-- MOSTRAR RESULTADOS DE LA BD EN LA TABLA -->
        <?php foreach ($eventos as $indice => $evento) : ?>
            <?php if($indice%2===0){ ?>
                <div class="body_tabla_info f_grisc">
            <?php } else {?>
                <div class="body_tabla_info f_griso">
            <?php }?>
           
                <div class="body_infor_div"><p><?php echo $evento->id; ?> </p></div>
                <div class="body_infor_div"><p><?php echo $evento->nombre; ?> </p></div>
               
                <div class="body_infor_div"><p><?php echo $evento->fecha; ?></p></div>
                <div class="body_infor_div"><p> <?php echo $evento->horario; ?></p></div>
                <div><img src="../imagenes_e/<?php echo $evento->imagen; ?>" class="imagen-tabla" alt=""></div>
                <div>
                    <form method="POST" class="w-100" action="/eventos/eliminar">
                        <!-- ESTOS INPUT HIDDEN SIRVEN PARA MANDAR INFORMACION, QUE EN ESTE CASO ES EL ID -->
                        <input type="hidden" name="id" value="<?php echo $evento->id; ?>">
                        <input type="hidden" name="tipo" value="eventos">

                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>

                    <a href="/eventos/actualizar?id=<?php echo $evento->id; ?>" class="boton-verde-block">Actualizar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="espacio"></div>
</main>