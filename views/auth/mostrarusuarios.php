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
<div class="espacio3"></div>
<h2>Usuarios</h2>
<div class="tabla_general">
    <div class="cabecera_tabla_general_emple">
            <div class="cabecera_cont"><h2>id</h2></div>
            <div class="cabecera_cont"><h2>Nombre</h2></div>
            <div class="cabecera_cont"><h2>Apellido</h2></div>
            <div class="cabecera_cont"><h2>Identificacion</h2></div>
            <div class="cabecera_cont"><h2>Email</h2></div>
            <div class="cabecera_cont"><h2>Acciones</h2></div>
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
                <div class="body_infor_div"><p><?php echo $usuario->apellido; ?></p></div>
                <div class="body_infor_div"><p><?php echo $usuario->identificacion; ?></p></div>
                <div class="body_infor_div"><p><?php echo $usuario->email; ?> </p></div>
                <div class="form_botones">
                    <form method="POST" class="w-100" action="/auth/eliminarUsuario">
                        <!-- ESTOS INPUT HIDDEN SIRVEN PARA MANDAR INFORMACION, QUE EN ESTE CASO ES EL ID -->
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="hidden" name="tipo" value="usuario">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    <a href="/auth/actualizarUsuario?id=<?php echo $usuario->id; ?>" class="boton-verde-block">Actualizar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
<div class="espacio"></div>
</main>