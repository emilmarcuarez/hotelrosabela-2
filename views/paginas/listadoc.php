<?php foreach($centros as $centro):?>
    <a href="/centro?id=<?php echo $centro->id?>" class="link_centro_div">
<div class="consumo_card">
        <div class="imagen_consumo">
            <img src="/imagenes_r/<?php echo $centro->imagen?>" alt="">
        </div>
        <div class="text_consumo">
            <div class="titulo_consumo">
                <h5><?php echo $centro->nombre?></h5>
            </div>
            <div class="text_consumo2">
                <p>Plato Especial <span><?php echo $centro->plato_especial?></span></p>
                <p class="descripcion"><?php echo $centro->descripcion?></p>
                <p class="text_final">"Para observar el menu, entre a la pagina del Restaurante"</p>
            </div>
            
        </div>
        <div class="chef_consumo">
        <!-- foreach para los chef -->
            <?php foreach($chefs as $chef):
                if($chef->centros_consumo_id===$centro->id){?>
                <div class="chef_info_centro">
                    <img src="/imagenes_c/<?php echo $chef->imagen?>" alt="imagen del chef">
                    <p>Chef <?php echo $chef->nombre?> <?php echo $chef->apellido?></p>
                </div>
            <?php }?>
            <?php endforeach; ?>
        </div>
        <div class="botones_consumo">
                <div class="reputacion">
                    <!-- <p class="valoracion">Muy bien</p>
                    <p class="comentarios_btn">10 comentarios</p> -->
                    
                    <!-- <a href="/centro?id=<?php //echo $centro->id?>">Mostrar mas</a> -->
                </div>
            </div>
    </div> <!--SE CIERRA EL CARD-->
    </a>
    <?php endforeach; ?>