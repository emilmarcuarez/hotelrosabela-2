<div id="miModal3" class="modal3">
    <div class="flex3" id="flex3">
        <div class="contenido-modal3">
            <div class="modal-header3 flex3" id="miModal3">
                <div class="part_modal_header">
                    <img src="build/img/logo_.webp" alt="">
                    <h2>Plan de fidelizacion</h2>
                </div>

                <span class="close3" id="close3">&times;</span>
            </div>
            <div class="modal-body3" id="modal-body3">
                El hotel RosaBela te ofrece el programa para huespedes frecuentes Rb Rewards, el cual te proveera de exclusivos servicios a traves del mejor hotel de la ciudad.
                Con el program de lealtad Rb rewards, premiamos tu lealtad permitiendote redimir puntos por estadias en habitaciones standard, mejoras de habitacion y beneficios exclusivos dentro del hotel.
            </div>
        </div>
    </div>
</div>

<div class="f_reservas">
    <main class="contenedor">


        <div class="seccion55">
            <form action="" class="formulario_re">
                <div class="par_label">
                    <label for="fecha">Fecha de ingreso</label>
                    <input type="date" id="fechaReserva2" name="fechaReserva">
                </div>
                <div class="par_label">
                    <label for="fecha">Fecha de egreso</label>
                    <input type="date" id="fechaEgreso2" name="fechaEgreso">
                </div>

                <div class="par_label2">

                    <div id="seleccionPersonas" class="counter-container">
                        <div class="counter-row">
                            <div id="listaDesplegable" class="counter-select">
                                <!-- Opciones preseleccionadas -->
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
                <div class="btn_reserva_lista">
                    <input type="hidden" name="id" id="id_usuario_valor" value="<?php echo $_SESSION['usuario_id'] ?>">
                    <a id="btnEnviar3" value="Reservar" class="boton boton-rosado_reservaya" onclick="asignarValores()">Reservar ahora</a>
                </div>

            </form>
        </div>
        <!-- PAGINACION DE ANTERIOR- -->

        <!-- habitaciones -->
    </main>
</div>
<div class="rb_rewards">
    <div class="rb_rewards_flex contenedor">
        <div class="img_logo_rbrewards">
            <img src="build/img/logor.webp" alt="">
            <p>RB <span>Loyalty</span></p>
            <!-- <img src="build/img/logo_blanco_rb-01.webp" alt=""> -->
        </div>
        <div class="info_rb_rewards">
            <a href="/fidelizacion">Plan de fidelizacion</a>
            <a href="/loginusuario">Acceder</a>
        </div>
    </div>
</div>
<div class="f_habitaciones">
    <div class="habitaciones">

        <div class="hab contenedor">
            <div class="titulo_ha">
                <h4>Habitaciones</h4>
                <hr class="salones_hr">
            </div>

            <?php
            include 'listadoha.php';
            ?>
            <!-- HABITACIONES -->

            <a href="/habitaciones" class="boton-negro">Ver todas</a>
        </div>
    </div>
</div>


<main class="contenedor">
<<<<<<< HEAD
    <!-- <main class="contenedor" data-aos="fade-up" data-aos-duration="3000"> -->
=======
<!-- <main class="contenedor" data-aos="fade-up" data-aos-duration="3000"> -->
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
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
                        </div>
                    </li>
                    <li>
                        <img src="/build/img/evento2.webp" alt="" class="img_slider">>
                        <div class="imagen_header2">
                            <div class="imagen_header_fondo"></div>

                        </div>
                    </li>
                    <li>
                        <img src="/build/img/evento3.webp" alt="" class="img_slider">
                        <div class="imagen_header2">
                            <div class="imagen_header_fondo"></div>
                        </div>
                    </li>
<<<<<<< HEAD
                    <li>
                        <img src="/build/img/slider3.webp" alt="" class="img_slider">
                        <div class="imagen_header2">
                            <div class="imagen_header_fondo"></div>
                        </div>
                    </li>
=======
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
                </ul>

            </div>
        </div>
        <div class="imagen_evento">
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
        <?php include 'listadosa.php'; ?>
    </div>

    <!-- carrusel -->


    <!-- fin -->
    <div class="espacio2"></div>
    <a href="/salones" class="boton-rosado2 espacio_salon">Ver todos</a>
    <div class="espacio"></div>
</main>
<div class="contenedor">
<<<<<<< HEAD
    <div class="titulo_sal">
        <h4>Bodas</h4>
        <hr class="salones_hr">
    </div>
=======
<div class="titulo_sal">
            <h4>Bodas</h4>
            <hr class="salones_hr">
        </div>
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
    <!-- carrusel -->
    <div class="bodas_grid">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="build/img/boda3.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="build/img/boda2.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="build/img/boda1.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div><!-- FIN DE CARRUSEL -->
        <div class="texto_de_boda">
            <p>Las paredes de este gran hotel están listas para guardar sus recuerdos especiales.</p>
            <p><br>El hotel RosaBela tiene el placer de contar con una diverssa variedad de salones que se ajustaran a su evento, otorgando seguridad y confort en su recepcion. </p>
            <p><br>Un momento inolvidable como una boda debe ser recordado por toda la familia y amigos que vienen a celebrar el momento mas feliz de sus vidas y es por ello, que debes de planificar tu evento con nosotros. ¡Vive la experiencia!</p>
        </div>
    </div>
