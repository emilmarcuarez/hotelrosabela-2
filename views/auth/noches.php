
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

<h2>Usuarios - Plan de fidelizacion</h2>
<div class="tabla_general">
    <div class="cabecera_tabla_general_noches">

            <div class="cabecera_cont"><h2>Nro</h2></div>
            <div class="cabecera_cont"><h2>Nombre</h2></div>
            <div class="cabecera_cont"><h2>Apellido</h2></div>
            <div class="cabecera_cont"><h2>Identificacion</h2></div>
            <div class="cabecera_cont"><h2>Noches</h2></div>
            <div class="cabecera_cont"><h2>Premios</h2></div>
            <div class="cabecera_cont"><h2>Acciones</h2></div>

    </div>

    <div class="body_tabla_general_noches">
        <!-- MOSTRAR RESULTADOS DE LA BD EN LA TABLA -->
        <?php foreach ($usuarios as $indice => $usuario) : ?>
            <?php if($indice%2===0){ ?>
                <div class="body_tabla_info f_grisc">
            <?php } else {?>
                <div class="body_tabla_info f_griso">
            <?php }?>
           
                <div class="body_infor_div"><p><?php echo $usuario->id; ?> </p></div>
                <div class="body_infor_div"><p class="descripcion p_break"><?php echo $usuario->nombre; ?> </p></div>
               
                <div class="body_infor_div"><p><?php echo $usuario->apellido; ?></p></div>
                <div class="body_infor_div"><p> <?php echo $usuario->identificacion; ?></p></div>
                <div class="body_infor_div"><p class="bold"><?php echo $usuario->noches; ?></p></div>
                <div class="body_infor_div">
                    <?php foreach($premios as $premio):
                            if($premio->usuarios_id === $usuario->id){?>
                                <p><?php echo $premio->premio; ?></p>
                            <?php } ?>
                    <?php endforeach; ?>
                 </div>
                <div class="botones_tabla">
                    <form method="POST" class="w-100" action="/usuario/eliminar">
                        <!-- ESTOS INPUT HIDDEN SIRVEN PARA MANDAR INFORMACION, QUE EN ESTE CASO ES EL ID -->
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="hidden" name="tipo" value="usuario">

                        <input type="submit" class="boton-rojo-block_usuarios" value="Eliminar">
                    </form>

                    <a href="/premios?id=<?php echo $usuario->id; ?>" class="boton-verde-block">Premios</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
<div class="espacio"></div>
</main>