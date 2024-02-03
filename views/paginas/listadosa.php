<div class="salones_cont">
<div class="card_padre">
<?php foreach($salones as $salon):?>
    
        <div class="card_hija">
            <div class="imagen_card">
                <img src="/imagenes_s/<?php echo $salon->imagen?>" alt="imagen del salon">
            </div>
            <div class="texto_card">
            <a href="/salon?id=<?php echo $salon->id;?>"><h5><?php echo $salon->nombre?></h5></a>
                <p>
                    Capacidad: <span><?php echo $salon->capacidad?> personas</span>
                </p>
                <p class="descripcion"> <?php echo $salon->descripcion ?></p>
            </div>
        </div>

    <?php endforeach; ?>
    </div>
</div>
