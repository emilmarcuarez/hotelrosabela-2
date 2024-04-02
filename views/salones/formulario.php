<fieldset class="cc_re_act">
            <legend>
                Informacion general de los Salones
            </legend>
            <!-- el name sera el que se manda a la base de datos, lee los datos, por medio de esa variable que es el nombre que le coloquemos es name -->
            <label for="nombre">Nombre: </label>
            <input type="text" name="salon[nombre]" id="nombre" placeholder="nombre del salon" value="<?php echo s($salon->nombre); ?>">

            <label for="imagen">Imagen:</label>
<<<<<<< HEAD
            <p>La imagen debe ser: 886px x 554px (Solo formato jpg y png)</p>
=======
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
            <!-- con accept solo permite aceptar imagen jpeg y png-->
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="salon[imagen]">
              <?php if($salon->imagen) {?>
                    <img src="/imagenes_s/<?php echo $salon->imagen ?>" class="imagen-small">          
             <?php }?>
            
            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="salon[descripcion]" cols="30" rows="10"><?php echo s($salon->descripcion); ?></textarea>    

             <label for="capacidad">Capacidad (solo el NUMERO de personas maximas): </label>
            <input type="number" name="salon[capacidad]" id="capacidad" placeholder="capacidad maxima del salon: 450" value="<?php echo s($salon->capacidad); ?>">
             <label for="precio">Precio de alquiler aprox (solo el NUMERO de personas maximas): </label>
            <input type="number" name="salon[precio]" id="precio" placeholder="Precio en USD ($)" value="<?php echo s($salon->precio); ?>">
  </fieldset>