
<div class="logo_rosa_bela_pgsecundarias_slogo">

    <img src="build/img/logopng_bien2.webp" alt="" class="logo_negro_hotel">
   
</div>

<div class="contenedor premios_cont">

    <?php
    if ($resultado) {
        $mensaje = mostrarNotificacion(intval($resultado));
        if ($mensaje) { ?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>


        <?php } ?>
    <?php } ?>
    <a href="/noches" class="ver_reservas_premios">Volver</a>
    <a href="/mostrar_usuario?id=<?php echo $usuario->id ?>" class="ver_reservas_premios">Ver reservas</a>

    <div class="premios">
        <h3>Premios otorgados</h3>
        
        <div class="premios_partes">
            <?php if ($premios_usu) { ?>
                <?php foreach ($premios_usu as $premio_usu) : ?>
                    <?php foreach ($premios as $premio) : ?>
                        <?php if ($premio_usu->premio_id === $premio->id) { ?>
                            <div class="premio_part_div">
                                
                                <p><?php echo $premio->descripcion ?> - Por tener mas de: <?php echo $premio->cant_noches?> noches</p>
                                <?php if(intval($premio_usu->usado)===0){?>
                                        <form action="/actualizar-premio" method="POST">
                                        <input type="hidden" name="id_premio_usu" id="id_premio_usu" value="<?php echo $premio_usu->id ?>">
                                        
                                        <input type="submit" value="usado">
                                    </form>
                                    <?php }else{ ?>
                                        <p>Usado el: <?php echo date('d-m-Y', strtotime($premio_usu->fecha_usado)) ?></p>
                                    <?php } ?>
                            

                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
        </div>
    <?php } else { ?>
        <p class="no-premio">Este usuario no tiene premios asignados aun</p>
    </div>
<?php } ?>
</div><!--premios-->

</div>