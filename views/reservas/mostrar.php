<div class="logo_rosa_bela_pgsecundarias_slogo">

    <img src="../build/img/logopng_bien2.webp" alt="" class="logo_negro_hotel">

</div>
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
    <div class="espacio3"></div>
    <!-- <a href="/centrosconsumo/crear" class="boton boton-rosado">Nuevo Centro de Consumo</a> -->
    <h2>Reservas</h2>
    <p>Se puede buscar por: nombre, apellido, correo electronico y codigo de la reserva.</p>
    <div class="flex_busqueda">

        <form class="buscador_reservar" method="POST" action="/reservas/buscar">
            <input type="text" name="buscador" id="buscador">
            <input type="submit" class="boton-rosado" value="Buscar">
        </form>
        <form action="/reservas/mostrar">
            <input type="submit" class="boton-verde-recargar" value="Recargar">
        </form>
    </div>
    <div class="tabla_general">
        <div class="cabecera_tabla_general">

            <div class="cabecera_cont">
                <h2>Usuario</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Codigo</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Opcion de pago</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Solicitudes especiales</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Status</h2>
            </div>
            <div class="cabecera_cont">
                <h2>Acciones</h2>
            </div>

        </div>

        <div class="body_tabla_general">
            <!-- MOSTRAR RESULTADOS DE LA BD EN LA TABLA -->
            <?php foreach ($reservas as $indice => $reserva) : ?>


                <?php if ($indice % 2 === 0) { ?>
                    <div class="body_tabla_info f_grisc">
                    <?php } else { ?>
                        <div class="body_tabla_info f_griso">
                        <?php } ?>


                        <div class="body_infor_div">
                            <p><?php echo $reserva->email; ?> <?php echo $usuario->apellido; ?> </p>
                        </div>



                        <div class="body_infor_div">
                            <p><?php echo $reserva->codigo; ?> </p>
                        </div>
                        <div class="body_infor_div">
                            <p> <?php echo $reserva->opcion_pago; ?></p>
                        </div>
                        <?php if (!$reserva->solicitudes) { ?>
                            <div class="body_infor_div">
                                <p>No hay solicitudes especiales</p>
                            </div>
                        <?php } else { ?>
                            <div class="body_infor_div">
                                <p class="descripcion"><?php echo $reserva->solicitudes; ?></p>
                            </div>

                        <?php } ?>
                        <?php if (intval($reserva->status) === 2) { ?>
                            <div class="body_infor_div">
                                <p class="pendiente_p">Pendiente</p>
                            </div>
                            <div class="form_reservas">
                                <form class="form_recibida_reserva" action="">
                                    <input type="hidden" name="id_reserva" value="<?php echo $reserva->id; ?>" id="id_reserva">
                                    <button class="boton-rojo-block_reservas" value="Recibida">In house</button>
                                </form>
                                <a href="/reservas/datosReserva?id=<?php echo $reserva->id; ?>">Ver reserva</a>
                            </div>
                        <?php } else if (intval($reserva->status) === 1) { ?>
                            <?php if (strtotime($reserva->fecha_e) < strtotime(date('Y/m/d'))) { ?>
                                <div class="body_infor_div">
                                    <p class="in_house">Estadia exitosa</p>
                                </div>
                            <?php } else { ?>
                                <div class="body_infor_div">
                                    <p class="in_house">In house</p>
                                </div>


                            <?php } ?>
                            <div class="form_reservas">
                                <a href="/reservas/datosReserva?id=<?php echo $reserva->id; ?>">Ver reserva</a>
                            </div>
                        <?php } else if (intval($reserva->status) === 3) { ?>
                            <div class="body_infor_div">
                                <p class="cancelada_p">Cancelada</p>
                            </div>
                            <div class="form_reservas">

                                <a href="/reservas/datosReserva?id=<?php echo $reserva->id; ?>">Ver reserva</a>
                            </div>
                        <?php } else if (intval($reserva->status) === 4) { ?>
                            <div class="body_infor_div">
                                <p class="confirmadas_p">Confirmada</p>
                            </div>
                            <div class="form_reservas">
                                <form class="form_recibida_reserva" action="">
                                    <input type="hidden" name="id_reserva" value="<?php echo $reserva->id; ?>" id="id_reserva">
                                    <button class="boton-rojo-block_reservas" value="Recibida">In house</button>
                                </form>
                                <a href="/reservas/datosReserva?id=<?php echo $reserva->id; ?>">Ver reserva</a>
                            </div>
                        <?php } ?>



                        </div>
                    <?php endforeach; ?>
                    </div>
        </div>
        <div class="espacio"></div>
</main>