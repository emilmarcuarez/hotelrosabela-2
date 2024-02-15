<main class="contenedor conf_cuenta_2">


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
    <h1 class="nombre-pagina">Confirmar cuenta</h1>
    <p>Ya puedes cerrar esta pagina o dirigirte a iniciar sesion si ya fue confirmada tu cuenta</p>
    <div class="acciones espacio23">
        <a href="/loginusuario">¿Tu cuenta fue confirmada? Inicia sesion</a>
        <a href="/olvide">Olvide mi contarseña</a>
    </div>

    </main>