<div class="cont_chat_linea" id="abrir_modal">
<i class="fa-regular fa-comments"></i>
    <a>Chat en linea</a>
</div>

<div class="f_reservas">
    <main class="contenedor">

        <div class="texto_form_pre">
            <h4>¡Reserva con nosotros!</h4>
        </div> 
        <div class="seccion55">
        <form action="" class="formulario_re">
            <!-- <div class="form_reserva"> -->
            <div class="par_label">
                <label for="fecha">fecha de ingreso</label>
                <input type="date" id="fechaReserva2" name="fechaReserva">
            </div>
            <div class="par_label">
                <label for="fecha">fecha de egreso</label>
                <input type="date" id="fechaEgreso2" name="fechaEgreso">
            </div>

            <div class="par_label2">

                <div id="seleccionPersonas" class="counter-container">
                    <div class="counter-row">
                    <div id="listaDesplegable" class="counter-select">
                        <!-- Opciones preseleccionadas -->
                        <!-- <button id="detalleReserva" onclick="toggleLista()">1 adulto · 0 niños · 1 habitación</button> -->
                        
                        <span id="detalleReserva" onclick="toggleLista()">1 adulto · 0 niños · 1 habitación</span>
                        <div class="counter-list">
                            <div class="list_plan">
                                <label for="adultos">Adultos</label>
                                <button type="button" class="counter-btn" onclick="incrementar('adultos2')">+</button>
                                <input id="adultos2" class="counter-input" type="text" value="1">
                                <button type="button" class="counter-btn" onclick="decrementar('adultos2')">-</button>
                            </div>
                            <div class="list_plan">
                                <label for="ninos">Niños</label>
                                <button type="button" class="counter-btn" onclick="incrementar('ninos2')">+</button>
                                <input id="ninos2" class="counter-input" type="text" value="0">
                                <button type="button" class="counter-btn" onclick="decrementar('ninos2')">-</button>
                            </div>
                            <div class="list_plan">
                            <label for="habitacionnes">Habitaciones</label>
                                <button type="button" class="counter-btn" onclick="incrementar('habitaciones3')">+</button>
                                <input id="habitaciones3" class="counter-input" type="text" value="1">
                                <button type="button" class="counter-btn" onclick="decrementar('habitaciones3')">-</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- <button type="button"  class="boton boton-rosado actual" id="btnEnviar">Reservar</button> -->
                <a id="btnEnviar3" value="Reservar" class="boton boton-rosado"  onclick="asignarValores()">Reservar</a>
        </form>
        </div>
        <!-- PAGINACION DE ANTERIOR- -->
        
    <!-- habitaciones -->
    </main>
</div>

<div class="f_habitaciones">
    <div class="habitaciones" data-aos="fade-up"
        data-aos-duration="3000">

        <div class="hab contenedor">
            <div class="titulo_ha">
                <h4>Habitaciones</h4>
                <hr class="salones_hr">
            </div>

                <?php 
                    include 'listadoha.php';
                ?>
            <!-- HABITACIONES -->
            
            <a href="#" class="boton-rosado">Ver todas</a>
        </div>
    </div>
</div>

