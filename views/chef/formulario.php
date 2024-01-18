<fieldset class="cc_re_act">
            <legend>
                Informacion general de los chef 
            </legend>
            <!-- el name sera el que se manda a la base de datos, lee los datos, por medio de esa variable que es el nombre que le coloquemos es name -->
            <label for="nombre">Nombre: </label>
            <input type="text" name="chef[nombre]" id="nombre" placeholder="nombre del chef" value="<?php echo s($chef->nombre); ?>">

            <label for="nombre">Apellido: </label>
            <input type="text" name="chef[apellido]" id="apellido" placeholder="apellido del chef" value="<?php echo s($chef->apellido); ?>">
             
            <label for="centro">Seleccione el centro de consumo en donde labora el chef: </label>
            <div class="eventos_form">
                 <?php foreach ($centro as $centros): ?>
                    <div class="eventos_form_radio">
                      <label><?php echo $centros->nombre;?></label>
                        <input type="radio" 
                        name="chef[centros_consumo_id]" 
                        value="<?php echo $centros->id; ?>"
                        <?php if (intval(s($chef->centros_consumo_id)) === intval($centros->id)):?> 
                                checked
                        <?php endif; ?>>
                    </div>  
                <?php endforeach; ?>
            </div>
             
            <label for="imagen">Foto del chef:</label>
            <!-- con accept solo permite aceptar imagen jpeg y png-->
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="chef[imagen]">
              <?php if($chef->imagen) {?>
                    <img src="/imagenes_c/<?php echo $chef->imagen ?>" class="imagen-small">          
             <?php }?>

           <label for="descripcion">Descripcion:</label>
          <textarea id="descripcion" name="chef[descripcion]" cols="30" rows="10"><?php echo s($chef->descripcion); ?></textarea>
             
  </fieldset>