<div class="fondo_evento">
    <main class="centro_pag contenedor">
        <h3 class="h3_centri_titulo"><?php echo $centro->nombre ?></h3>

        <div class="img_centro_consumo">
            <img src="/imagenes_r/<?php echo $centro->imagen2?>" alt="">
        </div>
        <p class="p_centro_rosado">“Siente la diferencia en el mejor hotel de la ciudad”</p>
        <div class="grid_centro">
            <div class="logo_centro">
                <img src="/imagenes_r/<?php echo $centro->imagen ?>" alt="">
            </div>
            <div class="info_hor_link">
                
                    <p>Especialidad: <span><?php echo $centro->plato_especial?></span></p>
                    <p>Horario: <span><?php echo $centro->horario?></span></p>
                    <p>Link del menu: <a href="<?php echo $centro->link?>">Click aqui</a></p>
                
            </div>
        </div> <!--Cierra el grid_centro-->
        <div class="grid_cuadriculas_centros">
            <div class="cuadriculas_chef">
               <?php foreach($chefs as $chef):?>
                    <div class="cua_part_chef">
                        <div class="titulo_chef_cnetro">
                       
                        <p>Chef <?php echo $chef->nombre?> <?php echo $chef->apellido?></p>
                        </div>
                        <div class="foto_chef_centro">
                            <img src="/imagenes_c/<?php echo $chef->imagen?>" alt="">
                        </div>
                        <div class="foto_chef_cnetro">
                            <p>"<?php echo $chef->descripcion?>"</p>
                        </div>
                    </div>
                <?php endforeach;?>   
            </div>
            <div class="cuadriculas_descripcion">
                <p>
                    <?php echo $centro->descripcion?>
                </p>
            </div>
        </div>

        <h4>Comentarios</h4>
            <hr class="tit_comen">
            <div class="comentarios">

            </div>                


                <form class="formulario form_comentario">
                <!-- calificacion estrella -->
                <span class="gl-star-rating">
                <select class="star-rating" value="valor">
                    <option value="">Seleccione una opcion</option>
                    <option value="5">Excelente</option>
                    <option value="4">Muy buena</option>
                    <option value="3">Esperaba mas</option>
                    <option value="2">No me gusto</option>
                    <option value="1">Horrible</option>
                </select>
                <span class="gl-star-rating--stars">
                    <span data-value="1"></span>
                    <span data-value="2"></span>
                    <span data-value="3"></span>
                    <span data-value="4"></span>
                    <span data-value="5"></span>
                </span> 
            </span>
                <!-- comentario -->
                    <label for="mensaje">Comentario:</label>
                    <textarea id="mensaje" name="mensaje" cols="30" rows="10" class="mensaje_comentario"></textarea> 
                    <input type="hidden" name="centros_consumo_id" id="centros_consumo_id" value="<?php echo $centro->id; ?>">
                    <?php if($_SESSION['usuarios_id']){?>
                    <button id="btnEnviar_comentario" class="boton boton-verde">Enviar comentario</button>
                    <?php }else{; ?>
                    <div class="else_comen">
                    <button id="btnEnviar_comentario" class="boton boton-verde" disabled >Enviar comentario</button>
                    <p>Inicia sesion para poder habilitar el espacio para realizar un comentario.</p>
                </div>
            <?php } ?>
                </form>
           

<!-- proximos eventos - extra -->
        <h3 class="eventos_centro_h3">Proximos eventos en el hotel</h3>
 
        <?php include 'listadoev2.php' ?>
    </main>
</div>
