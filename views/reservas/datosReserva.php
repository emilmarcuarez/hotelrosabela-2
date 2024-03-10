<div class="logo_rosa_bela_pgsecundarias_slogo">

    <img src="../build/img/logopng_bien2.webp" alt="" class="logo_negro_hotel">
   
</div>
<main class="contenedor reserva_ver">
    <a  class="btn-volver" href="/reservas/mostrar">Volver</a>
    <h4>Reserva codigo: <span><?php echo $reserva->codigo ?></span></h4>
    <hr>
    <h4>Datos del usuario que hizo la reserva</h4>
    <div class="datos_usuario">

        <p>Nombre y apellido: <?php echo $reserva->nombres ?> <?php echo $reserva->apellidos ?></p>
        <p>Email: <?php echo $reserva->email ?></p>
        <p>Numero de telefono: <?php echo $reserva->nro_telefono ?></p>

    </div>
    <hr>
    <?php if($beneficio){?>
    <h4>BENEFICIO ADQUIRIDO POR SER ALIADO RB-ROYALTY</h4>
    <div class="datos_usuario">

        <p><?php echo $beneficio->descripcion ?></p>

    </div>
    <hr>
   <?php }?>
    <h4>Datos de la reserva</h4>
    <div class="grid_datos_reserva">


        <div class="datos_reserva">


            <?php $fechaInicio = new DateTime($reserva->fecha_i);
            $fechaFin = new DateTime($reserva->fecha_e);

            // Calcula la diferencia entre las dos fechas
            $diferencia = $fechaInicio->diff($fechaFin); ?>
            <p><span> Codigo: </span><?php echo $reserva->codigo; ?></p>
            <p><span> Fecha de entrada: </span><?php echo date('d-m-Y', strtotime($reserva->fecha_i)); ?></p>
            <p> <span> Fecha de salida: </span><?php echo date('d-m-Y', strtotime($reserva->fecha_e)); ?></p>
            <p><span>Noches:</span> <?php echo $diferencia->days ?></p>
            <p><span>Cantidad de habitaciones:</span> <?php echo $reserva->cantidad ?></p>
            <p class="solicitudes_p"><span>Solicitudes:<span> <?php echo $reserva->solicitudes ?></p>

            <p><span>Niños:</span> <?php echo $reserva->ninos ?></p>
            <p><span>Adultos:</span> <?php echo $reserva->adultos ?></p>
            <p><span>Hora de llegada: </span><?php echo $reserva->hora_ll ?></p>
            <?php if ($reserva->traslado) { ?>
                <p><span>Traslado hasta el hotel:</span> Si</p>
            <?php } else { ?>
                <p><span>Traslado hasta el hotel:</span> No</p>
            <?php } ?>
            <p><span>Monto:<span> USD <?php echo $reserva->monto ?></p>
            <p><span>Opcion de pago:<span> <?php echo $reserva->opcion_pago ?></p>
        </div>
        <div class="img_datosreserva">
            <p>Imagen del pago</p>
            <?php if ($reserva->imagen !== 'ninguna' && $reserva->imagen) { ?>
                <img src="../imagenes_reserva/<?php echo $reserva->imagen; ?>" alt="imagen del pago de la reserva">
            <?php } else { ?>
                <p>No hay foto del pago</p>
            <?php } ?>
            <?php if(intval($reserva->status)===3 || intval($reserva->status)===1 || intval($reserva->status)===4){?>
                <p>Ya no se puede 'confirmar' esta reserva</p>
            <?php }else{?>

            <form class="form_confirmada_reserva" action="">
               <input type="hidden" name="id_reserva_conf" value="<?php echo $reserva->id;?>" id="id_reserva_conf">
               <button class="boton-verde_confirmado" value="Confirmada">Confirmar</button>
            </form>
            <?php }?>
        
        </div>
    </div>
    <?php if  ($reserva->opcion_pago === 'Transferencia' ||  $reserva->opcion_pago === 'Bank of america') {?>
        <h4>Datos del pago</h4>
        <div class="datos_pago_otros">
            <p><span>Fecha del pago: </span> <?php echo date('d-m-Y', strtotime($reserva->fecha_pago)); ?></p>
            <p><span>Banco: </span> <?php echo $reserva->banco ?></p>
            <p><span>Referencia: </span> <?php echo $reserva->referencia ?></p>
            <p><span>Numero de identidad: </span> <?php echo $reserva->numero_i?></p>
            <p><span>Nacionalidad: </span> <?php echo $reserva->nacionalidad?></p>
            <p><span>Monto de la transferencia: </span> <?php echo $reserva->monto_transferencia ?></p>
        </div>

    <?php }?>
    <div class="espacio"></div>
    <h4>Habitaciones</h4>
    <table class="tabla_reserva">
    
        <tr>
            <th>Tipo</th>
            <th>Precio por noche c/d</th>
            <th>Precio por noche s/d</th>
            <th>Cantidad c/d</th>
            <th>Cantidad s/d</th>
        </tr>

        <?php foreach ($habitacionesReserva as $habr) : ?>
            <?php foreach ($habitaciones as $habitacion) : ?>
                <?php if ($habr->habitaciones_id === $habitacion->id) { ?>
                    <tr>

                        <td><?php echo $habitacion->nombre ?></td>
                        <td><?php echo $habitacion->preciocd ?></td>
                        <td><?php echo $habitacion->preciosd ?></td>
                        <td><?php echo $habr->cantidad_d ?></td>
                        <td><?php echo $habr->cantidad_s ?></td>
                    </tr>
                <?php } ?>
            <?php endforeach ?>
        <?php endforeach ?>
    </table>

</main>