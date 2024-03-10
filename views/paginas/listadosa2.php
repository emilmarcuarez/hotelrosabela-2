<div class="contenedor salones">
    <div class="pg_titulo_logo">
        <img src="build/img/logor.webp" alt="">
        <h4>Salones</h4>
    </div>

    <?php foreach ($salones as $salon) : ?>
        <div class="salones_card">
            <div class="imagen_salon">
                <img src="/imagenes_s/<?php echo $salon->imagen ?>" alt="imagen del salon">
            </div>
            <div class="text_consumo">
                <div class="titulo_consumo">
                    <a href="/salon?id=<?php echo $salon->id; ?>">
                        <h5><?php echo $salon->nombre ?></h5>
                    </a>
                </div>
                <div class="text_consumo2">
                    <p>Capacidad: <span><?php echo $salon->capacidad ?> personas</span></p>
                    <p>Precio de alquiler (aproximado): <span>USD <?php echo $salon->precio ?></span></p>
                    <p class="descripcion"><?php echo $salon->descripcion ?></p>
                    <p class="text_final">"Siente la diferencia en el Hotel RosaBela"</p>
                </div>

            </div>
        </div> <!--SE CIERRA EL CARD-->
    <?php endforeach; ?>
</div>