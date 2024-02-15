<div class="cont_chat_mostrar">
<input type="hidden" name="usuarios_id" class="incoming_id4" value="<?php echo $usu->id?>">
    <!-- usuarios a  mostrar -->
    <div class="usuarios_mostrar">
    
    
    </div>
    
    <div class="chats">
    <a href="/admin" class="volver_simple">Volver</a>
        <div class="cont_chat_usuario">
    
            <div class="usuario">
                <p><?php echo $usu->nombre?> <?php echo $usu->apellido ?></p>
            </div>
            <div class="chat-box3">

            </div>
            <div class="resp">
                <form action="#" class="typing-area2">
                    <input type="hidden" class="incoming_id2" name="mensaje[usuarios_id]" value="<?php echo $usu->id?>">
                    <input type="text" name="mensaje[mensaje]" class="input-field3" placeholder="Escribe tu mensaje aquí..." autocomplete="off">
                    <button id="btn_chat4"><i class="fab fa-telegram-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>