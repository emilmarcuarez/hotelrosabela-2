<main class="contenedor">
<div class="espacio"></div>
<a href="/auth/mostrarusuarios" class="boton boton-rosado">Volver</a> 

    <h1>Actualizar Usuario</h1>
    <!-- FOREACH PARA IR MOSTRANDO LOS ERRORES ALMACENADOS EN EL ARREGLO DE ERRORES EN LA PAGINA -->
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach ?>


    <!-- GET EXPONE LOS DATOS EN LA URL, POST NO LOS EXPONE Y ES MAS SEGURO. INICIO DE SESION POST. POST PARA ENVIAR DATOS, GET PARA OBTENER DATOS DE UN SERVIDOR -->
  
    <form class="formulario" method="POST">
        
    <fieldset>
            <legend>Datos personales</legend>
            <div class="field_registro">
                <div class="r_part">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="nombre" placeholder="Tu nombre" id="nombre" value="<?php echo s($usuario->nombre); ?>" require>
                </div>


                <div class="r_part">
                    <label for="Apellido">Apellido</label>
                    <input type="text" name="apellido" placeholder="Apellido" id="apellido" value="<?php echo s($usuario->apellido); ?>" require>
                </div>
                <div class="r_part">
                    <label for="fecha">Fecha de nacimiento</label>
                    <div class="fecha_sencilla">
                        <select id="year-select2"></select>
                        <input type="date" name="fecha" placeholder="21/02/2002" id="fecha" value="<?php echo s($usuario->fecha); ?>" require>
                    </div>
                </div>
                <div class="r_part">
                        <label for="sexo">Sexo</label>
                       
                        <select name="sexo" id="sexo_id">
                            <option value="M" <?php echo $usuario->sexo === 'M' ? 'selected' : ''; ?>>Hombre</option>
                            <option value="F" <?php echo $usuario->sexo === 'F' ? 'selected' : ''; ?>>Mujer</option>
                            <option value="indefinido" <?php echo $usuario->sexo === 'indefinido' ? 'selected' : ''; ?>>Prefiero no decirlo</option>
                        </select>
                    </div>
                <div class="r_part">
                    <label for="identificacion">Cedula o Pasaporte</label>
                    <input type="number" name="identificacion" placeholder="cedula o pasaporte" id="identificacion" value="<?php echo s($usuario->identificacion); ?>" require>
                </div>
                <div class="r_part">
                <label for="profesion">Selecciona tu profesión:</label>
                 
                        <select id="profesion" name="profesion" ?>">
                            <option value="abogado">Abogado</option>
                            <option value="administrador_empresas">Administrador de Empresas</option>
                            <option value="arquitecto">Arquitecto</option>
                            <option value="biologo">Biólogo</option>
                            <option value="contador">Contador</option>
                            <option value="doctor">Doctor</option>
                            <option value="geologo">Geólogo</option>
                            <option value="ingeniero_aeroespacial">Ingeniero Aeroespacial</option>
                            <option value="ingeniero_ambiental">Ingeniero Ambiental</option>
                            <option value="ingeniero_biomedico">Ingeniero Biomédico</option>
                            <option value="ingeniero_civil">Ingeniero Civil</option>
                            <option value="ingeniero_de_software">Ingeniero de Software</option>
                            <option value="ingeniero_electricista">Ingeniero Electricista</option>
                            <option value="ingeniero_en_minas">Ingeniero en Minas</option>
                            <option value="ingeniero_en_sistemas">Ingeniero en Sistemas</option>
                            <option value="ingeniero_en_telecomunicaciones">Ingeniero en Telecomunicaciones</option>
                            <option value="ingeniero_informatica">Ingeniero Informático</option>
                            <option value="ingeniero_industrial">Ingeniero Industrial</option>
                            <option value="ingeniero_mecanico">Ingeniero Mecánico</option>
                            <option value="licenciado_turismo">Licenciado en Turismo</option>
                            <option value="odontologo">Odontólogo</option>
                            <option value="industriologo">Industriologo</option>
                            <option value="profesor">Profesor</option>
                            <option value="veterinario">Veterinario</option>
                            <option value="psicologo">Psicólogo</option>
                            <option value="otra">Otra</option>
                    </select>
                </div>
                <div class="r_part">
                    <label for="ocupacion">Ocupacion</label>
                    <input type="text" name="ocupacion" placeholder="Ocupacion" id="ocupacion" value="<?php echo s($usuario->ocupacion); ?>" require>
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
                        <label for="pais">Pais</label>
                        <br>
                        <select name="pais" id="countries-list3">
                      
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
                    <textarea type="text" name="direccion" placeholder="direccion" id="direccion" require><?php echo s($usuario->direccion); ?></textarea>
                </div>
                <div class="r_part2">
                    <label for="c_postal">Codigo postal</label>
                    <input type="number" name="codigo postal" placeholder="8050" id="c_postal" value="<?php echo s($usuario->codigo_postal); ?>" require>
                </div>
            </div>
        </fieldset>


        <fieldset>
            <legend>Datos para iniciar sesion</legend>
            <div class="field_registro2">
                <div class="r_part2">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="prueba@prueba.com" id="email" value="<?php echo s($usuario->email); ?>" require>
                </div>
                <div class="r_part2">
                    <label for="contrasenia">Contraseña</label>
                    <div class="password-input-container">
                        <input type="password" name="contrasenia" placeholder="Contraseña" id="contrasenia" required>
                        <i class="fas fa-eye" id="togglePassword"></i>
                    </div>
                    <div id="passwordMessage" class="password-message"></div>
                </div>
            </div>
        </fieldset>
        <div class="espacio4">

        </div>

        <input type="submit" id="btnEnviar" value="Actualizar usuario" class="boton boton-rosado">
    </form>

</main>
<div class="espacio"></div>