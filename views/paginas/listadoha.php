
    <?php foreach($habitaciones as $habitacion):?>
        <div class="hab_part">
            <div class="img_hab">
                <img src="/imagenes_h/<?php echo $habitacion->imagen?>" alt="">
            </div>
            <div class="info_hab">
                <div class="info_hab_3">
                    <div class="titulo_info">
                        <a href="/habitacion?id=<?php echo $habitacion->id;?>"><h5><?php echo $habitacion->nombre?></h5></a>
                    </div>
                    <div class="info_adicional">
                        <p>Hasta <?php echo $habitacion->adultos?> adultos y <?php echo $habitacion->ninos?> niños por habitacion</p>
                    </div>
                    <div class="info_parrafo">
                        <p class="descripcion"><?php echo $habitacion->descripcion?></p>
                    </div>
                </div>
                <div class="icono_info">
                    <?php switch(intval($habitacion->servicios)){
                        case 1:
                        ?>
                    <ul class="flex_li2">
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
                    <?php 
                    break;

                    case 2: 
                    ?>
                     <ul class="flex_li2">
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
                    <?php 
                    break;

                    case 3: 
                    ?>
                   <ul class="flex_li2">
                        
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
                    <?php 
                    break;

                    case 4: 
                    ?>
                      <ul class="flex_li2">
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
                    <?php 
                    break;

                    case 5: 
                    ?>
                     <ul class="flex_li2">
                        <input type="radio" name="evento[centros_consumo_id]" value="1">
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
                    <?php 
                    break;
                    default: ?>
                        <h2>No encontrado</h2>
                        <?php break;
                     }
                    ?>
                    <!-- <div class="icono_info_part">
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
                        </svg> -->
              
                </div>

            </div>

            <div class="precio_hab">
                <div class="precio_hab_p">
                    <p class="precio1">Precio por noche<br> <span class="pre_nro">USD <?php echo $habitacion->preciocd?></span><span class="des_hab"><br> Incluye desayuno</span></p>
                    <p class="precio1"> <span class="pre_nro">USD <?php echo $habitacion->preciosd?></span><span class="des_hab"><br> Sin desayuno</span></p>
                </div>
                <a href="#" class="btn-rosado3">Reservar</a>
            </div>
</div>
            <?php endforeach ?>
