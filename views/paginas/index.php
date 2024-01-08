

<main class="contenedor" data-aos="fade-up"
     data-aos-duration="3000">
    <div class="espacio"></div>
    <div class="texto_form_pre">
        <h4>¡Reserva con nosotros!</h4>
    </div>
    <form action="" class="formulario_re">
        <!-- <div class="form_reserva"> -->
        <div class="par_label">
            <label for="fecha">fecha de ingreso</label>
            <input type="date" id="fechaReserva" name="fecha">
        </div>
        <div class="par_label">
            <label for="fecha">fecha de egreso</label>
            <input type="date" id="fechaEgreso" name="fecha">
        </div>
        <!-- </div> -->
        <div class="form_pers">
            <!-- <label for="seleccionPersonas">Número de personas y habitaciones:</label> -->
            <div id="seleccionPersonas" class="counter-container">
                <div class="counter-row">
                    <input id="habitaciones" class="counter-input" type="text" value="1 habitación" onclick="editar('habitaciones')" readonly>
                    <button type="button" class="counter-btn" onclick="incrementar('habitaciones')">+</button>
                    <button type="button" class="counter-btn" onclick="decrementar('habitaciones')">-</button>
                </div>
                <div class="counter-row">
                    <input id="adultos" class="counter-input" type="text" value="1 adultos" readonly>
                    <button type="button" class="counter-btn" onclick="incrementar('adultos')">+</button>
                    <button type="button" class="counter-btn" onclick="decrementar('adultos')">-</button>
                </div>
                <div class="counter-row">
                    <input id="ninos" class="counter-input" type="text" value="0 niños" readonly>
                    <button type="button" class="counter-btn" onclick="incrementar('ninos')">+</button>
                    <button type="button" class="counter-btn" onclick="decrementar('ninos')">-</button>
                </div>
            </div>
        </div>

        <input type="submit" id="btnEnviar" value="Reservar" class="boton boton-rosado">
    </form>

<!-- eventooos -->
</main>

