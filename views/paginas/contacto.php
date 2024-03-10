<div class="logo_rosa_bela_pgsecundarias_slogo">

    <img src="build/img/logopng_bien2.webp" alt="" class="logo_negro_hotel">
   
</div>


<main class="contenedor seccion_contacto">
        <h2>Contacto</h2>
    
    <?php
    if($mensaje){?>
        <p class='alerta exito'> <?php echo $mensaje; ?> </p>
    <?php } ?>
    
    <div class="opciones_contacto">
     <h4>Contáctanos a traves de los siguientes medios</h4> 
     <div class="opciones_contacto2"> 
    <div class="red_contacto"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1" stroke="#030303" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
  <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M16.5 7.5l0 .01" />
</svg> @hotelrosabela</div>
        <div class="red_contacto"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1" stroke="#030303" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
</svg> Hotel Rosa Bela</div>
        <div class="red_contacto"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="44" height="44" viewBox="0 0 24 24" stroke-width="1" stroke="#030303" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
  <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
</svg> +58 414-7689235</div>
        <div class="red_contacto"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world-www" width="44" height="44" viewBox="0 0 24 24" stroke-width="1" stroke="#030303" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M19.5 7a9 9 0 0 0 -7.5 -4a8.991 8.991 0 0 0 -7.484 4" />
  <path d="M11.5 3a16.989 16.989 0 0 0 -1.826 4" />
  <path d="M12.5 3a16.989 16.989 0 0 1 1.828 4" />
  <path d="M19.5 17a9 9 0 0 1 -7.5 4a8.991 8.991 0 0 1 -7.484 -4" />
  <path d="M11.5 21a16.989 16.989 0 0 1 -1.826 -4" />
  <path d="M12.5 21a16.989 16.989 0 0 0 1.828 -4" />
  <path d="M2 10l1 4l1.5 -4l1.5 4l1 -4" />
  <path d="M17 10l1 4l1.5 -4l1.5 4l1 -4" />
  <path d="M9.5 10l1 4l1.5 -4l1.5 4l1 -4" />
</svg>Llenando el formulario de contacto</div>
     </div>
    </div>
    
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