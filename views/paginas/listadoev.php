<div class="f_evento2">
<div class="f_eventos3">
<p class="text_titulo_ev">¡LOS EVENTOS MAS RESALTANTES DE LA SEMANA!</p>
<div class="imagenes contenedor">
    <div class="imagenes_cont">
    <?php $cont=0; ?>
    <?php foreach($eventos as $evento):?>
        <?php if($cont>=4){
                 break;   
            } else{?>
                <a href="/evento?id=<?php echo $evento->id?>" class="img_ev_">
                    <img src="/imagenes_e/<?php echo $evento->imagen ?>" alt="">
                </a>
        <?php } ?>
        <?php ++$cont; ?>
     <?php endforeach; ?>
    </div>
    
</div>
</div>
</div>