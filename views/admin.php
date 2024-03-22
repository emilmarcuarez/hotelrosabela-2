
    <!-- estos numeros de resultado se mandan por el header que redirecciona a la pagina principal-->
<?php session_start();?>
<div class="cont_admi_grid">


<div class="adm_btn">
<?php if ($_SESSION['login']) { ?>
    <a href="/centrosconsumo/mostrar">Centros de consumo</a>
    <a href="/eventos/mostrar">Eventos</a>
    <a href="/habitaciones/mostrar">Habitaciones</a>
    <a href="/salones/mostrar">Salones</a>
    <a href="/empleados/mostrar">Empleados</a>
    <a href="/chef/mostrar">Chef</a>
    <a href="/auth/mostrarusuarios">Usuarios</a>
    <a href="/auth/mostrar">Usuarios Administradores</a>
    <a href="/premios/mostrar">Premios disponibles</a>
    <a href="/beneficios/mostrar">Beneficios</a>
  <?php }else if($_SESSION['login_recepcion']){ ?>
    <a href="/reservas/mostrar">Reservas</a>
    <a href="/chats/mostrar2">Chats</a>
    <a href="/noches">Fidelizacion</a>
    <?php }else if($_SESSION['login_comercializacion']){ ?>
        <a href="/eventos/mostrar">Eventos</a>
        <a href="/habitaciones/mostrar">Habitaciones</a>
        <a href="/salones/mostrar">Salones</a>
        <a href="/centrosconsumo/mostrar">Centros de consumo</a>
        <a href="/chef/mostrar">Chef</a>
    <?php }else if($_SESSION['login_redes']){ ?>
        <a href="/eventos/mostrar">Eventos</a>
    <?php }?>
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