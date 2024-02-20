<fieldset class="cc_re_act">
            <legend>
                Premios
            </legend>
        
            <label for="descripcion">descripcion: </label>
           
            <input type="text" name="premio[descripcion]" id="descripcion" placeholder="Descripcion principal del premio" value="<?php echo s($premio->descripcion); ?>">
            <label for="mensaje">Mensaje:</label>
            <textarea name="premio[mensaje]" id="mensaje"><?php echo s($premio->mensaje);?></textarea>

            <label for="cant_noches">cantidad de noches: </label>
            <input type="number" name="premio[cant_noches]" id="cant_noches" placeholder="Ejemplo: Mayor a 10 noches. Ingrese: 10" value="<?php echo s($premio->cant_noches); ?>">
          
  </fieldset>