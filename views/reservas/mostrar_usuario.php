<div class="logo_rosa_bela_pgsecundarias_slogo">

    <img src="../build/img/logopng_bien2.webp" alt="" class="logo_negro_hotel">
   
</div>
<main class="contenedor reservas_administrador">
    <!-- estos numeros de resultado se mandan por el header que redirecciona a la pagina principal-->
    <?php 
    if($resultado){
         $mensaje=mostrarNotificacion(intval($resultado));
        if($mensaje){?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>
        
        
        <?php } ?>
    <?php } ?>
    <div class="espacio"></div>
<a href="/premios?id=<?php echo $usuario->id;?>" class="boton boton-rosado">Volver</a> 
<!-- <a href="/centrosconsumo/crear" class="boton boton-rosado">Nuevo Centro de Consumo</a> -->
<div class="espacio3"></div>
<h2>Reservas</h2>
<?php if($reservas){?>

<div class="tabla_general">
    <div class="cabecera_tabla_general">

            <div class="cabecera_cont"><h2>Usuario</h2></div>
            <div class="cabecera_cont"><h2>Codigo</h2></div>
            <div class="cabecera_cont"><h2>Opcion de pago</h2></div>
            <div class="cabecera_cont"><h2>Solicitudes especiales</h2></div>
            <div class="cabecera_cont"><h2>Status</h2></div>
            <div class="cabecera_cont"><h2>Acciones</h2></div>

    </div>

    <div class="body_tabla_general">
        <!-- MOSTRAR RESULTADOS DE LA BD EN LA TABLA -->
        <?php foreach ($reservas as $indice => $reserva) : ?>

             
            <?php if($indice%2===0){ ?>
                <div class="body_tabla_info f_grisc">
            <?php } else {?>
                <div class="body_tabla_info f_griso">
            <?php }?>
                

                        <div class="body_infor_div"><p><?php echo $usuario->nombre; ?> <?php echo $usuario->apellido; ?> </p></div>
                    
              
                
                <div class="body_infor_div"><p><?php echo $reserva->codigo; ?> </p></div>
                <div class="body_infor_div"><p> <?php echo $reserva->opcion_pago; ?></p></div>
                <?php if(!$reserva->solicitudes){?>
                    <div class="body_infor_div"><p>No hay solicitudes especiales</p></div>
                <?php }else{?>
                    <div class="body_infor_div"><p class="descripcion"><?php echo $reserva->solicitudes; ?></p></div>
                
                    <?php }?>
                <?php if(intval($reserva->status)===2){ ?>
                    <div class="body_infor_div"><p class="pendiente_p">Pendiente</p></div>
                    <div class="form_reservas">
                    <form class="form_recibida_reserva" action="">
                        <input type="hidden" name="id_reserva" value="<?php echo $reserva->id;?>" id="id_reserva">
                        <button class="boton-rojo-block_reservas" value="Recibida">In house</button>
                    </form> 
                    <a href="/reservas/datosReserva2?id=<?php echo $reserva->id; ?>" >Ver reserva</a>
                </div>
                <?php }else if(intval($reserva->status)===1){ ?>
                    <?php if (strtotime($reserva->fecha_e) < strtotime(date('Y/m/d'))) { ?>
                                <div class="body_infor_div">
                                    <p class="in_house">Estadia exitosa</p>
                                </div>
                            <?php } else { ?>
                                <div class="body_infor_div">
                                    <p class="in_house">In house</p>
                                </div>


                            <?php } ?>
                    <!-- <div class="body_infor_div"><p class="in_house">In house</p></div> -->
                    <div class="form_reservas">
                    
                    <a href="/reservas/datosReserva2?id=<?php echo $reserva->id; ?>" >Ver reserva</a>
                </div>
                <?php }else if(intval($reserva->status)===3){ ?>
                    <div class="body_infor_div"><p class="cancelada_p">Cancelada</p></div>
                    <div class="form_reservas">
                    
                    <a href="/reservas/datosReserva2?id=<?php echo $reserva->id; ?>" >Ver reserva</a>
                </div>
                    <?php }else if(intval($reserva->status)===4){ ?>
                    <div class="body_infor_div"><p class="confirmadas_p">Confirmada</p></div>
                    <div class="form_reservas">
                    <form class="form_recibida_reserva" action="">
                        <input type="hidden" name="id_reserva" value="<?php echo $reserva->id;?>" id="id_reserva">
                        <button class="boton-rojo-block_reservas" value="Recibida">In house</button>
                    </form> 
                    <a href="/reservas/datosReserva2?id=<?php echo $reserva->id; ?>" >Ver reserva</a>
                </div>
                <?php } ?>
                

  
            </div>
          
 
        <?php endforeach; ?>
    </div>
</div>
</div>
<?php }else{?>
    <p class="centrar_texto">Este usuario no ha realizado reservas aun.</p>
<?php }?>
<div class="espacio"></div>
</main>