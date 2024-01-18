<div class="fondo_evento">
    <main class="evento_pagina_ind contenedor">
        <h5><?php echo $evento->nombre?></h5>
        <div class="cont_event_grid">
            <!-- iamgen y titulo -->
            <div class="grid_event_part">
                <div class="grid_rest_event">
                    <p><?php echo $centroConsumo->nombre?></p>
                </div>
                <div class="grid_img_event">
                    <img src="/imagenes_e/<?php echo $evento->imagen?>" alt="">
                </div>
            </div>
            <!-- descripcion, fecha y hora -->
            <div class="grid_event_part2">
                <div class="grid_descripcion_event">
                    <p><?php echo $evento->descripcion ?></p>
                </div>
                <div class="grid_descripcion_event2">
                    <p>Fecha: <span> <?php echo $evento->fecha ?></span></p>
                </div>
                <div class="grid_descripcion_event2">
                    <p>Hora: <span> <?php echo $evento->horario ?> </span></p>
                </div>
            </div>
        </div>

        <div class="otros_eventos">
            <p>Otros eventos</p>
            <hr>
            <?php include 'listadoev2.php' ?>
        </div>
    </main>

</div>