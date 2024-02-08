<div class="cont_chat_mostrar">
    <div class="usuarios_mostrar">

        <?php foreach($usuarios as $usuario):?>
        
            <a href="/chats/responder?id=<?php echo $usuario->id?>" class="nom_usuario">
                
                <div class="n_usuario">
                   <p><?php echo $usuario->nombre ?> <?php echo $usuario->apellido?></p>
                </div>
                <div class="identificacion">
                   <p><?php echo $usuario->identificacion ?></p>
                  
                    <?php if(intval($usuario->no_leidos)!==0){?>
                        <div class="cant_msj_noleidos">
                        <p><?php echo $usuario->no_leidos?></p>
                        </div>
                     <?php } ?>
                   
                   
                </div>
                <!-- <input type="text"> -->
            </a> 
       <?php endforeach;?>
    </div>
    <div class="chats">
        <p class="p_chat">Elige un chat</p>
    </div>
</div>