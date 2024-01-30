<div class="wrapper">
    <section class="chat-area">
                <div class="chat-box">
                <?php 
                foreach($mensajes as $mensaje){   
                   if($mensaje->codigo===1){ ?>
                        <p><?php echo $mensaje->mensaje ?></p>
                    <?php }?>
                 <?php } ?>
                </div>
            </div>  
            <form action="/chat" class="typing-area">
                    <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                    <input type="text" name="message" class="input-field" placeholder="Escribe tu mensaje aquí..." autocomplete="off">
                    <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        

    </section>
</div>