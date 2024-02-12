<div class="re_usuario contenedor">
    <h3>¡Observa el status de cada una de tus reservas!</h3>
    <div class="reservas_usuario_flex">

    <?php foreach($reservas as $reserva): ?>
        <div class="cont_reserva_usu">
            <div class="cont_reserva_usu1">
                <?php if( $reserva->ninos!==null & $reserva->ninos!==0){ ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hotel-service" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8.5 10a1.5 1.5 0 0 1 -1.5 -1.5a5.5 5.5 0 0 1 11 0v10.5a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2c0 -1.38 .71 -2.444 1.88 -3.175l4.424 -2.765c1.055 -.66 1.696 -1.316 1.696 -2.56a2.5 2.5 0 1 0 -5 0a1.5 1.5 0 0 1 -1.5 1.5z" />
                    </svg> 
                    <p>Reserva para <span><?php echo $reserva->ninos?> niños</span> y <span><?php echo $reserva->adultos?> adultos</span></p>
               <?php }else{ ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hotel-service" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8.5 10a1.5 1.5 0 0 1 -1.5 -1.5a5.5 5.5 0 0 1 11 0v10.5a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2c0 -1.38 .71 -2.444 1.88 -3.175l4.424 -2.765c1.055 -.66 1.696 -1.316 1.696 -2.56a2.5 2.5 0 1 0 -5 0a1.5 1.5 0 0 1 -1.5 1.5z" />
                    </svg>
                    <p>Reserva para <span><?php echo $reserva->adultos?> adultos</span></p>
               <?php } ?>
               
            </div>

            <div class="cont_reserva_usu2">
                <div class="cont_reserva_fecha">
                    <p><span>Fecha de ingreso: </span><?php echo date('d-m-Y', strtotime($reserva->fecha_i));?></p>
                    <p><span>Fecha de egreso: </span><?php echo date('d-m-Y', strtotime($reserva->fecha_e));?></p>
                </div>
                <div class="cont_reserva_datos">
                    <div class="reserva_datos_monto">
                        <p>Habitaciones: (<?php echo $reserva->cantidad ?>)</p>
                        <p>Monto: USD <?php echo $reserva->monto?></p>
                    </div>                    
                    <div class="boton_pdf_reserva">
                       <a href="/verPdf?id=<?php echo $reserva->id?>">Descargar</a>
                    </div>                   
                </div>
            </div>
            <div class="cont_reserva_usu">
                <?php if($reserva->status === 1){ ?>
                    <p>Forma de pago: <?php echo $reserva->opcion_pago?> - <span class="confirmada_r">Confirmada</span></p>
                <?php }else if($reserva->status === 2){?>
                    <p>Forma de pago: <?php echo $reserva->opcion_pago?> - <span class="pendiente_r">Pendiente</span></p>
                <?php }else if(intval($reserva->status) === 3){?>
                    <p>Forma de pago: <?php echo $reserva->opcion_pago?> - <span class="pendiente_r">Cancelada</span></p>
                <?php }?>
                    <form action="" class="form_eliminar_reserva">
                    <input type="hidden" name="id" value="<?php echo $reserva->id; ?>" id="id_reserva2">
                   <button type="submit" value="cancelar">Cancelar reserva</button>
              </form>
             
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
