<div class="app">

        <nav class="tabs">
            <button type="button" class="actual" data-paso="1">Paso 1</button>
            <button type="button" data-paso="2">Paso 2</button>
            <button type="button" data-paso="3">Paso 3</button>
        </nav>

<div class="seccion" id="habitaciones_t">
 
</div>
<div class="seccion hab_datos_seccion" id="paso-1">
	<div class="hab_seleccion" id="habitaciones">

	</div>
	<div class="datos_seleccion">

	</div>
</div>
<div class="seccion" id="paso-2">
		<div class="hab_seleccion3">

			<h4>Peticiones especiales</h4>
			<p>Las peticiones especiales no se pueden garantizar, pero el alojamiento hará todo lo posible por satisfacerlas.</p>
			<p>Escribe tus peticiones en inglés o en español. (opcional)</p>
			<textarea name="peticiones" id="solicitudes" cols="30" rows="10"></textarea>	

			<h4>Hora de llegada</h4>
			<input type="time" name="hora_re" id="hora">
			<p>Hora de la zona horaria de Puerto Ordaz</p>
			<input type="hidden" id="id" value="<?php echo $id;?>">
			<div class="part_resumen_reserva">
				<div class="contenido-resumen">

				</div>
				<div class="imagen_re">

				</div>
			</div>
			<div class="metodo_pago">
				<h5>Metodo de pago</h5>
				<label for="transferencia">Transferencia</label>
                    <input  type="radio" value="transferencia" id="transferencia" name="m_pago" required>

                    <label for="Bankofamerica">Bank of america</label>
                    <input  type="radio" value="Bankofamerica" id="Bankofamerica" name="m_pago" required>
                    <label for="pagarHotel">Pagar en el hotel</label>
                    <input  type="radio" value="pagarHotel" id="pagarHotel" name="m_pago" required>
			</div>
		</div>
</div>
<div class="seccion" id="paso-3">
		<div class="hab_seleccion4">
	gfghfghfgh
	</div>
</div>

<div id="miModal" class="modal">
		<div class="flex" id="flex">
			<div class="contenido-modal">
				<div class="modal-header flex" id="miModal2">
					<h2></h2>
					<span class="close" id="close">&times;</span>
				</div>
				<div class="modal-body" id="modal-body">
					<!-- <input type="number"> -->
				</div>

				<div class="footer">
					<!-- <div id="seleccionar_hab_p">Seleccionar</div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="paginacion">
            <button
            id="anterior"
            class="boton"
            >Anterior
            </button>
            <button
            id="siguiente"
            class="boton"
            >siguiente
            </button>
        </div>
</div>