<main class="contenedor" data-aos="fade-up"
     data-aos-duration="3000">
    <!-- espacio -->
    <div class="titulo_sal padding_espa">
        <h4>Nuestros espacios</h4>
        <hr class="eventos_hr1">
    </div>
    <div class="eventos_part">


        <div class="slider_eventos">
            <div class="slideshow2">
                <ul class="slider2">
                    <li>
                        <img src="/build/img/evento1.webp" alt="" class="img_slider">
                        <div class="imagen_header2">
                            <div class="imagen_header_fondo"></div>
                            <!-- <div class="texto_overlay"><span>Kai canta contigo</span> <br><br> Excelente musica, ambiente, Lorem ipsum, dolor sit amet consectetur adipisicing elit Necessitatibus cum doloribus, consec y mas... <a href="" class="enlace_evento">Leer mas</a></div> -->
                           
                        </div>
                    </li>
                    <li>
                        <img src="/build/img/evento2.webp" alt="" class="img_slider">>
                        <div class="imagen_header2">
                            <div class="imagen_header_fondo"></div>
                            <!-- <div class="texto_overlay"><span>Kai canta contigo</span> <br><br> Excelente musica, ambienteLorem ipsum, dolor sit amet consectetur adipisicing elit Necessitatibus cum doloribus, consec y mas... <a href="" class="enlace_evento">Leer mas</a></div> -->
                            <!-- <img src="/build/img/logopng.webp" alt="logo del hotel" class="logo_header"> -->
                        </div>
                    </li>
                    <li>
                        <img src="/build/img/evento3.webp" alt="" class="img_slider">
                        <div class="imagen_header2">
                            <div class="imagen_header_fondo"></div>
                            <!-- <div class="texto_overlay"><span>Kai canta contigo</span> <br><br> Excelente musica, ambiente Lorem ipsum, dolor sit amet consectetur adipisicing elit Necessitatibus cum doloribus, consec y mas... <a href="" class="enlace_evento">Leer mas</a></div> -->
                            
                        </div>
                    </li>
                    <!-- <li>
				<img src="build/img/4.png" alt="">
	
			</li> -->
                </ul>

            </div>
        </div>
        <div class="imagen_evento">
            <!-- <img src="/build/img/fiesta.webp" alt=""> -->
            <h5>Disfrute su estadia</h5>
            <hr class="eventos_esta">
            <ul>
                <li>Business Center</li>
                <li>Amplia galería comercial e incluye agencias de viajes.</li>
                <li>7 salones para eventos sociales y corporativos</li>
                <li>Piscina de agua salada para adultos y niños</li>
                <li>4 restaurantes con menús de gastronomía internacional</li>
                <li>Room service</li>
                <li>Lobby bar</li>
            </ul>
        </div>
    </div>


    <!-- salones -->
    <div class="espacio"></div>
    <div class="salones_inicio">
        <div class="titulo_sal">
            <h4>Salones</h4>
            <hr class="salones_hr">
        </div>
            <!-- agregar el link de listar los salones -->
            <?php include 'listadosa.php';?>
        </div>

    <div class="espacio2"></div>
    <a href="/salones" class="boton-rosado2">Ver todos</a>
    <div class="espacio"></div>
</main>

<!-- eventos -->
<?php 
    include 'listadoev.php';
?>

<!-- rest -->
<div class="rest_color" >
    <div class="contenedor restaurantes">
        <div class="rest_inicio_cont1">
            <img src="/build/img/rest1.webp" alt="">
        </div>
        <div class="rest_inicio_cont">
            <p>¡Contamos con los mejores RESTAURANTES de la ciudad!</p>
            <a href="#">Ver mas</a>
        </div>
        <div class="rest_inicio_cont-im">
            <img src="/build/img/rest2.webp" alt="">
            <img src="/build/img/rest3.webp" alt="">
        </div>
    </div>
</div>


<!-- artistas que nos han visitado -->
<div class="artista_fondo" data-aos="fade-up"
     data-aos-duration="3000">
    <div class="cont_grid_art contenedor">
        <div class="artistas_cont_titulo">
            <p>Artistas que nos han visitado</p>
            <img src="/build/img/logopng.webp" alt="">
        </div>
        <div class="artistas_card">
            <div class="art_part">
                <div class="img_art">
                    <img src="/build/img/liz.webp" alt="">
                </div>
                <div class="text_art">
                    <p>Liz</p>
                </div>
            </div>
            <div class="art_part">
                <div class="img_art">
                    <img src="/build/img/vozveis.webp" alt="">
                </div>
                <div class="text_art">
                    <p>Voz Veis</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ubicacion -->

