
<main class="contenedor seccion_contacto">
        <h2>Contacto</h2>
    
    <?php
    if($mensaje){?>
        <p class='alerta exito'> <?php echo $mensaje; ?> </p>;
    <?php } ?>
    
    
        <h3>Llene el formulario de Contacto</h3>

        <form class="formulario" action="/contacto" method="POST">
            <fieldset>
                <legend>Información Personal y mensaje</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]" required>
                <label for="nombre">Apellido</label>
                <input type="text" placeholder="Tu apellido" id="apellido" name="contacto[apellido]" required>           
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
            </fieldset>

            <fieldset>
                <legend>Metodo de contacto</legend>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input  type="radio" value="telefono" id="contactar-telefono" name="contacto[contactar]" required>

                    <label for="contactar-email">E-mail</label>
                    <input  type="radio" value="email" id="contactar-email" name="contacto[contactar]" required>
                </div>
                <div id="contacto"></div>
              

            </fieldset>

            <input type="submit" value="Enviar" class="boton-rosado">
        </form>
        <div class="espacio"></div>
    </main>