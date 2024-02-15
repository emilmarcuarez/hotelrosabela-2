<main class="contenedor recuperar_pagina">
    <h1>Recuperar contraseña</h1>
    <p class="descripcion_contrasenia">Coloca tu nueva contraseña a continuacion</p>

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

<?php if(!$error){ ?>
    <form class="formulario form-recuperar" method="POST">
        <div class="campo2">
            <label for="contrasenia">Contraseña nueva</label>
            <input
                type="password"
                id="contrasenia"
                name="contrasenia"
                placeholder="nueva contraseña"
            />
        </div>
        <input type="submit" class="boton" value="Guardar Nuevo Password">

    </form>
 <?php } ?>
    <div class="acciones">
        <a href="/loginusuario">¿Ya tienes cuenta? Iniciar sesion</a>
        <a href="/siginusuario">¿Aun no tienes cuenta? Obtener una</a>
    </div>
</main>