<div class="habitaciones" data-aos="fade-up"
     data-aos-duration="3000">

    <div class="hab contenedor">
        <div class="titulo_ha">
            <h4>Habitaciones</h4>
            <hr class="salones_hr">
        </div>
        <div class="hab_part">
            <div class="img_hab">
                <img src="/build/img/hab1.webp" alt="">
            </div>
            <div class="info_hab">
                <div class="info_hab_3">
                    <div class="titulo_info">
                        <h5>Deluxe doble</h5>
                    </div>
                    <div class="info_adicional">
                        <p>Hasta 2 adultos y 2 niños por habitacion</p>
                    </div>
                    <div class="info_parrafo">
                        <p>Cálida y confortable habitación decorada al estilo clásico, cama Royal King con sábanas de algodón egipcio, soporte pa...Leer mas</p>
                    </div>
                </div>
                <div class="icono_info">
                    <div class="icono_info_part">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="32" viewBox="0 0 45 32" fill="none">
                            <path d="M3.81117 12.2071C8.66359 7.47857 15.246 4.57143 22.5035 4.57143C29.761 4.57143 36.3434 7.47857 41.1959 12.2071C42.096 13.0786 43.5166 13.05 44.3745 12.1429C45.2325 11.2357 45.2044 9.78572 44.3112 8.91429C38.6571 3.39286 30.9706 0 22.5035 0C14.0364 0 6.3499 3.39286 0.688752 8.90714C-0.204374 9.78571 -0.232504 11.2286 0.625459 12.1429C1.48342 13.0571 2.91102 13.0857 3.80414 12.2071H3.81117ZM22.5035 16C26.498 16 30.1408 17.5071 32.9257 20C33.861 20.8357 35.2815 20.7429 36.1043 19.8C36.9271 18.8571 36.8357 17.4071 35.9074 16.5714C32.3349 13.3714 27.6372 11.4286 22.5035 11.4286C17.3698 11.4286 12.6721 13.3714 9.10664 16.5714C8.17132 17.4071 8.08692 18.85 8.90973 19.8C9.73253 20.75 11.1531 20.8357 12.0884 20C14.8662 17.5071 18.5091 16 22.5105 16H22.5035ZM27.0043 27.4286C27.0043 26.2162 26.5301 25.0534 25.6861 24.1961C24.842 23.3388 23.6972 22.8571 22.5035 22.8571C21.3098 22.8571 20.165 23.3388 19.321 24.1961C18.4769 25.0534 18.0027 26.2162 18.0027 27.4286C18.0027 28.641 18.4769 29.8038 19.321 30.6611C20.165 31.5184 21.3098 32 22.5035 32C23.6972 32 24.842 31.5184 25.6861 30.6611C26.5301 29.8038 27.0043 28.641 27.0043 27.4286Z" fill="#CF5A60" />
                        </svg>
                    </div>

                    <div class="icono_info_part">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="32" viewBox="0 0 38 32" fill="none">
                            <path d="M3.8 4V22H34.2V4H3.8ZM0 4C0 1.79375 1.70406 0 3.8 0H34.2C36.2959 0 38 1.79375 38 4V22C38 24.2062 36.2959 26 34.2 26H3.8C1.70406 26 0 24.2062 0 22V4ZM7.6 28H30.4C31.4509 28 32.3 28.8937 32.3 30C32.3 31.1063 31.4509 32 30.4 32H7.6C6.54906 32 5.7 31.1063 5.7 30C5.7 28.8937 6.54906 28 7.6 28Z" fill="#CF5A60" />
                        </svg>
                    </div>

                    <div class="icono_info_part">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="35" viewBox="0 0 61 35" fill="none">
                            <path d="M9.15 2.5C9.15 1.11719 10.513 0 12.2 0H15.25C16.937 0 18.3 1.11719 18.3 2.5V15V20V32.5C18.3 33.8828 16.937 35 15.25 35H12.2C10.513 35 9.15 33.8828 9.15 32.5V27.5H6.1C4.41297 27.5 3.05 26.3828 3.05 25V20C1.36297 20 0 18.8828 0 17.5C0 16.1172 1.36297 15 3.05 15V10C3.05 8.61719 4.41297 7.5 6.1 7.5H9.15V2.5ZM51.85 2.5V7.5H54.9C56.587 7.5 57.95 8.61719 57.95 10V15C59.637 15 61 16.1172 61 17.5C61 18.8828 59.637 20 57.95 20V25C57.95 26.3828 56.587 27.5 54.9 27.5H51.85V32.5C51.85 33.8828 50.487 35 48.8 35H45.75C44.063 35 42.7 33.8828 42.7 32.5V20V15V2.5C42.7 1.11719 44.063 0 45.75 0H48.8C50.487 0 51.85 1.11719 51.85 2.5ZM39.65 15V20H21.35V15H39.65Z" fill="#CF5A60" />
                        </svg>
                    </div>
                    <div class="icono_info_part">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="33" viewBox="0 0 38 33" fill="none">
                            <path d="M17.2759 0.454762C16.5776 -0.151587 15.4483 -0.151587 14.7574 0.454762L7.62522 6.64726C6.92686 7.25361 6.92686 8.23409 7.62522 8.83398L14.267 14.6007L13.1155 15.6006C11.2804 14.8652 9.24481 14.4524 7.09774 14.4524C4.74264 14.4524 2.5287 14.9491 0.574791 15.8199C-0.0938481 16.1231 -0.190429 16.8971 0.344482 17.3551L8.33843 24.3023L7.12002 25.3602C6.92686 25.3151 6.71884 25.2893 6.50339 25.2893C5.1884 25.2893 4.12601 26.2117 4.12601 27.3534C4.12601 28.4952 5.1884 29.4176 6.50339 29.4176C7.81838 29.4176 8.88077 28.4952 8.88077 27.3534C8.88077 27.1664 8.85106 26.9922 8.79905 26.818L10.0175 25.7601L18.0114 32.7009C18.5463 33.1653 19.4378 33.0815 19.7796 32.5009C20.79 30.8044 21.362 28.8822 21.362 26.8374C21.362 24.9732 20.8866 23.2057 20.0396 21.6189L21.1912 20.6191L27.8255 26.3858C28.5239 26.9922 29.6532 26.9922 30.3441 26.3858L37.4762 20.1933C38.1746 19.587 38.1746 18.6065 37.4762 18.0066L30.8344 12.2399L34.9205 8.69207C35.8492 7.88576 35.8492 6.5763 34.9205 5.76999L31.3545 2.67374C30.4258 1.86743 28.9177 1.86743 27.989 2.67374L23.9029 6.22153L17.2759 0.454762ZM29.0885 23.0961L23.7097 18.4259L28.3233 14.4201L33.7021 19.0968L29.0885 23.1025V23.0961ZM16.7781 12.414L11.3993 7.74385L16.0129 3.73808L21.3917 8.40825L16.7781 12.414Z" fill="#CF5A60" />
                        </svg>
                    </div>
                </div>

            </div>

            <div class="precio_hab">
                <div class="precio_hab_p">
                    <p class="precio1">Precio por noche<br> <span class="pre_nro">USD 116</span><span class="des_hab"><br> Incluye desayuno</span></p>
                    <p class="precio1"> <span class="pre_nro">USD 68</span><span class="des_hab"><br> Sin desayuno</span></p>
                </div>
                <a href="#" class="btn-rosado3">Reservar</a>
            </div>
            
        </div>
        <!-- habitacion 2 -->
        <div class="hab_part">
            <div class="img_hab">
                <img src="/build/img/hab1.webp" alt="">
            </div>
            <div class="info_hab">
                <div class="info_hab_3">
                    <div class="titulo_info">
                        <h5>Deluxe doble</h5>
                    </div>
                    <div class="info_adicional">
                        <p>Hasta 2 adultos y 2 niños por habitacion</p>
                    </div>
                    <div class="info_parrafo">
                        <p>Cálida y confortable habitación decorada al estilo clásico, cama Royal King con sábanas de algodón egipcio, soporte pa...Leer mas</p>
                    </div>
                </div>
                <div class="icono_info">
                    <div class="icono_info_part">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="32" viewBox="0 0 45 32" fill="none">
                            <path d="M3.81117 12.2071C8.66359 7.47857 15.246 4.57143 22.5035 4.57143C29.761 4.57143 36.3434 7.47857 41.1959 12.2071C42.096 13.0786 43.5166 13.05 44.3745 12.1429C45.2325 11.2357 45.2044 9.78572 44.3112 8.91429C38.6571 3.39286 30.9706 0 22.5035 0C14.0364 0 6.3499 3.39286 0.688752 8.90714C-0.204374 9.78571 -0.232504 11.2286 0.625459 12.1429C1.48342 13.0571 2.91102 13.0857 3.80414 12.2071H3.81117ZM22.5035 16C26.498 16 30.1408 17.5071 32.9257 20C33.861 20.8357 35.2815 20.7429 36.1043 19.8C36.9271 18.8571 36.8357 17.4071 35.9074 16.5714C32.3349 13.3714 27.6372 11.4286 22.5035 11.4286C17.3698 11.4286 12.6721 13.3714 9.10664 16.5714C8.17132 17.4071 8.08692 18.85 8.90973 19.8C9.73253 20.75 11.1531 20.8357 12.0884 20C14.8662 17.5071 18.5091 16 22.5105 16H22.5035ZM27.0043 27.4286C27.0043 26.2162 26.5301 25.0534 25.6861 24.1961C24.842 23.3388 23.6972 22.8571 22.5035 22.8571C21.3098 22.8571 20.165 23.3388 19.321 24.1961C18.4769 25.0534 18.0027 26.2162 18.0027 27.4286C18.0027 28.641 18.4769 29.8038 19.321 30.6611C20.165 31.5184 21.3098 32 22.5035 32C23.6972 32 24.842 31.5184 25.6861 30.6611C26.5301 29.8038 27.0043 28.641 27.0043 27.4286Z" fill="#CF5A60" />
                        </svg>
                    </div>

                    <div class="icono_info_part">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="32" viewBox="0 0 38 32" fill="none">
                            <path d="M3.8 4V22H34.2V4H3.8ZM0 4C0 1.79375 1.70406 0 3.8 0H34.2C36.2959 0 38 1.79375 38 4V22C38 24.2062 36.2959 26 34.2 26H3.8C1.70406 26 0 24.2062 0 22V4ZM7.6 28H30.4C31.4509 28 32.3 28.8937 32.3 30C32.3 31.1063 31.4509 32 30.4 32H7.6C6.54906 32 5.7 31.1063 5.7 30C5.7 28.8937 6.54906 28 7.6 28Z" fill="#CF5A60" />
                        </svg>
                    </div>

                    <div class="icono_info_part">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="35" viewBox="0 0 61 35" fill="none">
                            <path d="M9.15 2.5C9.15 1.11719 10.513 0 12.2 0H15.25C16.937 0 18.3 1.11719 18.3 2.5V15V20V32.5C18.3 33.8828 16.937 35 15.25 35H12.2C10.513 35 9.15 33.8828 9.15 32.5V27.5H6.1C4.41297 27.5 3.05 26.3828 3.05 25V20C1.36297 20 0 18.8828 0 17.5C0 16.1172 1.36297 15 3.05 15V10C3.05 8.61719 4.41297 7.5 6.1 7.5H9.15V2.5ZM51.85 2.5V7.5H54.9C56.587 7.5 57.95 8.61719 57.95 10V15C59.637 15 61 16.1172 61 17.5C61 18.8828 59.637 20 57.95 20V25C57.95 26.3828 56.587 27.5 54.9 27.5H51.85V32.5C51.85 33.8828 50.487 35 48.8 35H45.75C44.063 35 42.7 33.8828 42.7 32.5V20V15V2.5C42.7 1.11719 44.063 0 45.75 0H48.8C50.487 0 51.85 1.11719 51.85 2.5ZM39.65 15V20H21.35V15H39.65Z" fill="#CF5A60" />
                        </svg>
                    </div>
                    <div class="icono_info_part">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="33" viewBox="0 0 38 33" fill="none">
                            <path d="M17.2759 0.454762C16.5776 -0.151587 15.4483 -0.151587 14.7574 0.454762L7.62522 6.64726C6.92686 7.25361 6.92686 8.23409 7.62522 8.83398L14.267 14.6007L13.1155 15.6006C11.2804 14.8652 9.24481 14.4524 7.09774 14.4524C4.74264 14.4524 2.5287 14.9491 0.574791 15.8199C-0.0938481 16.1231 -0.190429 16.8971 0.344482 17.3551L8.33843 24.3023L7.12002 25.3602C6.92686 25.3151 6.71884 25.2893 6.50339 25.2893C5.1884 25.2893 4.12601 26.2117 4.12601 27.3534C4.12601 28.4952 5.1884 29.4176 6.50339 29.4176C7.81838 29.4176 8.88077 28.4952 8.88077 27.3534C8.88077 27.1664 8.85106 26.9922 8.79905 26.818L10.0175 25.7601L18.0114 32.7009C18.5463 33.1653 19.4378 33.0815 19.7796 32.5009C20.79 30.8044 21.362 28.8822 21.362 26.8374C21.362 24.9732 20.8866 23.2057 20.0396 21.6189L21.1912 20.6191L27.8255 26.3858C28.5239 26.9922 29.6532 26.9922 30.3441 26.3858L37.4762 20.1933C38.1746 19.587 38.1746 18.6065 37.4762 18.0066L30.8344 12.2399L34.9205 8.69207C35.8492 7.88576 35.8492 6.5763 34.9205 5.76999L31.3545 2.67374C30.4258 1.86743 28.9177 1.86743 27.989 2.67374L23.9029 6.22153L17.2759 0.454762ZM29.0885 23.0961L23.7097 18.4259L28.3233 14.4201L33.7021 19.0968L29.0885 23.1025V23.0961ZM16.7781 12.414L11.3993 7.74385L16.0129 3.73808L21.3917 8.40825L16.7781 12.414Z" fill="#CF5A60" />
                        </svg>
                    </div>
                </div>

            </div>

            <div class="precio_hab">
                <div class="precio_hab_p">
                    <p class="precio1">Precio por noche<br> <span class="pre_nro">USD 116</span><span class="des_hab"><br> Incluye desayuno</span></p>
                    <p class="precio1"> <span class="pre_nro">USD 68</span><span class="des_hab"><br> Sin desayuno</span></p>
                </div>
                <a href="#" class="btn-rosado3">Reservar</a>
            </div>
            
        </div>
        <a href="#" class="boton-rosado">Ver todas</a>
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
        <div class="salones_cont">


            <div class="card_padre">
                <div class="card_hija">
                    <div class="imagen_card">
                        <img src="/build/img/salon1.jpg" alt="">
                    </div>
                    <div class="texto_card">
                        <h5>Salon oporto</h5>
                        <p>
                            Capacidad: <span>450 personas</span>
                        </p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit Necessitatibus cum doloribus, consectetur soluta ...<span>Leer mas</span></p>
                    </div>
                </div>

                <div class="card_hija">
                    <div class="imagen_card">
                        <img src="/build/img/salon1.jpg" alt="">
                    </div>
                    <div class="texto_card">
                        <h5>Salon oporto</h5>
                        <p>
                            Capacidad: <span>450 personas</span>
                        </p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit Necessitatibus cum doloribus, consectetur soluta ...<span>Leer mas</span></p>
                    </div>
                </div>

                <div class="card_hija">
                    <div class="imagen_card">
                        <img src="/build/img/salon2.jpg" alt="">
                    </div>
                    <div class="texto_card">
                        <h5>Salon oporto</h5>
                        <p>
                            Capacidad: <span>450 personas</span>
                        </p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit Necessitatibus cum doloribus, consectetur soluta ...<span>Leer mas</span></p>
                    </div>
                </div>
            </div>
            <!-- <div class="salon_evento">
            <div class="imagen_evento">
            <!-- <img src="/build/img/fiesta.webp" alt=""> -->
            <!-- <h5>Disfrute su estadia</h5>
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
            </div> --> 
        </div>
    </div>
    <div class="espacio2"></div>
    <a href="#" class="boton-rosado2">Ver todos</a>
    <div class="espacio"></div>
</main>
<div class="f_evento2">


<p class="text_titulo_ev">¡LOS EVENTOS MAS RESALTANTES DE LA SEMANA!</p>
<div class="imagenes contenedor">
    <div class="imagenes_cont">
        <a href="#" class="img_ev_">
            <img src="/build/img/fiesta.webp" alt="">
        </a>
        <a href="#" class="img_ev_">
            <img src="/build/img/evento6.webp" alt="">
        </a>
        <a href="#" class="img_ev_">
            <img src="/build/img/evento7.webp" alt="">
        </a>
        <a href="#" class="img_ev_">
            <img src="/build/img/fiesta.webp" alt="">
        </a>
       
    </div>
    
</div>
<div class="espacio2"></div>
<div class="contenedor">
    <a href="#" class="boton-rosado2">Ver todos</a>
</div>
    
    <div class="espacio"></div>
</div>
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