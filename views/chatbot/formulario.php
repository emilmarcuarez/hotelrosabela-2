<fieldset class="cc_re_act">
            <legend>
                Consulta
            </legend>

            <label for="nombre">Queries (palabra principal): </label>
            <input type="text" name="chatbot[queries]" id="querie_chatbot" placeholder="Palabra principal" value="<?php echo s($chatbot->queries); ?>">
            <label for="noches">Replies (Respuesta o informacion secundaria): </label>
            <textarea name="chatbot[replies]" id="replies_chatbot" placeholder="Respuesta..."><?php echo s($chatbot->replies); ?></textarea>
          
  </fieldset>