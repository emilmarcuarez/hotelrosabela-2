<div class="logo_rosa_bela_pgsecundarias_slogo">

    <img src="build/img/logopng_bien2.webp" alt="" class="logo_negro_hotel">
   
</div>
<div class="fondop_emple contenedor">
<div class="pg_titulo_logo">
      <img src="build/img/logor.webp" alt="">
<h4>Empleados destacados</h4>
</div>
<div class="cont_emple">
    
    <!-- el resto de los empleados -->
    <div class="empleado_cont2 contenedor">
        <?php foreach ($empleados as $indice => $emple):
               ?>
                    <div class="empleado_cont3">
                        <div class="img_empleado_cont">
                            <img src="/imagenes_t/<?php echo $emple->imagen;?>" alt="">
                        </div>
                        <div class="text_empleado_cont">
                            <h3><?php echo $emple->nombre; ?> <?php echo $emple->apellido; ?></h3>
                            <p><?php echo $emple->cargo; ?></p>
                        </div>
                    </div>
          <?php endforeach;?>
    </div>

</div>
</div>