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
           
            <label for="imagen">Logo del restaurante:</label>
<<<<<<< HEAD
            <p>La imagen debe ser de 200px x 170px (solo png y jpg)</p>
=======
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
            <!-- con accept solo permite aceptar imagen jpeg y png-->
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="centro[imagen]">
                <?php if($centro->imagen) {?>
                    <img src="/imagenes_r/<?php echo $centro->imagen ?>" class="imagen-small">          
             <?php }?>

             <label for="imagen">Imagen del restaurante:</label>
<<<<<<< HEAD
             <p>La imagen debe ser de 1100px x 500px (solo png y jpg)</p>
=======
             <p>La imagen debe ser de 1100px x 500px</p>
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
            <!-- con accept solo permite aceptar imagen jpeg y png-->
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="centro[imagen2]">
                <?php if($centro->imagen2) {?>
                    <img src="/imagenes_r/<?php echo $centro->imagen2 ?>" class="imagen-small">          
             <?php }?>
             <label for="plato">Plato especial: </label>
            <input type="text" name="centro[plato_especial]" id="plato_especial" placeholder="ejm: pasta a la carbonara" value="<?php echo s($centro->plato_especial); ?>">
           
            <label for="plato">Link del menu: </label>
            <input type="text" name="centro[link]" id="link" placeholder="ejm: https/...." value="<?php echo s($centro->link); ?>">
                    
  </fieldset>