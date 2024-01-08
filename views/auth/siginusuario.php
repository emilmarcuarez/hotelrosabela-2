<main class="contenedor seccion_slogin">
    <h3>Registro</h3>
        <?php
            foreach($errores as $error):        
        ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form method="POST" class="formulario_registro" action="/loginusuario">
        <fieldset>
                <legend>Datos personales</legend>
                <div class="field_registro">
                    <div class="r_part">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Tu nombre" id="email" require>
                    </div>
                   
                    <div class="r_part">
                        <label for="fecha">Fecha de nacimiento</label>
                        <input type="date" name="fecha" placeholder="21/02/2002" id="fecha" require>
                    </div>
                    <div class="r_part">
                        <label for="Apellido">Apellido</label>
                        <input type="apellido" name="apellido" placeholder="Apellido" id="apellido" require>
                    </div>
                    <div class="r_part">
                        <label for="sexo">Sexo</label>
                        <br>
                        <select name="sexo" id="sexo">
                            <option value="F">Hombre</option>
                            <option value="F">Mujer</option>
                            <option value="F">Prefiero no decirlo</option>
                        </select>
                    </div>
                    <div class="r_part">
                        <label for="cedula">Cedula o Pasaporte</label>
                        <input type="cedula" name="cedula" placeholder="Tu cedula" id="cedula" require>
                    </div>
                 
                </div>
                
            
          
            </fieldset>
            <fieldset>
                <legend>Datos de contacto</legend>
                <div class="field_registro2">
                    <div class="r_part2">
                        <label for="numero">Numero de telefono</label>
                        <input type="text" name="numero" placeholder="+58 414-7678192" id="numero" require>
                    </div>
                    <div class="r_part2">

                    </div>
                    <div class="r_part2">
                        <label for="countries-list">Pais</label>
                        <br>
                        <select name="countries-list" id="countries-list">
                        
                        </select>
                    </div>
                    <div class="r_part2">
                        <label for="Estado">Estado</label>
                        <input type="text" name="estado" placeholder="Estado bolivar" id="estado" require>
                    </div>
                </div>
                <div class="field_registro3">
                    <div class="r_part2">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad" placeholder="Tu ciudad" id="ciudad" require>
                    </div>
                    <div class="r_part2">
                        <label for="c_postal">Codigo postal</label>
                        <input type="number" name="codigo postal" placeholder="8050" id="c_postal" require>
                    </div>
                    <div class="r_part2">
                        <label for="direccion">Direccion</label>
                        <textarea type="text" name="direccion" placeholder="direccion" id="direccion" require></textarea>
                    </div>
                </div>
            </fieldset>
            
        
            <fieldset>
                <legend>Datos para iniciar sesion</legend>
                <div class="field_registro2">
                    <div class="r_part2">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="prueba@prueba.com" id="email" require>
                    </div>
                    <div class="r_part2">
                        <label for="password">Contarseña</label>
                        <input type="text" name="password" placeholder="contraseña" id="password" require>
                    </div>
            </fieldset>
            <div class="espacio4">

            </div>
            <input type="submit" value="Registrar" class="boton boton-rosado">
        </form>
        <!-- <hr class="mi-contrasenia"> -->
        <!-- <div class="text_login">
             <p>Al iniciar sesión o al crear una cuenta, aceptas nuestros Términos y condiciones y la Política de privacidad</p>
        <!-- <hr class="mi-contrasenia"> -->
        <!-- </div> -->
       
    </main>