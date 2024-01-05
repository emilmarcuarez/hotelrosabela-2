<fieldset class="cc_re_act">
            <legend>
                Informacion general de los centros de consumo 
            </legend>
            <!-- el name sera el que se manda a la base de datos, lee los datos, por medio de esa variable que es el nombre que le coloquemos es name -->
            <label for="nombre">Nombre: </label>
            <input type="text" name="empleado[nombre]" id="nombre" placeholder="nombre del empleado" value="<?php echo s($empleado->nombre); ?>">

            <label for="nombre">Apellido: </label>
            <input type="text" name="empleado[apellido]" id="apellido" placeholder="apellido del empleado" value="<?php echo s($empleado->apellido); ?>">

            <label for="cargo">Cargo:</label>
            <input type="text" name="empleado[cargo]" id="cargo" placeholder="cargo del empleado" value="<?php echo s($empleado->cargo); ?>">
            
            <label for="imagen">Imagen:</label>
            <!-- con accept solo permite aceptar imagen jpeg y png-->
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="empleado[imagen]">
              <?php if($empleado->imagen) {?>
                    <img src="/imagenes_t/<?php echo $empleado->imagen ?>" class="imagen-small">          
             <?php }?>
             
            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="empleado[descripcion]" cols="30" rows="10"><?php echo s($empleado->descripcion); ?></textarea>
             
  </fieldset>