<fieldset class="cc_re_act">
            <legend>
                Informacion general de los centros de consumo 
            </legend>
            <!-- el name sera el que se manda a la base de datos, lee los datos, por medio de esa variable que es el nombre que le coloquemos es name -->
            <label for="nombre">Nombre: </label>
            <input type="text" name="centro[nombre]" id="nombre" placeholder="nombre del centro de consumo" value="<?php echo s($centro->nombre); ?>">

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="centro[descripcion]" cols="30" rows="10"><?php echo s($centro->descripcion); ?></textarea>
            
            <label for="horario">Horario: </label>
            <input type="text" name="centro[horario]" id="horario" placeholder="ejm: 10:20am - 12:40pm" value="<?php echo s($centro->horario); ?>">
           
            <label for="imagen">Imagen:</label>
            <!-- con accept solo permite aceptar imagen jpeg y png-->
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="centro[imagen]">
                <?php if($centro->imagen) {?>
                    <img src="/imagenes_r/<?php echo $centro->imagen ?>" class="imagen-small">          
             <?php }?>
                    
  </fieldset>