<div class="cont_hab">
        
        <div class="cont_hab_p">
            <div class="hab_img_text">
            <div class="servicios_imp">
    <?php switch(intval($habitacion->servicios)){
          case 1:
     ?>
        <div class="elemento_imp">
            <div class="elem_hab_imp_p">
                 <i class="fa-solid fa-bed"></i><p class="elemnto_sub">1 Cama king</p>
            </div>
            <div class="elem_hab_imp_p">
                <i class="fa-solid fa-tv"></i> <p class="elemnto_sub">TV por cable</p>
            </div>
            <div class="elem_hab_imp_p">
                 <i class="fa-solid fa-wifi"></i><p class="elemnto_sub">Wifi</p>
            </div>
        </div>
      
        <?php 
          break;

          case 2: 
           ?>
         <div class="elemento_imp">
            <div class="elem_hab_imp_p">
                 <i class="fa-solid fa-bed"></i><p class="elemnto_sub">2 camas matrimoniales</p>
            </div>
            <div class="elem_hab_imp_p">
                <i class="fa-solid fa-tv"></i> <p class="elemnto_sub">TV por cable</p>
            </div>
            <div class="elem_hab_imp_p">
                 <i class="fa-solid fa-wifi"></i><p class="elemnto_sub">Wifi</p>
            </div>
        </div>
          <?php 
          break;

          case 3: 
           ?>
              <div class="elemento_imp">
                    <div class="elem_hab_imp_p">
                        <i class="fa-solid fa-bed"></i><p class="elemnto_sub">1 cama king</p>
                    </div>
                    <div class="elem_hab_imp_p">
                        <i class="fa-solid fa-tv"></i> <p class="elemnto_sub">TV por cable</p>
                    </div>
                    <div class="elem_hab_imp_p">
                        <i class="fa-solid fa-wifi"></i><p class="elemnto_sub">Wifi</p>
                    </div>  
              </div>
             <?php 
          break;

          case 4: 
           ?>
           <div class="elemento_imp">
                <div class="elem_hab_imp_p">    
                    <i class="fa-solid fa-bed"></i><p class="elemnto_sub">2 Camas matrimoniales</p>
                </div>
                <div class="elem_hab_imp_p">
                    <i class="fa-solid fa-tv"></i> <p class="elemnto_sub">TV por cable</p>
                </div>
                <div class="elem_hab_imp_p">
                    <i class="fa-solid fa-wifi"></i><p class="elemnto_sub">Wifi</p>
                </div>  
            </div>
          <?php 
          break;

          case 5: 
           ?>
           <div class="elemento_imp">
                <div class="elem_hab_imp_p">    
                    <i class="fa-solid fa-bed"></i><p class="elemnto_sub">1 Cama matrimonial</p>
                </div>
                <div class="elem_hab_imp_p">
                    <i class="fa-solid fa-tv"></i> <p class="elemnto_sub">TV por cable</p>
                </div>
                <div class="elem_hab_imp_p">
                    <i class="fa-solid fa-wifi"></i><p class="elemnto_sub">Wifi</p>
                </div>  
            </div>
        <?php 
         break;
          default: ?>
           <!-- <h2>No encontrado</h2> -->
             <?php break;
               }
        ?>
    </div>
                <div class="img_hab">
                    <img src="/imagenes_h/<?php echo $habitacion->imagen;?>" alt="imagen de la habitacion">
                </div>
                <div class="text_hab_cant">
                    <p><?php echo intval($habitacion->adultos)+intval($habitacion->ninos)?> personas - <span class="p_recomendado">Recomendado:</span> <?php echo $habitacion->adultos;?> adultos y <?php echo $habitacion->ninos;?> niños</p>
                </div>
            </div>
            <div class="hab_info_text">

            
                <div class="hab_info_partes2 f_part3">
                    <div class="pre_part_info">
                        <p>Servicios</p>
                    </div>
                    <div class="pre_part_info">
                    <?php switch(intval($habitacion->servicios)){
                        case 1:
                        ?>
                    <ul class="flex_li2">
                        <li class="tooltip flex_li">
                            <i class="fa-solid fa-tv"></i> <span class="tooltiptext">TV por cable</span>
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-netflix" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bath" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1z" />
                            <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                            <path d="M4 21l1 -1.5" />
                            <path d="M20 21l-1 -1.5" />
                            </svg>
                            <span class="tooltiptext">Tina</span>
                        </li>
                        <li class="tooltip flex_li">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-couchdb" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-netflix" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bath" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fridge" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hanger"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 6a2 2 0 1 0 -4 0c0 1.667 .67 3 2 4h-.008l7.971 4.428a2 2 0 0 1 1.029 1.749v.823a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-.823a2 2 0 0 1 1.029 -1.749l7.971 -4.428" />
                                </svg>
                            <span class="tooltiptext">Closet</span>
                        </li>
                        <li class="tooltip flex_li">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radio" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-landline-phone"width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-netflix" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ce1066" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    </div>
                </div>

                <div class="hab_info_partes f_part1">
                    <div class="pre_part_info">
                        <p>Precio por noche</p>
                    </div>
                    <div class="pre_part_info">
                        <div class="part_info2">
                            <p>USD <?php echo $habitacion->preciosd;?></p>
                            <p>Sin desayuno</p>
                        </div>
                        <div class="part_info2">
                            <p>USD <?php echo $habitacion->preciocd;?></p>
                            <p>Con desayuno</p>
                        </div>
                    </div>
                </div>
                <div class="hab_info_partes f_part2">
                    <div class="pre_part_info">
                        <p class="p_tipo">Tipo</p>
                    </div>
                    <div class="pre_part_info">
                        <p class="p_tipo"><?php echo $habitacion->tipo;?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont_hab_p2">
            <div class="descrip_reg_hab">
                <p>Descripcion</p>
                <p><?php echo $habitacion->descripcion ?></p>
            </div>
            <div class="descrip_reg_hab2">
               <div class="f_hab_reg">
                    <div class="img_hab_reg">
                        <div class="cont_info_reg">
                            <p>Registrate</p>
                            <p>Y reserva con <br><span>Nosotros</span></p>
                            <img src="/build/img/logopng.webp" alt="">
                        </div>
                        <div class="cont_enlaces_reg">
                            <a href="/siginusuario">Registrar</a>
                            <a href="/loginusuario">Iniciar sesion</a>
                        </div>
                    </div>
               </div>
            </div>  
            <div class="btn_reservar4">
                <a href="/">¡Reserva YA!</a>
            </div>    
        </div>
    </div>