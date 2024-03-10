<fieldset class="cc_re_act">
    <legend>
        Informacion general de los eventos
    </legend>
    <!-- el name sera el que se manda a la base de datos, lee los datos, por medio de esa variable que es el nombre que le coloquemos es name -->
    <label for="nombre">Nombre: </label>
    <input type="text" name="evento[nombre]" id="nombre" placeholder="nombre del evento" value="<?php echo s($evento->nombre); ?>">

    <label for="descripcion">Descripcion</label>
    <textarea id="descripcion" name="evento[descripcion]" cols="30" rows="10"><?php echo s($evento->descripcion); ?></textarea>

    <label for="imagen">Imagen:</label>
    <p>La imagen debe ser 440px x 508px</p>
    <!-- con accept solo permite aceptar imagen jpeg y png-->
    <input type="file" id="imagen" accept="image/jpeg, image/png" name="evento[imagen]">
    <?php if ($evento->imagen) { ?>
        <img src="/imagenes_e/<?php echo $evento->imagen ?>" class="imagen-small">
    <?php } ?>

    <label for="fecha">fecha:</label>
    <input type="date" id="fechaEvento" name="evento[fecha]" value="<?php echo s($evento->fecha) ?>">

    <label for="horario">Horario: </label>
    <input type="text" name="evento[horario]" id="horario" placeholder="ejm: 10:20am - 12:40pm" value="<?php echo s($evento->horario); ?>">

    <legend>Seleccione el area en que sera el evento</legend>

    <div class="lugar_evento">
        <div class="opcion_lugar">
            <label for="salon_evento">Salon</label>
            <input type="radio" value="Salon" id="salon_evento" name="evento[tipo_lugar]" required <?php if ($evento->tipo_lugar === 'Salon') : ?> checked <?php endif; ?>>
        </div>

        <div class="opcion_lugar">
            <label for="centro_evento">Centro de consumo</label>
            <input type="radio" value="Centro de consumo" id="centro_evento" name="evento[tipo_lugar]" required <?php if ($evento->tipo_lugar === 'Centro de consumo') : ?> checked <?php endif; ?>>
        </div>
    </div>
    <div id="lugar_evento_text"></div>






    <div class="eventos_form no-mostrar" id="evento_centro_detalles">
        <label for="centro">Seleccione el lugar en donde se realizara el evento: </label>
        <?php
        $encontrado = 0;
        //   centros de consumo
        if($evento->tipo_lugar==='Centro de consumo'){
                foreach ($evento_centros as $evento_centro2) : ?>
                <?php if (intval($evento_centro2->id_eventos) === intval(s($evento->id))) :
                    $encontrado = 1; ?>
                    <?php foreach ($centro as $centros) : ?>
                        <div class="eventos_form_radio">
                            <label><?php echo $centros->nombre; ?></label>
                            <input type="radio" name="evento_centro[id_centros_consumo]" value="<?php echo $centros->id; ?>" <?php if (intval($evento_centro2->id_centros_consumo) === intval($centros->id)) : ?> checked <?php endif; ?>>
                            <!-- <input type="hidden" name="evento_centro[id_eventos]" value="<?php echo s($evento->id); ?>"> -->
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; 
            
        }else{?>
            <?php
            if ($encontrado === 0) {
                foreach ($centro as $centros) : ?>
                    <div class="eventos_form_radio">
                        <label><?php echo $centros->nombre; ?></label>
                        <input type="radio" name="evento_centro[id_centros_consumo]" value="<?php echo $centros->id; ?>">
                        <!-- <input type="hidden" name="evento_centro[id_eventos]" value="<?php echo s($evento->id); ?>"> -->
                    </div>
            <?php endforeach;
            } 
        }?>
        
    </div>
    <div class="eventos_form no-mostrar" id="evento_salon_detalles">
        <label for="centro">Seleccione el lugar en donde se realizara el evento: </label>
        <?php
        $encontrado=0;
            // no esta en centros de consumo y fue seleccionado salones:
      if($evento->tipo_lugar==='Salon'){
            foreach ($evento_salones as $evento_salon2) : 
       ?>
            <?php if (intval($evento_salon2->id_eventos) === intval(s($evento->id))) :
                $encontrado = 1; ?>
                <?php foreach ($salon as $salones) : ?>
                    <div class="eventos_form_radio">
                        <label><?php echo $salones->nombre; ?></label>
                        <input type="radio" name="evento_salon[id_salon]" value="<?php echo $salones->id; ?>" <?php if (intval($evento_salon2->id_salon) === intval($salones->id)) : ?> checked <?php endif; ?>>
                        <!-- <input type="hidden" name="evento_salon[id_eventos]" value="<?php echo s($evento->id); ?>"> -->
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; 
        }else{?>
        <!-- Ahora, se esta registrando un evento y no hay nada seleccionado aun, por ende se cargan normal los salones -->
        <?php
        if ($encontrado === 0) {
            foreach ($salon as $salones) : ?>
                <div class="eventos_form_radio">
                    <label><?php echo $salones->nombre; ?></label>
                    <input type="radio" name="evento_salon[id_salon]" value="<?php echo $salones->id; ?>">
    
                </div>
            <?php endforeach; ?>

        <?php } 
    }?>



    </div>

</fieldset>