<div class="f_registro">
     <div class="imagen_registro">
        <!-- <img src="/build/img/hap5.webp" alt=""> -->
</div>
</div>   
  

<main class="contenedor seccion_slogin">
<?php 
    if($resultado2){
         $mensaje=mostrarNotificacion(intval($resultado2));
        if($mensaje){?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>
        
        
        <?php } ?>
    <?php } ?>
    <h3>Registro</h3>
        <?php
            foreach($errores as $error):        
        ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form method="POST" class="formulario_registro" action="/siginusuario">
        <fieldset>
                <legend>Datos personales</legend>
                <div class="field_registro">
                    <div class="r_part">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Tu nombre" id="nombre" require>
                    </div>
                   
           
                    <div class="r_part">
                        <label for="Apellido">Apellido</label>
                        <input type="apellido" name="apellido" placeholder="Apellido" id="apellido" require>
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
                        <br>
                        <select name="sexo" id="sexo">
                            <option value="M">Hombre</option>
                            <option value="F">Mujer</option>
                            <option value="indefinido">Prefiero no decirlo</option>
                        </select>
                    </div>
                    <div class="r_part">
                        <label for="identificacion">Cedula o Pasaporte</label>
                        <input type="number" name="identificacion" placeholder="cedula o pasaporte" id="identificacion" require>
                    </div>
                </div>
            </fieldset>


            <fieldset>
                <legend>Datos de contacto</legend>
                <div class="field_registro2">
                    <div class="r_part2">
                        <label for="nro_telefono">Numero de telefono</label>
                        <input type="text" name="nro_telefono" placeholder="+58 414-7678192" id="nro_telefono" require>
                    </div>
                    <div class="r_part2">
                        <label for="pais">Pais</label>
                        <br>
                        <select name="pais" id="countries-list">
                        
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
                        <label for="direccion">Direccion</label>
                        <textarea type="text" name="direccion" placeholder="direccion" id="direccion" require></textarea>
                    </div>
                    <div class="r_part2">
                        <label for="c_postal">Codigo postal</label>
                        <input type="number" name="codigo postal" placeholder="8050" id="c_postal" require>
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
                        <label for="contrasenia">Contarseña</label>
                        <input type="text" name="contrasenia" placeholder="contraseña" id="contrasenia" require>
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