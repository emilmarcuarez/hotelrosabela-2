<fieldset class="cc_re_act">
            <legend>
                Usuario administrador
            </legend>
        
            <label for="nombre">Nombre: </label>
            <input type="text" name="usuario[nombre]" id="nombre" placeholder="nombre del usuario" value="<?php echo s($usuario->nombre); ?>">
            <label for="email">Email:</label>
            <input type="email" name="usuario[email]" id="nombre" placeholder="Email del usuario" value="<?php echo s($usuario->email); ?>">
            <label for="tipo">Tipo: </label>
            <input type="number" name="usuario[tipo]" id="tipo" placeholder="ejm: 1 o 2" value="<?php echo s($usuario->tipo); ?>">
            <label for="password">Contraseña:</label>
            <input type="password" name="usuario[password]" id="password" placeholder="ingrese la contraseña">
  </fieldset>