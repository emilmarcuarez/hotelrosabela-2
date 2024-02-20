
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
<a href="/auth/crearlogin" class="boton boton-rosado">Nuevo Usuario</a>
<h2>Usuarios administradores</h2>
<div class="tabla_general contenedor">
    <div class="cabecera_tabla_general_emple">

            <div class="cabecera_cont"><h2>id</h2></div>
            <div class="cabecera_cont"><h2>Nombre</h2></div>
            <div class="cabecera_cont"><h2>Email</h2></div>
            <div class="cabecera_cont"><h2>Password</h2></div>
            <div class="cabecera_cont"><h2>tipo</h2></div>
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
               
                <div class="body_infor_div"><p><?php echo $usuario->email; ?></p></div>
                <div class="body_infor_div"><p> --No disponible--</p></div>
                <div class="body_infor_div"><p><?php echo $usuario->tipo; ?> </p></div>
                <div class="form_botones">
                    <form method="POST" class="w-100" action="/auth/eliminar">
                        <!-- ESTOS INPUT HIDDEN SIRVEN PARA MANDAR INFORMACION, QUE EN ESTE CASO ES EL ID -->
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="hidden" name="tipo" value="usuario_admin">

                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>

                    <a href="/auth/actualizarAdmin?id=<?php echo $usuario->id; ?>" class="boton-verde-block">Actualizar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
<div class="espacio"></div>
</main>