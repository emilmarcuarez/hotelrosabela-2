
<fieldset class="cc_re_act">
            <legend>
                Informacion general de los empleados 
            </legend>
            <!-- el name sera el que se manda a la base de datos, lee los datos, por medio de esa variable que es el nombre que le coloquemos es name -->
            <label for="nombre">Nombre: </label>
            <input type="text" name="empleado[nombre]" id="nombre" placeholder="nombre del empleado" value="<?php echo s($empleado->nombre); ?>">

            <label for="nombre">Apellido: </label>
            <input type="text" name="empleado[apellido]" id="apellido" placeholder="apellido del empleado" value="<?php echo s($empleado->apellido); ?>">

            <label for="cargo">Cargo:</label>
            <input type="text" name="empleado[cargo]" id="cargo" placeholder="cargo del empleado" value="<?php echo s($empleado->cargo); ?>">
            
            <label for="imagen">Imagen:</label>
<<<<<<< HEAD
            <p>La imagen debe ser: 200px x 200px (Solo formato jpg y png)</p>
=======
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
            <!-- con accept solo permite aceptar imagen jpeg y png-->
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="empleado[imagen]">
              <?php if($empleado->imagen) {?>
                    <img src="/imagenes_t/<?php echo $empleado->imagen ?>" class="imagen-small">          
             <?php }?>
             
  </fieldset>