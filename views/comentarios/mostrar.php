<main class="contenedor reservas_administrador">
    <!-- estos numeros de resultado se mandan por el header que redirecciona a la pagina principal-->
    <?php
    if ($resultado) {
        $mensaje = mostrarNotificacion(intval($resultado));
        if ($mensaje) { ?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>


        <?php } ?>
    <?php } ?>
    <div class="espacio"></div>
    <a href="/admin" class="boton boton-rosado">Volver</a>
    <!-- <a href="/centrosconsumo/crear" class="boton boton-rosado">Nuevo Centro de Consumo</a> -->
    <h2>Comentarios</h2>

    <div class="tabla_general">
        <div class="cabecera_tabla_general">

            <div class="cabecera_cont">
                <h2>Centro de consumo</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Usuario</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Mensaje</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Creado</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Valor de estrellas</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Acciones</h2>
            </div>

        </div>

        <div class="body_tabla_general">
            <!-- MOSTRAR RESULTADOS DE LA BD EN LA TABLA -->
            <?php foreach ($comentarios as $indice => $comentario) : ?>

                <?php if ($indice % 2 === 0) { ?>
                    <div class="body_tabla_info f_grisc">
                    <?php } else { ?>
                        <div class="body_tabla_info f_griso">
                        <?php } ?>

                        <?php foreach ($centros as $centro) : ?>
                            <?php if ($centro->id === $comentario->centros_consumo_id) { ?>
                                <div class="body_infor_div">
                                    <p class="p_break"><?php echo $centro->nombre; ?> </p>
                                </div>
                            <?php  break; } ?>
                        <?php endforeach; ?>

                        <?php foreach ($usuarios as $usuario) : ?>
                            <?php if ($usuario->id === $comentario->usuarios_id) { ?>
                                <div class="body_infor_div">
                                    <p><?php echo $usuario->nombre; ?> <?php echo $usuario->apellido; ?></p>
                                </div>
                            <?php
                            break; } ?>
                        <?php endforeach; ?>

                        <div class="body_infor_div">
                            <p class="p_break"> <?php echo $comentario->mensaje; ?></p>
                        </div>
                        <div class="body_infor_div">
                            <p class="p_break"><?php echo $comentario->creado; ?></p>
                        </div>
                        <div class="body_infor_div">
                            <p class="p_break"><?php echo $comentario->valor; ?></p>
                        </div>
     
                            <div>
                                <form method="POST" class="w-100" action="/comentarios/eliminar">
                                   
                                    <input type="hidden" name="id" value="<?php echo $comentario->id; ?>">
                                    <input type="hidden" name="tipo" value="comentarios">

                                    <input type="submit" class="boton-rojo-block" value="Eliminar">
                                </form>
                            </div>
                            </div>
                    <?php endforeach; ?>
                        </div>
                    </div>


    <div class="espacio"></div>
</main>