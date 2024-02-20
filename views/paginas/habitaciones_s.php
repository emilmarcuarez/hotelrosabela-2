<div class="app">

        <nav class="tabs">
            <button type="button" class="actual" data-paso="1">Paso 1</button>
            <button type="button" data-paso="2">Paso 2</button>
            <button type="button" data-paso="3">Paso 3</button>
        </nav>

<div class="seccion" id="icetab-content">
</div>

<div class="seccion" id="paso-1">
	<div class="tit_hab_reserva_cont">
		<img src="build/img/logor.webp" alt="">
		<div class="tit_part_reser">
			<h3>Hotel & Convention</h3>
		<h4 class="tit_hab_reserva">Selecciona las habitaciones dando click en la imagen</h4>
		</div>
		
	</div>

	<div class="hab_datos_seccion">
	
		<div class="hab_seleccion" id="habitaciones">

		</div>
		<div class="datos_seleccion" id="datos_seleccion">

		<div class="counter-list2">
                            <div class="list_plan">
                                <label for="adultos">Adultos</label>
                                <button type="button" class="counter-btn" onclick="incrementar2('adultos')">+</button>
                                <input id="adultos" class="counter-input" type="text">
                                <button type="button" class="counter-btn" onclick="decrementar2('adultos')">-</button>
                            </div>
                            <div class="list_plan">
                                <label for="ninos">Niños</label>
                                <button type="button" class="counter-btn" onclick="incrementar2('ninos')">+</button>
                                <input id="ninos" class="counter-input" type="text" value="0">
                                <button type="button" class="counter-btn" onclick="decrementar2('ninos')">-</button>
                            </div>
                            <div class="list_plan">
                            <label for="habitaciones">Habitaciones</label>
                                <button type="button" class="counter-btn" onclick="incrementar2('habitaciones2')">+</button>
                                <input id="habitaciones2" class="counter-input" type="text">
                                <button type="button" class="counter-btn" onclick="decrementar2('habitaciones2')">-</button>
                            </div>
                        </div>
		</div>
	</div>
</div>

<div class="seccion" id="paso-2">
<div class="tit_hab_reserva_cont">
		<img src="build/img/logor.webp" alt="">
		<div class="tit_part_reser">
			<h3>Hotel & Convention</h3>
		<h4 class="tit_hab_reserva">Complete la informacion y confirme</h4>
		</div>
		
	</div>
		<div class="contenedor hab_seleccion3">

			<h4>Peticiones especiales</h4>
			<p>Las peticiones especiales no se pueden garantizar, pero el alojamiento hará todo lo posible por satisfacerlas.</p>
			<p>Escribe tus peticiones en inglés o en español. (opcional)</p>
			<textarea name="peticiones" id="solicitudes" cols="30" rows="10"></textarea>	

			<h4>Hora de llegada</h4>
			<input type="time" name="hora_re" id="hora">
			<p>Hora de la zona horaria de Puerto Ordaz</p>
			<input type="hidden" id="id" value="<?php echo $id;?>">
			<h4 class="margen_arriba">Identificacion fiscal (opcional)</h4>
			<input type="text" name="i_fiscal" id="i_fiscal">
			<h4 class="margen_arriba">Nombre de la empresa (opcional)</h4>
			<input type="text" name="n_empresa" id="n_empresa">
			<p class="opcion_traslado">¿Desea que la opcion del traslado al hotel? (No incluye un costo adicional)</p>
			<input type="checkbox" id="traslado" name="traslado" value="si" checked />
    		<label for="traslado">Si deseo usar este servicio</label>
			<hr>
			<h3>Resumen de la reserva</h3>
		<div class="reserva_comp_resumen">

			<div class="part_resumen_reserva">
				<div class="resumen_res_contenedor">
					<div class="contenido-resumen">

					</div>
					<div class="part_resumen_monto">

			</div>
				</div>
				
				<div class="imagen_re">
					<!-- <img src="build/img/ubi.webp" alt="imagen de resumen"> -->
				</div>
			</div>
			
			</div>
			<div class="espacio">
			</div>
			<h4>Metodo de pago</h4>
			<div class="metodo_pago">
				<div class="pago_part">
						<label for="Transferencia">Transferencia</label>
						<input  type="radio" value="Transferencia" id="transferencia" name="m_pago" required>
				</div>
				<div class="pago_part">
						<label for="Bankofamerica">Bank of america</label>
						<input  type="radio" value="Bank of America" id="Bankofamerica" name="m_pago" required>
				</div>
				<div class="pago_part">
						<label for="pagarHotel">Pagar en el hotel</label>
						<input  type="radio" value="Pagar en el hotel" id="pagarHotel" name="m_pago" required>
				</div>	

			</div>
			
			<div id="pago"></div>
			
			<div class="boton-reserva">

			</div>
		</div>
</div>


<div class="seccion bg_paso_3" id="paso-3">
	<div class="fondo_paso3">


	<h4>¡Gracias por realizar tu reserva!</h4>
	<hr>
	<p class="p1">Nos sentimos felices de que hayas confiado en nosotros. ¡Te esperamos!</p>
	<p class="p2">Para acceder a tus reservas y hacerles un seguimiento constante puedes dirigirte en el menu superior y presionar click en: nombre de usuario > <span>reservas</span> </p>
	<p class="p3">Recuerda que cualquier pregunta que tengas puedes escribirnos desde el chat en linea que esta disponible las 24 horas</p>	
	<div class="hab_seleccion4">
		<p>Descarga el reporte de la reserva: </p>
			<a href="/crearPdf">Descargar</a>
	</div>
	<br>

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
			</div>

				<div class="footer">
					<!-- <div id="seleccionar_hab_p">Seleccionar</div> -->
				</div>
			</div>
		</div>
	</div>
	
	<!-- <div class="paginacion">
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
        </div> -->
</div>