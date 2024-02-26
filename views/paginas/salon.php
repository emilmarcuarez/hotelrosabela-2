<div class="fondo_salon" >

</div>
<div class="logo_rosa_bela_centrado">
    <img src="build/img/logo_color_bien-01.webp" alt="">
</div>
<main class="salon_pag_principal">
    
    <h5><?php echo $salon->nombre;?></h5>

    <div class="cont_sal">
        
        <div class="cont_sal_img">
            <img src="/imagenes_s/<?php echo $salon->imagen ?>" alt="">
        </div> 

        <div class="cap_datos_sal">
            <div class="d_salon">
                <i class="fa-solid fa-users"></i>
                <p><?php echo $salon->capacidad ?></p>
            </div>
            <div class="d_salon">
                <i class="fa-regular fa-calendar"></i>
                <p><?php echo $salon->fecha_p ?></p>
            </div>
            <div class="d_salon">
                <i class="fa-solid fa-dollar-sign"></i>
                <p><?php echo $salon->precio?></p>
            </div>
        </div>

        <div class="cont_sal_text">
            <h5>Descripcion del salon</h5>
            <?php echo $salon->descripcion ?>
        </div>
    </div>
    <a href="#">Informacion del salon</a>
</main>