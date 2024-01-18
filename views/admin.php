
<main class="contenedor seccion">
    <!-- estos numeros de resultado se mandan por el header que redirecciona a la pagina principal-->
    <?php 
    if($resultado){
         $mensaje=mostrarNotificacion(intval($resultado));
        if($mensaje){?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>
        
        
        <?php } ?>
    <?php } ?>

<div class="espacio"></div>
<h2>Bienvenida "@nombreusuario"</h2>

<div class="adm_btn">
    <a href="/centrosconsumo/mostrar">Centros de consumo</a>
    <a href="/eventos/mostrar">Eventos</a>
    <a href="/habitaciones/mostrar">Habitaciones</a>
    <a href="/reservas/mostrar">Reservas</a>
    <a href="/salones/mostrar">Salones</a>
    <a href="/empleados/mostrar">Empleados</a>
    <a href="/chef/mostrar">Chef</a>
    <a href="/usuarios/mostrar">Usuarios</a>
    <a href="/administradores/mostrar">Usuarios Administradores</a>
</div>

</main>