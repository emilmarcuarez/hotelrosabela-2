<!-- <p class="text_titulo_ev">Los ultimos eventos </p> -->

<div class="espacio"></div>

<div class="pg_titulo_logo contenedor">
      <img src="build/img/logor.webp" alt="">
      <h4>Eventos más recientes</h4>
    </div>
<div class="f_evento2">
<div class="f_eventos3">

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