
<main class="panel_grid">

    <div class="part_panel_administrativo">
        <div class="contenedor">

       <div class="cont_panel_2">
            <img src="build/img/logor.webp" alt="">
            <h2>Panel administrativo</h2>
       </div>
    
         <h3>Iniciar sesion</h3>
        <?php
            foreach($errores as $error):        
        ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form method="POST" class="formulario_iniciar" action="/login">
        <fieldset>
                <legend>Email y password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu Email" id="email" require>

                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="password" id="password" require>
                <input type="submit" value="Iniciar sesion" class="boton boton-verde">
              
               <!-- <hr class="mi-contrasenia"> -->
            </fieldset>
            
        </form>
        </div>
    </div>

    <!-- parte 2 -->
    <div class="part_panel_administrativo2">
        <img src="build/img/evento3.webp" alt="">
    </div>

</main>