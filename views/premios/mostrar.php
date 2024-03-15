<div class="logo_rosa_bela_pgsecundarias_slogo">

    <img src="../build/img/logopng_bien2.webp" alt="" class="logo_negro_hotel">
   
</div>
<main class="contenedor">
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
<a href="/premios/crear" class="boton boton-rosado">Nuevo premio</a>
<div class="espacio3"></div>
<h2>Premios</h2>
<div class="tabla_general">
    <div class="cabecera_tabla_general_chef">

            <div class="cabecera_cont"><h2>Nro</h2></div>
            <div class="cabecera_cont"><h2>Descripcion</h2></div>
            <div class="cabecera_cont"><h2>Mensaje</h2></div>
            <div class="cabecera_cont"><h2>Cantidad de noches</h2></div>
            <div class="cabecera_cont"><h2>Accioness</h2></div>
   </div>

    <div class="body_tabla_general">
        <!-- MOSTRAR RESULTADOS DE LA BD EN LA TABLA -->
        <?php foreach ($premios as $indice => $premio) : ?>
            <?php if($indice%2===0){ ?>
                <div class="body_tabla_info2 f_grisc">
            <?php } else {?>
                <div class="body_tabla_info2 f_griso">
            <?php }?>
           
                <div class="body_infor_div"><p><?php echo $premio->id; ?> </p></div>
                <div class="body_infor_div"><p class="descripcion"><?php echo $premio->descripcion; ?> </p></div>
               
                <div class="body_infor_div"><p class="descripcion"><?php echo $premio->mensaje; ?></p></div>
                <div class="body_infor_div"><p> <?php echo $premio->cant_noches; ?></p></div>
                <div>
                    <form method="POST" class="w-100" action="/premios/eliminar">
                        <!-- ESTOS INPUT HIDDEN SIRVEN PARA MANDAR INFORMACION, QUE EN ESTE CASO ES EL ID -->
                        <input type="hidden" name="id" value="<?php echo $premio->id; ?>">
                        <input type="hidden" name="tipo" value="premio">

                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>

                    <a href="/premios/actualizar?id=<?php echo $premio->id; ?>" class="boton-verde-block">Actualizar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="espacio"></div>
</main>