
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
    
    <div class="acciones">
        <a href="/loginusuario">Inicia sesion</a>
        <a href="/olvide">Olvide mi contarseña</a>
    </div>