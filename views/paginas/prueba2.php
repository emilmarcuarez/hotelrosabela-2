<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap'); */
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
td,
th {
    border: 1px solid #6c696a;
  text-align: center;
  color: #4b4343;

}
th{
    padding: 1rem;
    background: #f4eeee;
  
}
td{
    padding:.4rem;
}
span{
    font-weight: bold;
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
   <p>Fecha de entrada: <?php echo date('d-m-Y', strtotime($reserva->fecha_i));?></p>
   <p>Fecha de salida: <?php echo date('d-m-Y', strtotime($reserva->fecha_e));?></p>
   <p>Hora de llegada a la ciudad (aproximadamente): <?php echo $reserva->hora_ll;?></p>
    <p>Cantidad de niños: (<?php echo $reserva->ninos?>)</p>
    <p>Cantidad de adultos: (<?php echo $reserva->adultos?>)</p>
  
   <p><span>s/d:</span>sin desayuno</p>
   <p><span>c/d:</span> con desayuno</p>
   <table>
            <tr>
                <th>Nombre</th>
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
   <hr>
    <p><br>Opcion de pago: <?php echo $reserva->opcion_pago;?></p>
  
   <p><span>Monto total</span>: USD <?php echo $reserva->monto;?></p>
   <hr>
</body>
</html>
