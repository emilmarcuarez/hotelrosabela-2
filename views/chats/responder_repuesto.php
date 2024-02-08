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
            </a> 
       <?php endforeach;?>
    </div>
    <div class="chats">
        <div class="cont_chat_usuario">
            <div class="usuario">
                <p><?php echo $usu->nombre?> <?php echo $usu->apellido ?></p>
            </div>
            <div class="chat-box3">

            </div>
            <div class="resp">
                <form action="#" class="typing-area2">
                    <input type="text" class="incoming_id2" name="mensaje[usuarios_id]" value="<?php echo $usu->id?>" hidden>
                    <input type="text" name="mensaje[mensaje]" class="input-field3" placeholder="Escribe tu mensaje aquí..." autocomplete="off">
                    <button id="btn_chat4"><i class="fab fa-telegram-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>