<div class="ubicacion_fondo">
    <div class="contenedor">
        
            <div class="info_ubi_tittle">
                <p>UBICACION</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" viewBox="0 0 36 46" fill="none">
                <path d="M20.2219 44.9664C25.0312 39.1834 36 25.1675 36 17.2948C36 7.74661 27.9375 0 18 0C8.0625 0 0 7.74661 0 17.2948C0 25.1675 10.9688 39.1834 15.7781 44.9664C16.9312 46.3445 19.0688 46.3445 20.2219 44.9664ZM18 11.5298C19.5913 11.5298 21.1174 12.1372 22.2426 13.2183C23.3679 14.2995 24 15.7658 24 17.2948C24 18.8237 23.3679 20.29 22.2426 21.3712C21.1174 22.4523 19.5913 23.0597 18 23.0597C16.4087 23.0597 14.8826 22.4523 13.7574 21.3712C12.6321 20.29 12 18.8237 12 17.2948C12 15.7658 12.6321 14.2995 13.7574 13.2183C14.8826 12.1372 16.4087 11.5298 18 11.5298Z" fill="white"/>
                </svg>
            </div>
            <div class="text_ubi">
            <div class="info_ubi_av">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path d="M20 0C21.3828 0 22.5 1.11719 22.5 2.5V5.21094C28.7812 6.25781 33.7422 11.2188 34.7891 17.5H37.5C38.8828 17.5 40 18.6172 40 20C40 21.3828 38.8828 22.5 37.5 22.5H34.7891C33.7422 28.7812 28.7812 33.7422 22.5 34.7891V37.5C22.5 38.8828 21.3828 40 20 40C18.6172 40 17.5 38.8828 17.5 37.5V34.7891C11.2188 33.7422 6.25781 28.7812 5.21094 22.5H2.5C1.11719 22.5 0 21.3828 0 20C0 18.6172 1.11719 17.5 2.5 17.5H5.21094C6.25781 11.2188 11.2188 6.25781 17.5 5.21094V2.5C17.5 1.11719 18.6172 0 20 0ZM10 20C10 22.6522 11.0536 25.1957 12.9289 27.0711C14.8043 28.9464 17.3478 30 20 30C22.6522 30 25.1957 28.9464 27.0711 27.0711C28.9464 25.1957 30 22.6522 30 20C30 17.3478 28.9464 14.8043 27.0711 12.9289C25.1957 11.0536 22.6522 10 20 10C17.3478 10 14.8043 11.0536 12.9289 12.9289C11.0536 14.8043 10 17.3478 10 20ZM20 13.75C21.6576 13.75 23.2473 14.4085 24.4194 15.5806C25.5915 16.7527 26.25 18.3424 26.25 20C26.25 21.6576 25.5915 23.2473 24.4194 24.4194C23.2473 25.5915 21.6576 26.25 20 26.25C18.3424 26.25 16.7527 25.5915 15.5806 24.4194C14.4085 23.2473 13.75 21.6576 13.75 20C13.75 18.3424 14.4085 16.7527 15.5806 15.5806C16.7527 14.4085 18.3424 13.75 20 13.75Z" fill="white"/>
                </svg>
                <p>Av. Norte Sur 4, Ciudad Guayana 8050, Bolívar</p>
            </div>
            <div class="info_ubi_av">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="25" viewBox="0 0 27 25" fill="none">
                <path d="M8.69551 1.20222C8.28948 0.294057 7.21902 -0.18932 6.19602 0.0694573L1.5556 1.24128C0.638058 1.47565 0 2.2471 0 3.12596C0 15.2055 10.578 25 23.624 25C24.5731 25 25.4063 24.4092 25.6594 23.5596L26.925 19.2629C27.2045 18.3157 26.6824 17.3246 25.7016 16.9486L20.6393 14.9956C19.7798 14.6635 18.7832 14.893 18.1978 15.5619L16.0675 17.9691C12.3551 16.3432 9.34939 13.5601 7.59342 10.1227L10.1931 8.15504C10.9155 7.60819 11.1634 6.69026 10.8048 5.8944L8.69551 1.2071V1.20222Z" fill="white"/>
                </svg>
                <p>No dudes en contactarnos al: +58 424-92182910</p>
            </div>
        </div>
    </div>
    <div class="imagen_ubi">
        <img src="/build/img/ubi.webp" alt="ubicacion_imagen">
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15793.049098834696!2d-62.7762222!3d8.276674!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dcbf926378c5da3%3A0x5470f47009e15b6b!2sRosa%20Bela%20Hotel%20%26%20Convention%20Center!5e0!3m2!1ses-419!2sve!4v1704475270862!5m2!1ses-419!2sve" width="1423" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       <div class="seccion" id="paso-2">
            habitaciones
        </div>
        <div class="seccion" id="paso-3">
            Forma de pago
        </div>
        <div class="seccion" id="paso-4">
            Confirmacion
        </div>
        <div class="seccion" id="paso-3">
            verificateeee
        </div>

      <div id="miModal2" class="modal2">
		<div class="flex2" id="flex2">
			<div class="contenido-modal2">
				<div class="modal-header2 flex2" id="miModal2">
					<div class="part_modal_header">
                        <img src="build/img/logor.webp" alt="">    
                    <h2>Hotel Rosa Bela</h2>
                    </div>
                   
					<span class="close2" id="close2">&times;</span>
				</div>
				<div class="modal-body2" id="modal-body2">
                <section class="chat-area">

                    <div class="chat-box" id="chat-box" data-user-id="<?php echo $_SESSION['usuario_id']?>">
                     
                    </div>
                    <form action="#" class="typing-area">
                        <input type="text" class="incoming_id" name="mensaje[usuarios_id]" value="<?php echo $_SESSION['usuario_id']?>" hidden>
                        <textarea type="text" name="mensaje[mensaje]" class="input-field" placeholder="Escribe tu mensaje aquí..." autocomplete="off"></textarea>
                        <button id="btn_chat"><i class="fab fa-telegram-plane"></i></button>
                            
                        <!-- <input type="submit" id="btnEnviar"></i>"> -->
                    </form>
                </section>
				</div>

				<div class="footer2">
					<div id="seleccionar_hab_p2">Seleccionar</div>
				</div>
			</div>
		</div>
	</div>