</div>
<<<<<<< HEAD

<div class="areas_hotel contenedor">
    <div class="area_membrete">
        <img src="build/img/logor.webp" alt="logo">
        <h2>Somos prestigio y confort</h2>
        <p>

En Rosa Bela Hotel & Convention Center pensamos en ofrecer el mejor servicio para su bienestar, descanso y confort. Además de disfrutar de nuestras excelentes habitaciones y zonas de recreación, encontrará cómodos salones que funcionan como centros de conferencias para eventos en Ciudad Guayana. Rosa Bela  Hotel & Convention Center dispone de lo mejor para sus clientes y huéspedes.
</p>
    </div>
    <div class="cont_iconos_areas">
        <div class="area_icono_parte">
            <div class="icono_fondo_parte">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-router" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 13m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                    <path d="M17 17l0 .01" />
                    <path d="M13 17l0 .01" />
                    <path d="M15 13l0 -2" />
                    <path d="M11.75 8.75a4 4 0 0 1 6.5 0" />
                    <path d="M8.5 6.5a8 8 0 0 1 13 0" />
                </svg> -->
                <img src="build/img/icono_wifi.webp" alt="">
            </div>
            <p>WIFI</p>
        </div>
        <div class="area_icono_parte">
            <div class="icono_fondo_parte">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-barbell" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M2 12h1" />
                    <path d="M6 8h-2a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h2" />
                    <path d="M6 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z" />
                    <path d="M9 12h6" />
                    <path d="M15 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z" />
                    <path d="M18 8h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2" />
                    <path d="M22 12h-1" />
                </svg> -->
                <img src="build/img/icono_gym.webp" alt="">
            </div>
            <p>GYM</p>
        </div>
        <div class="area_icono_parte">
            <div class="icono_fondo_parte">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pool" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M2 20a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1" />
                    <path d="M2 16a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1" />
                    <path d="M15 12v-7.5a1.5 1.5 0 0 1 3 0" />
                    <path d="M9 12v-7.5a1.5 1.5 0 0 0 -3 0" />
                    <path d="M15 5l-6 0" />
                    <path d="M9 10l6 0" />
                </svg> -->
                <img src="build/img/icono_taxi.webp" alt="">
            </div>
            <p>TAXI PRIVADO</p>
        </div>
        <div class="area_icono_parte">
            <div class="icono_fondo_parte">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chef-hat" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 3c1.918 0 3.52 1.35 3.91 3.151a4 4 0 0 1 2.09 7.723l0 7.126h-12v-7.126a4 4 0 1 1 2.092 -7.723a4 4 0 0 1 3.908 -3.151z" />
                    <path d="M6.161 17.009l11.839 -.009" />
                </svg> -->
                <img src="build/img/icono_centro.webp" alt="">
            </div>
            <p>CENTROS DE CONSUMO</p>
        </div>
        <div class="area_icono_parte">
            <div class="icono_fondo_parte">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car-garage" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M15 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M5 20h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                    <path d="M3 6l9 -4l9 4" />
                </svg> -->
                <img src="build/img/icono_estacionamiento.webp" alt="">
            </div>
            <p>ESTACIONAMIENTO</p>
        </div>
        <div class="area_icono_parte">
            <div class="icono_fondo_parte">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wash-machine" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                    <path d="M12 14m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M8 6h.01" />
                    <path d="M11 6h.01" />
                    <path d="M14 6h2" />
                    <path d="M8 14c1.333 -.667 2.667 -.667 4 0c1.333 .667 2.667 .667 4 0" />
                </svg> -->
                <img src="build/img/icono_lavanderia.webp" alt="">
            </div>
            <p>LAVANDERIA</p>
        </div>
    </div>
</div>

=======
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
<!-- eventos -->
<?php
include 'listadoev.php';
?>
<!--  -->


<!-- areas de restaurantes -->
<div class="bg_areas">
    <div class="contenedor areas_rest">
        <div class="area_rest_part">
            <div class="img_area1">
<<<<<<< HEAD
=======

>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
            </div>
            <p>Espacios ideales para disfrutar su estadia con el mejor ambiente.</p>
        </div>
        <div class="area_rest_part">
            <div class="img_area2">

            </div>
            <p>Los restaurantes mas atractivos de la región.</p>
        </div>
        <div class="area_rest_part">
            <div class="img_area3">

            </div>
            <p>Nada mejor que una tarde de piscina con tus snaks preferidos.</p>
        </div>

    </div>

</div>



