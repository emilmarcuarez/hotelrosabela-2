<main class="contenedor seccion_login">
    <h3>Iniciar sesion</h3>
        <?php
            foreach($errores as $error):        
        ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form method="POST" class="formulario_iniciar" action="/loginusuario">
        <fieldset>
                <legend>Email y password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu Email" id="email" require>

                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Tu password" id="password" require>
                <input type="submit" value="Iniciar sesion" class="boton boton-verde">
               <a href="#">Olvide mi contraseña</a>
               <!-- <hr class="mi-contrasenia"> -->
            </fieldset>
            
        </form>
        <hr class="mi-contrasenia">
        <div class="text_login">
             <p>Al iniciar sesión o al crear una cuenta, aceptas nuestros Términos y condiciones y la Política de privacidad</p>
        <!-- <hr class="mi-contrasenia"> -->
        </div>
       
    </main>