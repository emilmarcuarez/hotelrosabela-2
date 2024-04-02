
<fieldset class="cc_re_act">
            <legend>
                Informacion general de las habitaciones
            </legend>

            <label for="imagen">Imagen:</label>
            <p>La imagen debe ser: 1100px x 688px (Solo formato jpg y png)</p>
            <!-- con accept solo permite aceptar imagen jpeg y png-->
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="habitacion[imagen]">
                <?php if($habitacion->imagen) {?>
                    <img src="/imagenes_h/<?php echo $habitacion->imagen ?>" class="imagen-small">          
                    <?php }?>

                
            <!-- el name sera el que se manda a la base de datos, lee los datos, por medio de esa variable que es el nombre que le coloquemos es name -->
            <label for="nombre">Nombre: </label>
            <input type="text" name="habitacion[nombre]" id="nombre" placeholder="nombre de la habitacion" value="<?php echo s($habitacion->nombre); ?>">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" name="habitacion[descripcion]" cols="30" rows="10"><?php echo s($habitacion->descripcion); ?></textarea>
            <label for="centro">Seleccione los servicios que tiene la habitacion: </label>
            <div class="eventos_form">
                <div class="eventos_form_radio2">
                 
                <!-- 1 -->
                <ul class="flex_li2">
                        <?php if(intval($habitacion->servicios) === 1){ ?>
                            <input type="radio" name="habitacion[servicios]" value="1" checked>
                        <?php } else{?>
                            <input type="radio" name="habitacion[servicios]" value="1">
                        <?php } ?>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-tv"></i> <span class="tooltiptext">TV pantalla plana</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wifi"></i> <span class="tooltiptext">Wifi</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-bed"></i><span class="tooltiptext">1 Cama king</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wind"></i><span class="tooltiptext">Aire acondicionado</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                                <path d="M5 10h14" />
                                <path d="M9 13v3" />
                                <path d="M9 6v1" />
                            </svg><span class="tooltiptext">Nevera ejecutiva</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-box"></i><span class="tooltiptext">Caja fuerte</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5" />
                                <path d="M4 12h16" />
                                <path d="M7 12v-2" />
                                <path d="M17 16v.01" />
                                <path d="M13 16v.01" />
                                </svg>
                            <span class="tooltiptext">Radio</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M20 3h-2a2 2 0 0 0 -2 2v14a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-14a2 2 0 0 0 -2 -2z" />
                                    <path d="M16 4h-11a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h11" />
                                    <path d="M12 8h-6v3h6z" />
                                    <path d="M12 14v.01" />
                                    <path d="M9 14v.01" />
                                    <path d="M6 14v.01" />
                                    <path d="M12 17v.01" />
                                    <path d="M9 17v.01" />
                                    <path d="M6 17v.01" />
                                </svg>
                            <span class="tooltiptext">Telefono</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1" />
                            <path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5z" />
                            <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555" />
                            </svg>
                            </i> <span class="tooltiptext">Cafetera</span>
                        </li>
                    </ul>

                <!-- 2 -->
                   <ul class="flex_li2">
                        <?php if(intval($habitacion->servicios) === 2){ ?>
                            <input type="radio" name="habitacion[servicios]" value="2" checked>
                        <?php } else{?>
                            <input type="radio" name="habitacion[servicios]" value="2">
                        <?php } ?>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-tv"></i> <span class="tooltiptext">TV pantalla plana</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wifi"></i> <span class="tooltiptext">Wifi</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-bed"></i><span class="tooltiptext">2 camas matrimoniales</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wind"></i><span class="tooltiptext">Aire acondicionado</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                                <path d="M5 10h14" />
                                <path d="M9 13v3" />
                                <path d="M9 6v1" />
                            </svg><span class="tooltiptext">Nevera ejecutiva</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-box"></i><span class="tooltiptext">Caja fuerte</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5" />
                                <path d="M4 12h16" />
                                <path d="M7 12v-2" />
                                <path d="M17 16v.01" />
                                <path d="M13 16v.01" />
                                </svg>
                            <span class="tooltiptext">Radio</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M20 3h-2a2 2 0 0 0 -2 2v14a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-14a2 2 0 0 0 -2 -2z" />
                                    <path d="M16 4h-11a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h11" />
                                    <path d="M12 8h-6v3h6z" />
                                    <path d="M12 14v.01" />
                                    <path d="M9 14v.01" />
                                    <path d="M6 14v.01" />
                                    <path d="M12 17v.01" />
                                    <path d="M9 17v.01" />
                                    <path d="M6 17v.01" />
                                </svg>
                            <span class="tooltiptext">Telefono</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1" />
                            <path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5z" />
                            <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555" />
                            </svg>
                            </i> <span class="tooltiptext">Cafetera</span>
                        </li>
                    </ul>

                    <!-- 3 -->
                    <ul class="flex_li2">
                        <?php if(intval($habitacion->servicios) === 3){ ?>
                            <input type="radio" name="habitacion[servicios]" value="3" checked>
                        <?php } else{?>
                            <input type="radio" name="habitacion[servicios]" value="3">
                        <?php } ?>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-tv"></i> <span class="tooltiptext">TV por cable</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wifi"></i> <span class="tooltiptext">Wifi</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-bed"></i><span class="tooltiptext">1 cama king</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wind"></i><span class="tooltiptext">Aire acondicionado</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                                <path d="M5 10h14" />
                                <path d="M9 13v3" />
                                <path d="M9 6v1" />
                            </svg><span class="tooltiptext">Nevera ejecutiva</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-box"></i><span class="tooltiptext">Caja fuerte</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5" />
                                <path d="M4 12h16" />
                                <path d="M7 12v-2" />
                                <path d="M17 16v.01" />
                                <path d="M13 16v.01" />
                                </svg>
                            <span class="tooltiptext">Radio</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M20 3h-2a2 2 0 0 0 -2 2v14a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-14a2 2 0 0 0 -2 -2z" />
                                    <path d="M16 4h-11a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h11" />
                                    <path d="M12 8h-6v3h6z" />
                                    <path d="M12 14v.01" />
                                    <path d="M9 14v.01" />
                                    <path d="M6 14v.01" />
                                    <path d="M12 17v.01" />
                                    <path d="M9 17v.01" />
                                    <path d="M6 17v.01" />
                                </svg>
                            <span class="tooltiptext">Telefono</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1" />
                            <path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5z" />
                            <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555" />
                            </svg>
                            </i> <span class="tooltiptext">Cafetera</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-netflix" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 3l10 18h-4l-10 -18z" />
                            <path d="M5 3v18h4v-10.5" />
                            <path d="M19 21v-18h-4v10.5" />
                            </svg>
                            <span class="tooltiptext">Netflix</span>
                        </li>
                        <li class="tooltip flex_li">
                        <i class="fa-solid fa-champagne-glasses"></i>
                            <span class="tooltiptext">Mini bar</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bath" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1z" />
                            <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                            <path d="M4 21l1 -1.5" />
                            <path d="M20 21l-1 -1.5" />
                            </svg>
                            <span class="tooltiptext">Tina</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-couchdb" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6 12h12v-2a2 2 0 0 1 2 -2a2 2 0 0 0 -2 -2h-12a2 2 0 0 0 -2 2a2 2 0 0 1 2 2v2z" />
                            <path d="M6 15h12" />
                            <path d="M6 18h12" />
                            <path d="M21 11v7" />
                            <path d="M3 11v7" />
                            </svg>
                            <span class="tooltiptext">Sala estar para 6 personas</span>
                        </li>
                        
                    </ul>

                    <!-- 4 -->
                    <ul class="flex_li2">
                    <?php if(intval($habitacion->servicios) === 4){ ?>
                            <input type="radio" name="habitacion[servicios]" value="4" checked>
                        <?php } else{?>
                            <input type="radio" name="habitacion[servicios]" value="4">
                        <?php } ?>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-tv"></i> <span class="tooltiptext">TV por cable</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wifi"></i> <span class="tooltiptext">Wifi</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-bed"></i><span class="tooltiptext">2 Camas matrimoniales</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wind"></i><span class="tooltiptext">Aire acondicionado</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                                <path d="M5 10h14" />
                                <path d="M9 13v3" />
                                <path d="M9 6v1" />
                            </svg><span class="tooltiptext">Nevera ejecutiva</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-box"></i><span class="tooltiptext">Caja fuerte</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5" />
                                <path d="M4 12h16" />
                                <path d="M7 12v-2" />
                                <path d="M17 16v.01" />
                                <path d="M13 16v.01" />
                                </svg>
                            <span class="tooltiptext">Radio</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M20 3h-2a2 2 0 0 0 -2 2v14a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-14a2 2 0 0 0 -2 -2z" />
                                    <path d="M16 4h-11a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h11" />
                                    <path d="M12 8h-6v3h6z" />
                                    <path d="M12 14v.01" />
                                    <path d="M9 14v.01" />
                                    <path d="M6 14v.01" />
                                    <path d="M12 17v.01" />
                                    <path d="M9 17v.01" />
                                    <path d="M6 17v.01" />
                                </svg>
                            <span class="tooltiptext">Telefono</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1" />
                            <path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5z" />
                            <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555" />
                            </svg>
                            </i> <span class="tooltiptext">Cafetera</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-netflix" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 3l10 18h-4l-10 -18z" />
                            <path d="M5 3v18h4v-10.5" />
                            <path d="M19 21v-18h-4v10.5" />
                            </svg>
                            <span class="tooltiptext">Netflix</span>
                        </li>
                        <li class="tooltip flex_li">
                        <i class="fa-solid fa-champagne-glasses"></i>
                            <span class="tooltiptext">Mini bar</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bath" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1z" />
                            <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                            <path d="M4 21l1 -1.5" />
                            <path d="M20 21l-1 -1.5" />
                            </svg>
                            <span class="tooltiptext">Tina</span>
                        </li>
                        
                    </ul>
                    
                    <!-- 5 -->
                    <ul class="flex_li2">
                    <?php if(intval($habitacion->servicios) === 5){ ?>
                            <input type="radio" name="habitacion[servicios]" value="5" checked>
                        <?php } else{?>
                            <input type="radio" name="habitacion[servicios]" value="5">
                        <?php } ?>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-tv"></i> <span class="tooltiptext">TV pantalla plana</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wifi"></i> <span class="tooltiptext">Wifi</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-bed"></i><span class="tooltiptext">1 Cama matrimonial</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-wind"></i><span class="tooltiptext">Aire acondicionado</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                                <path d="M5 10h14" />
                                <path d="M9 13v3" />
                                <path d="M9 6v1" />
                            </svg><span class="tooltiptext">Nevera ejecutiva</span>
                        </li>
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-box"></i><span class="tooltiptext">Caja fuerte</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5" />
                                <path d="M4 12h16" />
                                <path d="M7 12v-2" />
                                <path d="M17 16v.01" />
                                <path d="M13 16v.01" />
                                </svg>
                            <span class="tooltiptext">Radio</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M20 3h-2a2 2 0 0 0 -2 2v14a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-14a2 2 0 0 0 -2 -2z" />
                                    <path d="M16 4h-11a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h11" />
                                    <path d="M12 8h-6v3h6z" />
                                    <path d="M12 14v.01" />
                                    <path d="M9 14v.01" />
                                    <path d="M6 14v.01" />
                                    <path d="M12 17v.01" />
                                    <path d="M9 17v.01" />
                                    <path d="M6 17v.01" />
                                </svg>
                            <span class="tooltiptext">Telefono</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1" />
                            <path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2" />
                            <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5z" />
                            <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555" />
                            </svg>
                            </i> <span class="tooltiptext">Cafetera</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-netflix" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cf5a60" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 3l10 18h-4l-10 -18z" />
                            <path d="M5 3v18h4v-10.5" />
                            <path d="M19 21v-18h-4v10.5" />
                            </svg>
                            <span class="tooltiptext">Netflix</span>
                        </li>
                        <li class="tooltip flex_li">
                        <i class="fa-solid fa-champagne-glasses"></i>
                            <span class="tooltiptext">Mini bar</span>
                        </li>
                      
                    </ul>

                 
                </div>
</div>

            
            <label for="preciosd">Precio en USD SIN DESAYUNO:</label>
            <input type="text" name="habitacion[preciosd]" id="preciosd" placeholder="precio de la habitacion" value="<?php echo s($habitacion->preciosd); ?>">
            <label for="preciocd">Precio en USD CON DESAYUNO:</label>
            <input type="text" name="habitacion[preciocd]" id="preciocd" placeholder="precio de la habitacion" value="<?php echo s($habitacion->preciocd); ?>">
           
            <label for="ninos">Cantidad de niños:</label>
            <input type="number" name="habitacion[ninos]" id="ninos" placeholder="cantidad max de niños" value="<?php echo s($habitacion->ninos); ?>">
           
            <label for="adultos">Cantidad de adultos:</label>
            <input type="number" name="habitacion[adultos]" id="adultos" placeholder="cantidad max de adultos" value="<?php echo s($habitacion->adultos); ?>">
            <label for="tipo">Tipo de habitacion (ejm: suite):</label>
            <input type="text" name="habitacion[tipo]" id="tipo" placeholder="cantidad max de adultos" value="<?php echo s($habitacion->tipo); ?>">
           
        </fieldset>
