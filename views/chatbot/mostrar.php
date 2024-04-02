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
    <div class="espacio3"></div>
<a href="/admin" class="boton boton-rosado">Volver</a> 
<a href="/chatbot/crear" class="boton boton-rosado">Nueva consulta</a>
<div class="espacio3"></div>
<h2>Chatbot</h2>
<div class="tabla_general">
    <div class="cabecera_tabla_general_beneficio">

            <div class="cabecera_cont"><h2>Nro</h2></div>
            <div class="cabecera_cont"><h2>Queries</h2></div>
            <div class="cabecera_cont"><h2>Replies</h2></div>
            <div class="cabecera_cont"><h2>Accioness</h2></div>
    </div>

    <div class="body_tabla_general">
        <!-- MOSTRAR RESULTADOS DE LA BD EN LA TABLA -->
        <?php foreach ($chatbots as $indice => $chatbot) : ?>
            <?php if($indice%2===0){ ?>
                <div class="body_tabla_info3 f_grisc">
            <?php } else {?>
                <div class="body_tabla_info3 f_griso">
            <?php }?>
           
                <div class="body_infor_div"><p><?php echo $chatbot->id; ?> </p></div>
                <div class="body_infor_div"><p><?php echo $chatbot->queries; ?> </p></div>
               
                <div class="body_infor_div"><p class="descripcion"><?php echo $chatbot->replies; ?></p></div>
                <div class="botones_tabla">
                    <form method="POST" class="w-100" action="/chatbot/eliminar">
                        <!-- ESTOS INPUT HIDDEN SIRVEN PARA MANDAR INFORMACION, QUE EN ESTE CASO ES EL ID -->
                        <input type="hidden" name="id" value="<?php echo $chatbot->id; ?>">
                        <input type="hidden" name="tipo" value="chatbot">

                        <input type="submit" class="boton-rojo-block_usuarios" value="Eliminar">
                    </form>

                    <a href="/chatbot/actualizar?id=<?php echo $chatbot->id; ?>" class="boton-verde-block">Actualizar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="espacio"></div>
</main>