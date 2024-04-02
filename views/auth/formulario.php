<fieldset class="cc_re_act">
            <legend>
                Usuario administrador
            </legend>
        
            <label for="nombre">Nombre: </label>
            <input type="text" name="usuario[nombre]" id="nombre" placeholder="nombre del usuario" value="<?php echo s($usuario->nombre); ?>">
            <label for="email">Email:</label>
            <input type="email" name="usuario[email]" id="nombre" placeholder="Email del usuario" value="<?php echo s($usuario->email); ?>">
            <label for="tipo">Tipo: </label>
            <ul>
                <li>TIPO: 1 -> Usuario administrador general</li>
                <li>TIPO: 2 -> Usuario administrador de recepcion</li>
                <li>TIPO: 3 -> Usuario administrador de comercializacion</li>
                <li>TIPO: 4 -> Usuario administrador de redes sociales</li>
            </ul>
            <input type="number" name="usuario[tipo]" id="tipo" placeholder="ejm: 1 o 2" value="<?php echo s($usuario->tipo); ?>"  min="1" max="4">
            <label for="password">Contraseña:</label>
            <input type="password" name="usuario[password]" id="password" placeholder="ingrese la contraseña">
  </fieldset>