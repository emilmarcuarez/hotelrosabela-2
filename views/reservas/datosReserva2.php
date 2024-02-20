<main class="contenedor reserva_ver">
    <a  class="btn-volver" href="/mostrar_usuario?id=<?php echo $usuario->id?>">Volver</a>
    <h4>Reserva codigo: <span><?php echo $reserva->codigo ?></span></h4>
    <hr>
    <h4>Datos del usuario que hizo la reserva</h4>
    <div class="datos_usuario">

        <p>Nombre y apellido: <?php echo $usuario->nombre ?> <?php echo $usuario->apellido ?></p>
        <p>Identificacion: <?php echo $usuario->identificacion ?></p>
        <p>Numero de telefono: <?php echo $usuario->nro_telefono ?></p>
        <p>Pais: <?php echo $usuario->pais ?></p>
        <p>Estado: <?php echo $usuario->estado ?></p>
        <p>Ciudad: <?php echo $usuario->ciudad ?></p>
        <p>Direccion: <?php echo $usuario->direccion ?></p>
        <p>Email: <?php echo $usuario->email ?></p>
    </div>
    <hr>
    <h4>Datos de la reserva</h4>
    <div class="grid_datos_reserva">


        <div class="datos_reserva">


            <?php $fechaInicio = new DateTime($reserva->fecha_i);
            $fechaFin = new DateTime($reserva->fecha_e);

            // Calcula la diferencia entre las dos fechas
            $diferencia = $fechaInicio->diff($fechaFin); ?>
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