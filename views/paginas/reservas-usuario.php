<div class="re_usuario">
    <div class="imagen_logo_fidelizacion">
        <div class="contenedor cont_fidelizacion_img">
            <img src="/build/img/logopng_bien.webp" alt="logo del hotel">
        </div>

    </div>
    <div class="contenedor">
        <h2>Mi cuenta - <span>RB</span> Loyalty</h2>
    
        <?php if(intval($usuario->noches)>=20){?>
        
        <div class="datos_tarjeta">
            <div class="diseno_tarjeta">
                <div class="dato_tarjeta_part">
                   
                    <div class="grid_tarjeta_contenedor">
                        <div class="part_tarjeta_cont">
                        <h4>Hotel RosaBela - Platinium</h4>
                            <p><span>RB</span> loyalty</p>
                        </div>
                        <div class="part_tarjeta">
                            
                            <div class="info_tarjeta">
                                <div class="codigo_dato_tarjeta">
                                    <p><?php echo $usuario->codigo ?></p>
                                </div>
                                <div class="_dato_tarjeta">
                                    <p><?php echo $usuario->nombre ?> <?php echo $usuario->apellido ?></p>
                                </div>
                                <div class="logo_tarjeta">
                                <img src="build/img/Logo Blanco.webp" alt="">
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="escrito_datos_tarjeta">
                      <p><span>Codigo: </span> <?php echo $usuario->codigo ?></p>
                      <p><span>Nivel:</span> PLATINIUM</p>
                      <p><span>MILLAS ACUMULADAS: </span><?php echo $usuario->noches*100 ?></p>
                      <p><span>Cantidad de noches: </span><?php echo $usuario->noches?></p>
                      <p><span>Nombre y apellido: </span> <?php echo $usuario->nombre ?> <?php echo $usuario->apellido ?></p>
                    </div>
        </div>
        <?php }else{?>

            <div class="datos_tarjeta">
            <div class="diseno_tarjeta2">
                <div class="dato_tarjeta_part2">
                   
                    <div class="grid_tarjeta_contenedor">
                        <div class="part_tarjeta_cont2">
                        <h4>Hotel RosaBela - Gold</h4>
                            <p><span>RB</span> loyalty</p>
                        </div>
                        <div class="part_tarjeta">
                            
                            <div class="info_tarjeta">
                                <div class="codigo_dato_tarjeta">
                                    <p><?php echo $usuario->codigo ?></p>
                                </div>
                                <div class="_dato_tarjeta">
                                    <p><?php echo $usuario->nombre ?> <?php echo $usuario->apellido ?></p>
                                </div>
                                <div class="logo_tarjeta">
                                <img src="build/img/Logo Blanco.webp" alt="">
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="escrito_datos_tarjeta">
                      <p><span>Codigo: </span> <?php echo $usuario->codigo ?></p>
                      <?php if(intval($usuario->noches>=20)){?>
                      <p><span>Nivel:</span> PLATINIUM</p>
                        <?php }else{?>
                            <p><span>Nivel:</span> GOLD</p>
                        <?php }?>
                     
                      <p><span>MILLAS ACUMULADAS: </span><?php echo $usuario->noches*100 ?></p>
                      <p><span>Cantidad de noches: </span><?php echo $usuario->noches?></p>
                      <p><span>Nombre y apellido: </span> <?php echo $usuario->nombre ?> <?php echo $usuario->apellido ?></p>
                    </div>
        </div>
        <?php }?>
        <div class="mi-cuenta_datos">
            <div class="dato_usuario_part">
                <p><span>Nombre </span><?php echo $usuario->nombre ?> <?php echo $usuario->apellido ?></p>
            </div>
            <div class="dato_usuario_part">
                <p><span>Numero de telefono </span><?php echo $usuario->nro_telefono ?></p>
            </div>
            <div class="dato_usuario_part">
                <p><span>Correo electronico </span><?php echo $usuario->email ?></p>
            </div>
            <div class="dato_usuario_part">
                <p><span>Direccion </span><?php echo $usuario->direccion ?></p>
            </div>
            <div class="dato_usuario_part">
                <p><span>Pais </span><?php echo $usuario->pais ?></p>
            </div>
            <div class="dato_usuario_part">
                <p><span>Estado </span><?php echo $usuario->estado ?></p>
            </div>
        </div>

        <h3>Premios obtenidos</h3>
        <?php if ($premios_usuarios) { ?>
            <div class="premio_cliente_flex">
                <?php foreach ($premios as $premio) { ?>
                    <?php foreach ($premios_usuarios as $pre) {  ?>
                        <?php if ($premio->id === $pre->premio_id) { ?>
                            <div class="premio_cliente">
                                <h5><?php echo $premio->descripcion ?></h5>
                                <p class="p_break"><?php echo $premio->mensaje ?></p>
                            </div>
                        <?php } ?>

                    <?php } ?>
                <?php } ?>
            </div>
        <?php } else { ?>
            <p class="msj_premio">No tiene premios disponibles aun.</p>
        <?php } ?>

        <h3>Observa el status de cada una de sus reservas</h3>
        <div class="reservas_usuario_flex">

            <?php if ($reservas) { ?>
                <?php foreach ($reservas as $reserva) : ?>
                    <div class="cont_reserva_usu4">
                        <div class="cont_reserva_usu1">
                            <?php if ($reserva->ninos !== null & $reserva->ninos !== 0) { ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hotel-service" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8.5 10a1.5 1.5 0 0 1 -1.5 -1.5a5.5 5.5 0 0 1 11 0v10.5a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2c0 -1.38 .71 -2.444 1.88 -3.175l4.424 -2.765c1.055 -.66 1.696 -1.316 1.696 -2.56a2.5 2.5 0 1 0 -5 0a1.5 1.5 0 0 1 -1.5 1.5z" />
                                </svg>
                                <p>Reserva para <span><?php echo $reserva->ninos ?> niños</span> y <span><?php echo $reserva->adultos ?> adultos</span></p>
                            <?php } else { ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hotel-service" width="30" height="30" viewBox="0 0 24 24" stroke-width="1" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8.5 10a1.5 1.5 0 0 1 -1.5 -1.5a5.5 5.5 0 0 1 11 0v10.5a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2c0 -1.38 .71 -2.444 1.88 -3.175l4.424 -2.765c1.055 -.66 1.696 -1.316 1.696 -2.56a2.5 2.5 0 1 0 -5 0a1.5 1.5 0 0 1 -1.5 1.5z" />
                                </svg>
                                <p>Reserva para <span><?php echo $reserva->adultos ?> adultos</span></p>
                            <?php } ?>

                        </div>

                        <div class="cont_reserva_usu2">
                            <div class="cont_reserva_fecha">
                                <p><span>Fecha de ingreso: </span><?php echo date('d-m-Y', strtotime($reserva->fecha_i)); ?></p>
                                <p><span>Fecha de egreso: </span><?php echo date('d-m-Y', strtotime($reserva->fecha_e)); ?></p>
                            </div>
                            <div class="cont_reserva_datos">
                                <div class="reserva_datos_monto">
                                    <p>Habitaciones: (<?php echo $reserva->cantidad ?>)</p>
                                    <p>Monto: USD <?php echo $reserva->monto ?></p>
                                </div>
                                <div class="boton_pdf_reserva">
                                    <a href="/verPdf?id=<?php echo $reserva->id ?>">Descargar</a>
                                </div>
                            </div>
                        </div>
                        <div class="cont_reserva_usu">
                            <?php if (intval($reserva->status) === 1) { ?>
                                <p>Forma de pago: <?php echo $reserva->opcion_pago ?> - <span class="in_house">In house</span></p>
                            <?php } else if (intval($reserva->status) === 2) { ?>
                                <p>Forma de pago: <?php echo $reserva->opcion_pago ?> - <span class="pendiente_p">Pendiente</span></p>
                            <?php } else if (intval($reserva->status) === 3) { ?>
                                <p>Forma de pago: <?php echo $reserva->opcion_pago ?> - <span class="cancelada_p">Cancelada</span></p>
                            <?php } else if (intval($reserva->status) === 4) { ?>
                                <p>Forma de pago: <?php echo $reserva->opcion_pago ?> - <span class="confirmadas_p">Confirmada</span></p>
                            <?php } ?>
                            <form action="" class="form_eliminar_reserva">
                                <input type="hidden" name="id" value="<?php echo $reserva->id; ?>" id="id_reserva2">
                                <button type="submit" value="cancelar">Cancelar reserva</button>
                            </form>

                        </div>
                    </div>
                <?php endforeach; ?>
            <?php } else { ?>
                <p class="msj_premio">No ha realizado una reserva aun.</p>
            <?php } ?>
        </div>
    </div>
</div>