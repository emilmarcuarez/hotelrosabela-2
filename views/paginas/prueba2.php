<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
  h1{
    text-align: center;
    color: crimson;
  }
    body{
    font-family:Arial, Helvetica, sans-serif;
    color: #4b4343;
   }
    .header {
            overflow: hidden; /* Limpiar el float */
            height: 150px;
            padding-left: 200px;
            background-color: black;
        }
    .header p{
        float: left;
  margin: auto;
  position: relative;
  top: 40px;
        }
        .segundo_p   {
            /* margin-top:10px !important; */
            font-style: italic;
            color: rosybrown;
        }
    .header img {
            float: left; /* Float para la imagen */
            margin-right: 1rem; /* Espacio entre la imagen y el texto */
     }

    img{
        width:330px;
        height: 150px;
    }
    table {
        border-collapse: collapse;
  width: 100%;
  margin-top: 1rem;
}
td
{
  border-bottom: 1px solid gray;
}


th{
    padding: 1rem;
    background: #f4eeee;
    background: #8c8b8b;
  color: white;
  font-weight: normal;
}
td{
    padding:.4rem;
    color: #4b4343;
    text-align: center;
}
span{
    font-weight: bold;
}
.f_salida{
    position: relative;
  left: 27rem;
  bottom: 2.3rem;
}
.hr_linea2{
    border: 1px solid #f81654;
  margin-top: 3rem;
}
.info_pdf{
    font-weight: 500;
    color: #f81654;
    font-style: italic;
}
.span_c{
    /* color: #030303; */
  font-size: 1.3rem;
}
.codigo_p
{
  margin-bottom: 2rem;
}
.footer_pdf
{
  margin-top: 2rem;
  
}
.footer_pdf p{

    text-align: center;
    text-align: center;
  /* color: #000; */
  font-size: 0.8rem;
  font-style: italic;
}
</style>
<body>
<?php
$path = 'build/img/logopng.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base65 = 'data:image/' . $type . ';base64,' . base64_encode($data);
  
  
  ?>
       
       
    
    <header class="header">
      <img src="<?php echo $base65 ?>" alt="">
        <!-- <p>Hotel Rosa Bela & Convention center <br> <span class="segundo_p">¡Siente la diferencia!</span></p> -->
    </header>
   <!-- <hr> -->
   <h1>Reporte de la reserva</h1>
   <p><span> Fecha de entrada: </span><?php echo date('d-m-Y', strtotime($reserva->fecha_i));?></p>
   <p class="f_salida"> <span> Fecha de salida: </span><?php echo date('d-m-Y', strtotime($reserva->fecha_e));?></p>
   <p class="codigo_p">Codigo: <span class="span_c"><?php echo $reserva->codigo;?></span></p>
   <p class="info_pdf">Informacion </p>
   <p>Nombre y apellido: <?php echo $reserva->nombres?> <?php echo $reserva->apellidos?></p>
   <p>Numero de telefono: <?php echo $reserva->nro_telefono?> </p>
   <p>Hora de llegada a la ciudad (aproximadamente): <?php echo $reserva->hora_ll;?></p>
    <p>Cantidad de niños: (<?php echo $reserva->ninos?>)</p>
    <p>Cantidad de adultos: (<?php echo $reserva->adultos?>)</p>
    <p></p>
   <p><span>s/d:</span>sin desayuno</p>
   <p><span>c/d:</span> con desayuno</p>
   <table>
            <tr>
                <th>Tipo</th>
                <th>Precio por noche c/d</th>
                <th>Precio por noche s/d</th>
                <th>Cantidad c/d</th>
                <th>Cantidad s/d</th>
            </tr>
       
    <?php foreach($habitacionesReserva as $habr):?>
        <?php foreach($habitaciones as $habitacion):?>
            <?php if($habr->habitaciones_id === $habitacion->id){?>
            <tr>
            
                <td><?php echo $habitacion->nombre?></td>
                <td><?php echo $habitacion->preciocd?></td>
                <td><?php echo $habitacion->preciosd?></td>
                <td><?php echo $habr->cantidad_d?></td>
                <td><?php echo $habr->cantidad_s?></td>
            </tr>
            <?php }?>
        <?php endforeach?>
    <?php endforeach?>
   </table>
   <hr class="hr_linea2">
    <p><br>Opcion de pago: <?php echo $reserva->opcion_pago;?></p>
  
   <p><span>Monto total</span>: USD <?php echo $reserva->monto;?></p>
   <!-- <hr> -->

   <div class="footer_pdf">
        <?php $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    ?>
        <p>Hotel RosaBela & Convention center valida este reporte.</p>
        <p>Emitido el: <?php echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></p>
   </div>
</body>
</html>
