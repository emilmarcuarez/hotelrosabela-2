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
                <?php if($evento->imagen) {?>
                    <img src="/imagenes_e/<?php echo $evento->imagen ?>" class="imagen-small">          
                    <?php }?>
            
            <label for="fecha">fecha:</label>
            <input type="date" id="fechaReserva" name="evento[fecha]" value= "<?php echo s($evento->fecha)?>">

            <label for="horario">Horario: </label>
            <input type="text" name="evento[horario]" id="horario" placeholder="ejm: 10:20am - 12:40pm" value="<?php echo s($evento->horario); ?>">
           
            <label for="centro">Seleccione el centro de consumo en donde se realizara el evento: </label>
            <div class="eventos_form">
                 <?php foreach ($centro as $centros): ?>
                    <div class="eventos_form_radio">
                      <label><?php echo $centros->nombre;?></label>
                        <input type="radio" 
                        name="evento[centros_consumo_id]" 
                        value="<?php echo $centros->id; ?>"
                        <?php if (intval(s($evento->centros_consumo_id)) === intval($centros->id)):?> 
                                checked
                        <?php endif; ?>>
                    </div>        
                <?php endforeach; ?>
            </div>
           
        </fieldset>
