<div class="contenedor">

<form class="formulario_usuario_act" action="#">
<h4>¡Hola de nuevo <span><?php echo $usuario->nombre?></span>!</h4>
<p>Actualiza tus datos cada vez que creas necesario</p>
<fieldset>
            <!-- el name sera el que se manda a la base de datos, lee los datos, por medio de esa variable que es el nombre que le coloquemos es name -->
        
        <!-- <fieldset> -->
                <legend>Datos personales</legend>
                <div class="field_registro">
                    <div class="r_part">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Tu nombre" id="nombre_id" value="<?php echo s($usuario->nombre); ?>" require>
                    </div>
                    <div class="r_part">
                        <label for="fecha">Fecha de nacimiento</label>
                       <div class="fecha_sencilla">
                            <select id="year-select"></select>
                            <input type="date" name="fecha" placeholder="21/02/2002" id="fecha_id" value="<?php echo s($usuario->fecha); ?>" require>
                       </div>
                      
                       
                    </div>
                    <div class="r_part">
                        <label for="Apellido">Apellido</label>
                        <input type="apellido" name="apellido" placeholder="Apellido" value="<?php echo s($usuario->apellido); ?>" id="apellido_id"  require>
                    </div>
                    <div class="r_part">
                        <label for="sexo">Sexo</label>
                        <br>
                        <select name="sexo" id="sexo_id">
                            <option value="M" <?php echo $usuario->sexo === 'M' ? 'selected' : ''; ?>>Hombre</option>
                            <option value="F" <?php echo $usuario->sexo === 'F' ? 'selected' : ''; ?>>Mujer</option>
                            <option value="indefinido" <?php echo $usuario->sexo === 'indefinido' ? 'selected' : ''; ?>>Prefiero no decirlo</option>
                        </select>
                    </div>
                    <div class="r_part">
                        <label for="identificacion">Cedula o Pasaporte</label>
                        <input type="number" name="identificacion" placeholder="cedula o pasaporte" id="identificacion_id" value="<?php echo s($usuario->identificacion); ?>" require>
                    </div>
                </div>
            </fieldset>


            <fieldset>
                <legend>Datos de contacto</legend>
                <div class="field_registro2">
                    <div class="r_part2">
                        <label for="nro_telefono">Numero de telefono</label>
                        <input type="text" name="nro_telefono" placeholder="+58 414-7678192" id="nro_telefono_id" value="<?php echo s($usuario->nro_telefono); ?>" require>
                    </div>
                    <div class="r_part2">
                        <label for="pais">Pais</label>
                        <br>
                        <select name="pais" id="countries-list2">
                      
                        </select>
                    </div>
                    <div class="r_part2">
                        <label for="Estado">Estado</label>
                        <input type="text" name="estado" placeholder="Estado bolivar" id="estado_id" value="<?php echo s($usuario->estado); ?>" require>
                    </div>
                </div>
                <div class="field_registro3">
                    <div class="r_part2">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad" placeholder="Tu ciudad" id="ciudad_id" value="<?php echo s($usuario->ciudad); ?>" require>
                    </div>
                    <div class="r_part2">
                        <label for="direccion">Direccion</label>
                        <textarea type="text" name="direccion" placeholder="direccion" id="direccion_id" require><?php echo s($usuario->direccion); ?></textarea>
                    </div>
                    <div class="r_part2">
                        
                        <label for="c_postal">Codigo postal</label>
                        <input type="number" name="codigo postal" placeholder="8050" id="c_postal_id" value="<?php echo s($usuario->codigo_postal); ?>" require>
                    </div>
                </div>
            </fieldset>
            <input type="text" class="id_usuario_act" name="usuario_id" value="<?php echo $_SESSION['usuario_id']?>" hidden>
            <input type="text" id="email_id" name="email" value="<?php echo s($usuario->email);?>" hidden>
            <input type="text" id="contarsenia_id" name="contrasenia" value="<?php echo s($usuario->contrasenia);?>" hidden>
            <!-- <input type="submit" value="Actualizar" class="boton boton-rosado"> -->
            <button id="btn_act_usuario">Actualizar</button>
        </form>
  <!-- </fieldset> -->
  </div>