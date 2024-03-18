<div class="app">

	<nav class="tabs">
		<button type="button" class="actual" data-paso="1">Paso 1</button>
		<button type="button" data-paso="2">Paso 2</button>
		<button type="button" data-paso="3">Paso 3</button>
		<button type="button" data-paso="4">Paso 4</button>
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
			<div class="datos_hab_entrada_demas">
				<!-- <span id="detalleReserva" onclick="toggleLista2()">1 adulto · 0 niños · 1 habitación</span> -->
				<div class="counter-list3">
					<div class="list_plan2">
						<div class="list_plan_part">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-friends" width="44" height="44" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path d="M7 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5" />
								<path d="M17 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4" />
							</svg>
							<label for="adultos">Adultos</label>
						</div>
						<div class="list_plan_part2">
							<button type="button" class="counter-btn" onclick="incrementar2('adultos')">+</button>
							<input id="adultos" class="counter-input" type="text">
							<button type="button" class="counter-btn" onclick="decrementar2('adultos')">-</button>
						</div>
					</div>
					<div class="list_plan2">
						<div class="list_plan_part">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-boy" width="44" height="44" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path d="M17 4.5a9 9 0 0 1 3.864 5.89a2.5 2.5 0 0 1 -.29 4.36a9 9 0 0 1 -17.137 0a2.5 2.5 0 0 1 -.29 -4.36a9 9 0 0 1 3.746 -5.81" />
								<path d="M9.5 16a3.5 3.5 0 0 0 5 0" />
								<path d="M8.5 2c1.5 1 2.5 3.5 2.5 5" />
								<path d="M12.5 2c1.5 2 2 3.5 2 5" />
								<path d="M9 12l.01 0" />
								<path d="M15 12l.01 0" />
							</svg>
							<label for="ninos">Niños</label>
						</div>
						<div class="list_plan_part2">
							<button type="button" class="counter-btn" onclick="incrementar2('ninos')">+</button>
							<input id="ninos" class="counter-input" type="text" value="0">
							<button type="button" class="counter-btn" onclick="decrementar2('ninos')">-</button>
						</div>

					</div>
					<div class="list_plan2">
						<div class="list_plan_part">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bed" width="44" height="44" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path d="M7 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M22 17v-3h-20" />
								<path d="M2 8v9" />
								<path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5z" />
							</svg>
							<label for="habitaciones">Habitaciones</label>

						</div>
						<div class="list_plan_part2">
							<button type="button" class="counter-btn" onclick="incrementar2('habitaciones2')">+</button>
							<input id="habitaciones2" class="counter-input" type="text">
							<button type="button" class="counter-btn" onclick="decrementar2('habitaciones2')">-</button>
						</div>
					</div>
					<!-- <div class="datos_seleccion" id="datos_seleccion">
					</div> -->
				</div>

				<div class="hab_seleccion" id="habitaciones">

				</div>
			</div>
			<div class="datos_seleccion2" id="datos_seleccion2">
				<!-- <h3>Su reserva</h3> -->
				<div class="contenido-resumen2">

				</div>
				<div class="cont_datos_reserva">
					<h3>Su reserva</h3>
					<div class="part_resumen_monto2">

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
			<div class="cont_grid_paso2">

				<div class="grid_cont_paso2_parte">
					<h5>Datos personales</h5>
					<div class="datos_personales">
						<div class="p_personal">
							<h4 class="margen_arriba">Nombre</h4>
							<input type="text" name="nombres" id="nombres" placeholder="Su nombre">
						</div>
						<div class="p_personal">
							<h4 class="margen_arriba">Apellido</h4>
							<input type="text" name="apellidos" id="apellidos" placeholder="Su apellido">
						</div>
						<div class="p_personal">
							<h4 class="margen_arriba">Numero de telefono </h4>
							
							<input type="text" name="nro_telefono" id="nro_telefono" placeholder="+58 424-000000">
						</div>
						<div class="p_personal">
							<h4 class="margen_arriba">Correo electronico</h4>
							<input type="email" name="email" id="email_correo" placeholder="email@correo.com">
						</div>


					</div>


					<h4>Peticiones especiales</h4>
					<p>Las peticiones especiales no se pueden garantizar, pero el alojamiento hará todo lo posible por satisfacerlas.</p>
					<p>Escribe tus peticiones en inglés o en español. (opcional)</p>
					<textarea name="peticiones" id="solicitudes" cols="30" rows="10"></textarea>

					<h4>Hora de llegada</h4>
					<input type="time" name="hora_re" id="hora">
					<p>Hora de la zona horaria de Puerto Ordaz</p>
					<div class="div_empresa_datos">
						<div class="div_empresa_datos_part">
							<h4 class="margen_arriba">Identificacion fiscal (opcional)</h4>
							<input type="text" name="i_fiscal" id="i_fiscal">
						</div>
						<div class="div_empresa_datos_part">
							<h4 class="margen_arriba">Nombre de la empresa (opcional)</h4>
							<input type="text" name="n_empresa" id="n_empresa">
						</div>
					</div>


					<p class="opcion_traslado">¿Desea que la opcion del traslado al hotel? (No incluye un costo adicional)</p>
					<input type="checkbox" id="traslado" name="traslado" value="si" checked />
					<label for="traslado">Si deseo usar este servicio</label>
					<?php if ($_SESSION['usuario_id']) { ?>
					
					<?php if (intval($usuario->noches) > 9 && intval($usuario->noches)<20) { ?>
						<h4 class="titulo_beneficio">
							Beneficios disponibles -<span> RB Loyalty GOLD</span>
						</h4>
						<div class="beneficios_disponibles">
						<?php foreach ($beneficios as $beneficio) { ?>
							<?php if(intval($beneficio->noches)===10){?>
								<div class="div_beneficio">
									<input type="radio" name="id_beneficio" class="id_beneficio" value="<?php echo $beneficio->id?>">
									<label for="id_beneficio"><?php echo $beneficio->descripcion?></label>
								</div>
							<?php }?>
						<?php } ?>
						</div>
					<?php } else if(intval($usuario->noches) > 27){ ?>
						<h4 class="titulo_beneficio">
							Beneficios disponibles -<span> RB Loyalty PLATINIUM</span>
						</h4>
						<div class="beneficios_disponibles">
						<?php foreach ($beneficios as $beneficio) { ?>
							<?php if(intval($beneficio->noches)===28){?>
								<div class="div_beneficio">
									<input type="radio" name="id_beneficio" class="id_beneficio" value="<?php echo $beneficio->id?>">
									<label for="id_beneficio"><?php echo $beneficio->descripcion?></label>
								</div>
							<?php }?>
						<?php } ?>
						</div>
					<?php } ?>
			<?php } ?>
				</div>
				<div class="grid_cont_paso2_parte">
					<div class="contenido-resumen2"></div>
					<div class="titulo_part_resumen_paso2">
						<p>Los datos de la reserva</p>
					</div>
					<div class="part_resumen_monto2">

					</div>


				</div>
				
				</div>
			</div>
		</div>
	

	<!-- paso 4 -->
	<div class="seccion" id="paso-3">
		<div class="contenedor resumen_final">
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

			<h4>Metodo de pago</h4>
			<div class="metodo_pago">
				<div class="pago_part">
					<label for="Transferencia">Transferencia</label>
					<input type="radio" value="Transferencia" id="transferencia" name="m_pago" required>
				</div>
				<!-- <div class="pago_part">
				<label for="Bankofamerica">Bank of america</label>
				<input type="radio" value="Bank of America" id="Bankofamerica" name="m_pago" required>
			</div> -->
				<div class="pago_part">
					<label for="pagarHotel">Pagar en el hotel</label>
					<input type="radio" value="Pagar en el hotel" id="pagarHotel" name="m_pago" required>
				</div>

			</div>

			<div id="pago"></div>

			<div class="boton-reserva">

			</div>
		</div>
	</div>

	<!-- </div> -->
	<!-- </div> -->


	<div class="seccion bg_paso_3" id="paso-4">
		<div class="fondo_paso3">


			<h4>¡Gracias por realizar tu reserva!</h4>
			<hr>
			<p class="p1">Nos sentimos felices de atenderte. ¡Te esperamos!</p>
			<p class="p2">Para acceder a tus reservas y hacerles un seguimiento constante puedes registrarte en el programa de fidelizacion <span>RB loyalty</span> </p>
			<!-- <p class="p3">Recuerda que cualquier pregunta que tengas puedes escribirnos desde el chat en linea que esta disponible las 24 horas</p> -->
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

	<div class="paginacion contenedor">
		<button id="anterior" class="boton">
			<span class="material-symbols-outlined">
				arrow_back_ios
			</span>
			Anterior
		</button>
		<button id="siguiente" class="boton">

			Siguiente
			<span class="material-symbols-outlined">
				arrow_forward_ios
			</span></button>
	</div>
</div>