<fieldset class="cc_re_act">
            <legend>
                Beneficio
            </legend>

            <label for="nombre">Descripcion: </label>
            <input type="text" name="beneficio[descripcion]" id="descripcion_beneficio" placeholder="Descripcion del beneficio" value="<?php echo s($beneficio->descripcion); ?>">
            <label for="noches">Noches: </label>
            <input type="number" name="beneficio[noches]" id="noches_beneficios" placeholder="10 o 28" value="<?php echo s($beneficio->noches); ?>">
          
  </fieldset>