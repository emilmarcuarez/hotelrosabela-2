<!-- <form action="/reservas/buscar" method="POST">

    <input type="hidden" name="buscador" id="buscador" value="<?php echo $usuario->id ?>">
    <input type="submit" class="boton-rosado" value="Ver reservas">
</form> -->


<div class="contenedor">

    <?php
    if ($resultado) {
        $mensaje = mostrarNotificacion(intval($resultado));
        if ($mensaje) { ?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>


        <?php } ?>
    <?php } ?>
    <a href="/reservas/buscar">Ver reservas</a>
    <div class="premios">
        <h3>Premios otorgados</h3>
        <hr>
        <div class="premios_partes">
            <?php if ($premios_usu) { ?>
                <?php foreach ($premios_usu as $premio_usu) : ?>
                    <?php foreach ($premios as $premio) : ?>
                        <?php if ($premio_usu->premio_id === $premio->id) { ?>
                            <div class="premio_part_div">
                                <p><?php echo $premio->descripcion ?></p>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
        </div>
    <?php } else { ?>
        <p>Este usuario no tiene premios asignados aun</p>
    </div>
<?php } ?>
</div><!--premios-->
<div class="premios_disponibles">
    <!-- mayor a 10 noches pero menor a 15 -->
    <?php if ($usuario->noches !== 10 && $usuario->noches < 15) { ?>
        <p>Para mayor a 10 noches tiene disponible: </p>
        <ul>
        <?php if ($premios_usu) { ?>
            <?php 
                $noche10=0;
                $noche15=0;
                $noche20=0;
                ?>
            <?php foreach ($premios as $premio) : ?>
                    <?php foreach ($premios_usu as $premio_usu) : ?>
                        <?php if(intval($premios->$noches)===10 && $premios_usu->$premio_id===$premio->id):?>
                            <?php $noche10++;?>
                        <?php endif;?>
                        <?php if(intval($premios->$noches)===15 && $premios_usu->$premio_id===$premio->id):?>
                            <?php $noche15++;?>
                        <?php endif;?>
                        <?php if(intval($premios->$noches)===20 && $premios_usu->$premio_id===$premio->id):?>
                            <?php $noche20++;?>
                        <?php endif;?>
                    <?php endforeach; ?>
                <?php endforeach; ?>


                <?php } else { ?>

                    <?php if (intval($premio->cant_noches) === 10) { ?>
                        <li>

                            <h4><?php echo $premio->descripcion ?></h4>
                            <p><?php echo $premio->mensaje ?></p>

                            <form method="POST" action="/crearPremio">
                                <input type="hidden" name="premio[premio_id]" value="<?php echo $premio->id; ?>">
                                <input type="hidden" name="premio[usuarios_id]" value="<?php echo $usuario->id; ?>">
                                <input type="hidden" name="premio[status]" value="0">
                                <input type="submit" value="enviar">
                            </form>
                        </li>
                    <?php } ?>
                <?php } ?>
        </ul>

    <?php } ?>
</div>
</div>