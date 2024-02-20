<!-- <form action="/reservas/buscar" method="POST">

    <input type="hidden" name="buscador" id="buscador" value="<?php echo $usuario->id ?>">
    <input type="submit" class="boton-rosado" value="Ver reservas">
</form> -->


<div class="contenedor premios_cont">

    <?php
    if ($resultado) {
        $mensaje = mostrarNotificacion(intval($resultado));
        if ($mensaje) { ?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>


        <?php } ?>
    <?php } ?>
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
                                        <p>Usado el: <?php echo date('d-m-Y', strtotime($premio_usu->fecha)) ?></p>
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
<div class="premios_disponibles">
    <!-- mayor a 10 noches pero menor a 15 -->
    <?php if ($usuario->noches > 10 && $usuario->noches < 15) { ?>
        <h5>Para mayor a 10 noches tiene disponible: </h5>
        <ul>
        <?php if ($premios_usu) { ?>
            <?php 
                $noche10=0;
                $noche15=0;
                $noche20=0;
                ?>
                 
                 <?php foreach ($premios as $premio) : ?>
                            <?php if (intval($premio->cant_noches) === 10) : 
                         foreach ($premios_usu as $premio_usu) : 
                             if($premio_usu->premio_id ===$premio->id):
                                $noche10=1;
                             endif;
                          endforeach; 
                    endif;
                endforeach; ?>
                    
                    <?php if($noche10===0){ ?>
                        <?php foreach ($premios as $premio) : ?>
                            <?php if (intval($premio->cant_noches) === 10) { ?>
                                <li>

                                    <h4><?php echo $premio->descripcion ?></h4>
                                    <p class="p_break"><?php echo $premio->mensaje ?></p>

                                    <form method="POST" action="/crearPremio">
                                        <input type="hidden" name="premio[premio_id]" value="<?php echo $premio->id; ?>">
                                        <input type="hidden" name="premio[usuarios_id]" value="<?php echo $usuario->id; ?>">
                                        <input type="hidden" name="premio[status]" value="0">
                                        <input type="hidden" name="premio[usado]" value="0">
                                        <input type="submit" value="enviar">
                                        <input type="submit" value="Usado">
                                    </form>
                                </li>
                            <?php } ?>
                         <?php endforeach; ?>

                    <?php }else{ ?>
                        <li>Ya se le fue enviado su premio de las 10 noches</li>
                        
                    <?php } ?>

                <?php } else { ?>
                   <?php foreach ($premios as $premio) : ?>
                    <?php if (intval($premio->cant_noches) === 10) { ?>
                        <li>

                            <h4><?php echo $premio->descripcion ?></h4>
                            <p class="p_break"><?php echo $premio->mensaje ?></p>

                            <form method="POST" action="/crearPremio">
                                <input type="hidden" name="premio[premio_id]" value="<?php echo $premio->id; ?>">
                                <input type="hidden" name="premio[usuarios_id]" value="<?php echo $usuario->id; ?>">
                                <input type="hidden" name="premio[status]" value="0">
                                <input type="hidden" name="premio[usado]" value="0">
                                <input type="submit" value="enviar">
                            </form>
                        </li>
                    <?php } ?>
                    <?php endforeach; ?>
                <?php } ?>
        </ul>

    <?php } ?>
</div>
</div>