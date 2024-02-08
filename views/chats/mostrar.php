
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
<!-- <a href="/chats/crear" class="boton boton-rosado">Nuevo Centro de Consumo</a> -->
<h2>Chats</h2>
<div class="tabla_general contenedor">
    <div class="cabecera_tabla_general">

            <div class="cabecera_cont"><h2>Nro</h2></div>
            <div class="cabecera_cont"><h2>Nombre</h2></div>
            <div class="cabecera_cont"><h2>Identificacion</h2></div>
            <div class="cabecera_cont"><h2>Numero de telefono</h2></div> 
            <div class="cabecera_cont"><h2>Mensajes sin leer</h2></div> 
            <div class="cabecera_cont"><h2>Accioness</h2></div>

    </div>

    <div class="body_tabla_general">
        <!-- MOSTRAR RESULTADOS DE LA BD EN LA TABLA -->
        <?php foreach ($usuarios as $indice => $usuario) : ?>
            <?php if($indice%2===0){ ?>
                <div class="body_tabla_info f_grisc">
            <?php } else {?>
                <div class="body_tabla_info f_griso">
            <?php }?>
           
                <div class="body_infor_div"><p><?php echo $usuario->id; ?> </p></div>
                <div class="body_infor_div"><p><?php echo $usuario->nombre; ?> </p></div>
               
                <div class="body_infor_div"><p><?php echo $usuario->identificacion; ?></p></div>
                <div class="body_infor_div"><p> <?php echo $usuario->nro_telefono; ?></p></div>
                <div class="body_infor_div"><p>2</p></div>
                <div>
                    <form method="POST" class="w-100" action="/chats/eliminar">
                    
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="hidden" name="tipo" value="chat">

                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>

                    <a href="/chats/responder?id=<?php echo $usuario->id;?>" class="boton-verde-block">Responder</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="espacio"></div>
</main>