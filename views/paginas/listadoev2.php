<div class="evento_proximo contenedor">
<?php foreach($eventos as $evento):?>
<div class="evento_prox">
        <div class="img_eventos">
        <img src="/imagenes_e/<?php echo $evento->imagen ?>" alt="imagen del evento">
        </div>
        <div class="text_evento">
            <p class="text_titulo_ev2"><?php echo $evento->nombre?></p>
            <div class="text_info_evento">
                <div class="part11_info_eve">
                       <p>Fecha: <span><?php echo $evento->fecha?></span></p>
                    <p>Hora: <span>A partir de las<?php echo $evento->horario?></span></p>
                    <p class="descripcion"><?php echo $evento->descripcion?></p>
                </div>
                <div class="part11_info_eve">
                    <a href="/evento?id=<?php echo$evento->id?>" class="">Leer mas</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>