<div class="ubicacion_fondo">
    <div class="contenedor">

        <div class="info_ubi_tittle">
            <p>UBICACIÓN</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="23" viewBox="0 0 36 46" fill="none">
                <path d="M20.2219 44.9664C25.0312 39.1834 36 25.1675 36 17.2948C36 7.74661 27.9375 0 18 0C8.0625 0 0 7.74661 0 17.2948C0 25.1675 10.9688 39.1834 15.7781 44.9664C16.9312 46.3445 19.0688 46.3445 20.2219 44.9664ZM18 11.5298C19.5913 11.5298 21.1174 12.1372 22.2426 13.2183C23.3679 14.2995 24 15.7658 24 17.2948C24 18.8237 23.3679 20.29 22.2426 21.3712C21.1174 22.4523 19.5913 23.0597 18 23.0597C16.4087 23.0597 14.8826 22.4523 13.7574 21.3712C12.6321 20.29 12 18.8237 12 17.2948C12 15.7658 12.6321 14.2995 13.7574 13.2183C14.8826 12.1372 16.4087 11.5298 18 11.5298Z" fill="#dc143c" />
            </svg>
        </div>
        <div class="text_ubi">
            <div class="info_ubi_av">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 40 40" fill="none">
                    <path d="M20 0C21.3828 0 22.5 1.11719 22.5 2.5V5.21094C28.7812 6.25781 33.7422 11.2188 34.7891 17.5H37.5C38.8828 17.5 40 18.6172 40 20C40 21.3828 38.8828 22.5 37.5 22.5H34.7891C33.7422 28.7812 28.7812 33.7422 22.5 34.7891V37.5C22.5 38.8828 21.3828 40 20 40C18.6172 40 17.5 38.8828 17.5 37.5V34.7891C11.2188 33.7422 6.25781 28.7812 5.21094 22.5H2.5C1.11719 22.5 0 21.3828 0 20C0 18.6172 1.11719 17.5 2.5 17.5H5.21094C6.25781 11.2188 11.2188 6.25781 17.5 5.21094V2.5C17.5 1.11719 18.6172 0 20 0ZM10 20C10 22.6522 11.0536 25.1957 12.9289 27.0711C14.8043 28.9464 17.3478 30 20 30C22.6522 30 25.1957 28.9464 27.0711 27.0711C28.9464 25.1957 30 22.6522 30 20C30 17.3478 28.9464 14.8043 27.0711 12.9289C25.1957 11.0536 22.6522 10 20 10C17.3478 10 14.8043 11.0536 12.9289 12.9289C11.0536 14.8043 10 17.3478 10 20ZM20 13.75C21.6576 13.75 23.2473 14.4085 24.4194 15.5806C25.5915 16.7527 26.25 18.3424 26.25 20C26.25 21.6576 25.5915 23.2473 24.4194 24.4194C23.2473 25.5915 21.6576 26.25 20 26.25C18.3424 26.25 16.7527 25.5915 15.5806 24.4194C14.4085 23.2473 13.75 21.6576 13.75 20C13.75 18.3424 14.4085 16.7527 15.5806 15.5806C16.7527 14.4085 18.3424 13.75 20 13.75Z" fill="#dc143c" />
                </svg>
                <p>Av. Norte Sur 4, Ciudad Guayana 8050, Bolívar</p>
            </div>
            <div class="info_ubi_av">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 27 25" fill="none">
                    <path d="M8.69551 1.20222C8.28948 0.294057 7.21902 -0.18932 6.19602 0.0694573L1.5556 1.24128C0.638058 1.47565 0 2.2471 0 3.12596C0 15.2055 10.578 25 23.624 25C24.5731 25 25.4063 24.4092 25.6594 23.5596L26.925 19.2629C27.2045 18.3157 26.6824 17.3246 25.7016 16.9486L20.6393 14.9956C19.7798 14.6635 18.7832 14.893 18.1978 15.5619L16.0675 17.9691C12.3551 16.3432 9.34939 13.5601 7.59342 10.1227L10.1931 8.15504C10.9155 7.60819 11.1634 6.69026 10.8048 5.8944L8.69551 1.2071V1.20222Z" fill="#dc143c" />
                </svg>
                <p>No dudes en contactarnos al: +58 424-92182910</p>
            </div>
        </div>
    </div>
    <div class="imagen_ubi">
        <img src="/build/img/ubi.webp" alt="ubicacion_imagen">
    </div>
</div>
<div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.2622215769698!2d-62.77879712498322!3d8.276679300311317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dcbf926378c5da3%3A0x5470f47009e15b6b!2sRosa%20Bela%20Hotel%20%26%20Convention%20Center!5e0!3m2!1ses!2sve!4v1706880135009!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<<<<<<< HEAD
</div>
=======
</div>
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15793.049098834696!2d-62.7762222!3d8.276674!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dcbf926378c5da3%3A0x5470f47009e15b6b!2sRosa%20Bela%20Hotel%20%26%20Convention%20Center!5e0!3m2!1ses-419!2sve!4v1704475270862!5m2!1ses-419!2sve" width="1423" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
<!-- <div class="seccion" id="paso-2">
    habitaciones
</div>
<div class="seccion" id="paso-3">
    Forma de pago
</div>
<div class="seccion" id="paso-4">
    Confirmacion
</div>
<div class="seccion" id="paso-3">
    verificate
</div> -->
>>>>>>> 0fc736a08ab2ba1bce5c230bddf053fb3de5e33d
