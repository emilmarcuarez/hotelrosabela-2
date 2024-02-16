
    <!-- estos numeros de resultado se mandan por el header que redirecciona a la pagina principal-->
<?php session_start();?>
<div class="cont_admi_grid">


<div class="adm_btn">
<?php if ($_SESSION['login']) { ?>
    <a href="/centrosconsumo/mostrar">Centros de consumo</a>
    <a href="/eventos/mostrar">Eventos</a>
    <a href="/habitaciones/mostrar">Habitaciones</a>
    <a href="/reservas/mostrar">Reservas</a>
    <a href="/chats/mostrar2">Chats</a>
    <a href="/salones/mostrar">Salones</a>
    <a href="/empleados/mostrar">Empleados</a>
    <a href="/chef/mostrar">Chef</a>
    <a href="/usuarios/mostrar">Usuarios</a>
    <a href="/auth/mostrar">Usuarios Administradores</a>
  <?php } ?>
    <a href="/reservas/mostrar">Reservas</a>
    <a href="/chats/mostrar2">Chats</a>
    <a href="/noches">Noches</a>
</div>


<main class="cont_admi_iamgen">
<h2>Bienvenida "<?php echo $_SESSION['usuario']?>"</h2>
<?php 
    if($resultado){
         $mensaje=mostrarNotificacion(intval($resultado));
        if($mensaje){?>
            <p class="alerta exito"><?php echo s($mensaje); ?></p>
        
        
        <?php } ?>
    <?php } ?>
</main>
</div>