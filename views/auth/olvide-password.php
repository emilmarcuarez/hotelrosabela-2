<!-- <h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuación</p> -->
<div class="logo_rosa_bela_pgsecundarias_slogo">

    <img src="../build/img/logopng_bien2.webp" alt="" class="logo_negro_hotel">
   
</div>
<main class="contenedor seccion_login">
    <h3>Olvide mi contraseña</h3>

    <?php
    foreach($alertas as $key => $mensajes):
        foreach($mensajes as $mensaje):
?>
    <div class="alerta <?php echo $key; ?>">
        <?php echo $mensaje; ?>
    </div>
<?php
        endforeach;
    endforeach;
?>

<form class="formulario_iniciar formulario" action="/olvide" method="POST">
    <fieldset>
        <legend>Email</legend>

         <label for="email">E-mail</label>
         <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"
            require />

      
        <input type="submit" value="Enviar Instrucciones" class="boton boton-verde">
    </fieldset>

    <!-- <input type="submit" class="boton" value="Enviar Instrucciones"> -->
</form>

<div class="acciones">
    <a href="/loginusuario">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear Una</a>
</div>
</main>