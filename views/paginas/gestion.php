<h4>¡Hola de nuevo <?php echo $usuario->nombre?>!</h4>
<p>Actualiza tus datos cada vez que creas necesario</p>

<form method="POST" class="formulario_usuario_act" action="/actualizar-usuario">
<fieldset class="cc_re_act">
            <!-- el name sera el que se manda a la base de datos, lee los datos, por medio de esa variable que es el nombre que le coloquemos es name -->
        
        <!-- <fieldset> -->
                <legend>Datos personales</legend>
                <div class="field_registro">
                    <div class="r_part">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Tu nombre" id="email" value="<?php echo s($usuario->nombre); ?>" require>
                    </div>
                    <div class="r_part">
                        <label for="fecha">Fecha de nacimiento</label>
                        <input type="date" name="fecha" placeholder="21/02/2002" id="fecha" value="<?php echo s($usuario->fecha); ?>" require>
                    </div>
                    <div class="r_part">
                        <label for="Apellido">Apellido</label>
                        <input type="apellido" name="apellido" placeholder="Apellido" value="<?php echo s($usuario->apellido); ?>" id="apellido"  require>
                    </div>
                    <div class="r_part">
                        <label for="sexo">Sexo</label>
                        <br>
                        <select name="sexo" id="sexo">
                            <option value="M">Hombre</option>
                            <option value="F">Mujer</option>
                            <option value="indefinido">Prefiero no decirlo</option>
                        </select>
                    </div>
                    <div class="r_part">
                        <label for="identificacion">Cedula o Pasaporte</label>
                        <input type="number" name="identificacion" placeholder="cedula o pasaporte" id="identificacion" value="<?php echo s($usuario->identificacion); ?>" require>
                    </div>
                </div>
            </fieldset>


            <fieldset>
                <legend>Datos de contacto</legend>
                <div class="field_registro2">
                    <div class="r_part2">
                        <label for="nro_telefono">Numero de telefono</label>
                        <input type="text" name="nro_telefono" placeholder="+58 414-7678192" id="nro_telefono" value="<?php echo s($usuario->nro_telefono); ?>" require>
                    </div>
                    <div class="r_part2">

                    </div>
                    <div class="r_part2">
                        <label for="pais">Pais</label>
                        <br>
                        <select name="pais" id="countries-list">
                        
                        </select>
                    </div>
                    <div class="r_part2">
                        <label for="Estado">Estado</label>
                        <input type="text" name="estado" placeholder="Estado bolivar" id="estado" value="<?php echo s($usuario->estado); ?>" require>
                    </div>
                </div>
                <div class="field_registro3">
                    <div class="r_part2">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad" placeholder="Tu ciudad" id="ciudad" value="<?php echo s($usuario->ciudad); ?>" require>
                    </div>
                    <div class="r_part2">
                        <label for="direccion">Direccion</label>
                        <textarea type="text" name="direccion" placeholder="direccion" id="direccion" require><?php echo s($usuario->direccion); ?>"</textarea>
                    </div>
                    <div class="r_part2">
                        <label for="c_postal">Codigo postal</label>
                        <input type="number" name="codigo postal" placeholder="8050" id="c_postal" value="<?php echo s($usuario->codigo_postal); ?>" require>
                    </div>
                </div>
            </fieldset>

            <input type="submit" value="Actualizar" class="boton boton-rosado">
        </form>
  <!-- </fieldset> -->