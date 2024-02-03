<div class="fondop_emple">

<h4 class="emple_dest">Empleados destacados</h4>
<div class="cont_emple">
   
<?php foreach ($empleados as $indice => $empleado) : ?>
    <?php 
        if(intval($empleado->jerarquia)===0){?>
           <?php if($indice%2===0){ ?>
                    <div class="emple1_cont f_grisc1">
                    <?php } else {?>
                    <div class="emple1_cont f_griso2">
                     <?php }?>
                        <div class="empleados_pag contenedor">
                            <div class="img_empleado">
                                <img src="/build/img/chef.webp" alt="">
                            </div>
                            <div class="text_empleado">
                                    <div class="tit_emple">
                                        <h5><?php  echo $empleado->nombre?> <?php  echo $empleado->apellido?></h5>
                                    </div>
                                    <div class="cargo_emple">
                                        <p><?php  echo $empleado->cargo?></p>
                                    </div>
                                    <div class="text_emple">
                                        <p><?php  echo $empleado->descripcion?></p>
                                    </div>
                            </div>
                        </div>
                    </div>  
                    <?php 
        }
    endforeach; 
    ?>
    
    <!-- el resto de los empleados -->
    <div class="empleado_cont2 contenedor">
        <?php foreach ($empleados as $indice => $emple):
               
                if($indice===intval($emple->jerarquia) && intval($emple->jerarquia)!=0 ){?>
                    <div class="empleado_cont3">
                        <div class="img_empleado_cont">
                            <img src="/imagenes_t/<?php echo $emple->imagen;?>" alt="">
                        </div>
                        <div class="text_empleado_cont">
                            <h3><?php echo $emple->nombre; ?> <?php echo $emple->apellido; ?></h3>
                            <p><?php echo $emple->cargo; ?></p>
                        </div>
                    </div>
            <?php }else{ ?>
                <?php foreach($empleados as $emple2):
                     if($indice===intval($emple2->jerarquia)  && intval($emple2->jerarquia)!=0 ){?>
                            <div class="empleado_cont3">
                                <div class="img_empleado_cont">
                                <img src="/imagenes_t/<?php echo $emple2->imagen;?>" alt="">
                                </div>
                                <div class="text_empleado_cont">
                                    <h3><?php echo $emple2->nombre; ?> <?php echo $emple2->apellido; ?></h3>
                                    <p><?php echo $emple2->cargo; ?></p>
                                </div>
                            </div>
                     <?php } ?>
                <?php endforeach;?>
            <?php } ?>
          <?php endforeach;?>
    </div>

</div>
</div>