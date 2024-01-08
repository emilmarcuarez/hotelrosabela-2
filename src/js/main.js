AOS.init();
fetch('https://restcountries.com/v2/all')
  .then(response => response.json())
  .then(data => {
    const countriesList = document.getElementById('countries-list');
    data.forEach(country => {
      const listItem = document.createElement('option');
      listItem.textContent = country.name;
      countriesList.appendChild(listItem);
    });
  });
document.addEventListener('DOMContentLoaded', function() {
	eventListeners();
  });
// contacto formulario


function eventListeners() {
	// muestra campos condicionales
	const metodoContacto=document.querySelectorAll('input[name="contacto[contactar]"]')
   
	// para añadirle un eventlisteners a un elemento:
	metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto));
  
  }
  
  function mostrarMetodosContacto(e){
	const contactoDiv=document.querySelector('#contacto');
  
   if(e.target.value==='telefono'){
	contactoDiv.innerHTML=`
	<label for="telefono">Numero de teléfono</label>
	<input type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]" required>
	
	<p>Elija la fecha y la hora para la llamada:</p>
  
	<label for="fecha">Fecha:</label>
	<input type="date" id="fecha" name="contacto[fecha]">
  
	<label for="hora">Hora:</label>
	<input type="time" id="hora" min="08:00" max="20:00" name="contacto[hora]">
	`;
   }else{
	contactoDiv.innerHTML=`
	<label for="email">E-mail</label>
	<input type="email" placeholder="Tu Email" id="email" name="contacto[email]" required>`;
   }
  }

  

fechaReserva.min = new Date().toISOString().split("T")[0];
fechaEgreso.min = new Date().toISOString().split("T")[0];
$(document).ready(function(){
	var imgItems = $('.slider li').length; // Numero de Slides
	var imgPos = 1;

	// Agregando paginacion --
	for(i = 1; i <= imgItems; i++){
		$('.pagination').append('<li><span class="fa fa-circle"></span></li>');
	} 
	//------------------------

	$('.slider li').hide(); // Ocultanos todos los slides
	$('.slider li:first').show(); // Mostramos el primer slide
	$('.pagination li:first').css({'color': '#24989c'}); // Damos estilos al primer item de la paginacion

	// Ejecutamos todas las funciones
	$('.pagination li').click(pagination);
	$('.right span').click(nextSlider);
	$('.left span').click(prevSlider);


	setInterval(function(){
		nextSlider();
	}, 4000);

	// FUNCIONES =========================================================

	function pagination(){
		var paginationPos = $(this).index() + 1; // Posicion de la paginacion seleccionada

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado

		// Dandole estilos a la paginacion seleccionada
		$('.pagination li').css({'color': '#858585'});
		$(this).css({'color': '#24989c'});

		imgPos = paginationPos;

	}

	function nextSlider(){
		if( imgPos >= imgItems){imgPos = 1;} 
		else {imgPos++;}

		$('.pagination li').css({'color': '#858585'});
		$('.pagination li:nth-child(' + imgPos +')').css({'color': '#24989c'});

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado

	}

	function prevSlider(){
		if( imgPos <= 1){imgPos = imgItems;} 
		else {imgPos--;}

		$('.pagination li').css({'color': '#858585'});
		$('.pagination li:nth-child(' + imgPos +')').css({'color': '#24989c'});

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
	}

});


// segundo slider
$(document).ready(function(){
	var imgItems2 = $('.slider2 li').length; // Numero de Slides
	var imgPos2 = 1;

	// Agregando paginacion --
	for(i = 1; i <= imgItems2; i++){
		$('.pagination2').append('<li><span class="fa fa-circle"></span></li>');
	} 
	//------------------------

	$('.slider2 li').hide(); // Ocultanos todos los slides
	$('.slider2 li:first').show(); // Mostramos el primer slide
	$('.pagination2 li:first').css({'color': '#24989c'}); // Damos estilos al primer item de la paginacion

	// Ejecutamos todas las funciones
	$('.pagination2 li').click(pagination2);
	$('.right2 span').click(nextSlider2);
	$('.left2 span').click(prevSlider2);


	setInterval(function(){
		nextSlider2();
	}, 4000);

	// FUNCIONES =========================================================

	function pagination2(){
		var paginationPos2 = $(this).index() + 1; // Posicion de la paginacion seleccionada

		$('.slider2 li').hide(); // Ocultamos todos los slides
		$('.slider2 li:nth-child('+ paginationPos2 +')').fadeIn(); // Mostramos el Slide seleccionado

		// Dandole estilos a la paginacion seleccionada
		$('.pagination2 li').css({'color': '#858585'});
		$(this).css({'color': '#24989c'});

		imgPos2 = paginationPos2;

	}

	function nextSlider2(){
		if( imgPos2 >= imgItems2){imgPos2 = 1;} 
		else {imgPos2++;}

		$('.pagination2 li').css({'color': '#858585'});
		$('.pagination2 li:nth-child(' + imgPos2 +')').css({'color': '#24989c'});

		$('.slider2 li').hide(); // Ocultamos todos los slides
		$('.slider2 li:nth-child('+ imgPos2 +')').fadeIn(); // Mostramos el Slide seleccionado

	}

	function prevSlider2(){
		if( imgPos2 <= 1){imgPos2 = imgItems2;} 
		else {imgPos2--;}

		$('.pagination2 li').css({'color': '#858585'});
		$('.pagination2 li:nth-child(' + imgPos2 +')').css({'color': '#24989c'});

		$('.slider2 li').hide(); // Ocultamos todos los slides
		$('.slider2 li:nth-child('+ imgPos2 +')').fadeIn(); // Mostramos el Slide seleccionado
	}

});

// tercer slider
$(document).ready(function(){
	var imgItems3 = $('.slider3 li').length; // Numero de Slides
	var imgPos3 = 1;

	// Agregando paginacion --
	for(i = 1; i <= imgItems3; i++){
		$('.pagination3').append('<li><span class="fa fa-circle"></span></li>');
	} 
	//------------------------

	$('.slider3 li').hide(); // Ocultanos todos los slides
	$('.slider3 li:first').show(); // Mostramos el primer slide
	$('.pagination3 li:first').css({'color': '#24989c'}); // Damos estilos al primer item de la paginacion

	// Ejecutamos todas las funciones
	$('.pagination3 li').click(pagination3);
	$('.right3 span').click(nextSlider3);
	$('.left3 span').click(prevSlider3);


	setInterval(function(){
		nextSlider3();
	}, 4000);

	// FUNCIONES =========================================================

	function pagination3(){
		var paginationPos3 = $(this).index() + 1; // Posicion de la paginacion seleccionada

		$('.slider3 li').hide(); // Ocultamos todos los slides
		$('.slider3 li:nth-child('+ paginationPos3 +')').fadeIn(); // Mostramos el Slide seleccionado

		// Dandole estilos a la paginacion seleccionada
		$('.pagination3 li').css({'color': '#858585'});
		$(this).css({'color': '#24989c'});

		imgPos3 = paginationPos3;

	}

	function nextSlider3(){
		if( imgPos3 >= imgItems3){imgPos3 = 1;} 
		else {imgPos3++;}

		$('.pagination3 li').css({'color': '#858585'});
		$('.pagination3 li:nth-child(' + imgPos3 +')').css({'color': '#24989c'});

		$('.slider3 li').hide(); // Ocultamos todos los slides
		$('.slider3 li:nth-child('+ imgPos3 +')').fadeIn(); // Mostramos el Slide seleccionado

	}

	function prevSlider3(){
		if( imgPos3 <= 1){imgPos3 = imgItems3;} 
		else {imgPos3--;}

		$('.pagination3 li').css({'color': '#858585'});
		$('.pagination3 li:nth-child(' + imgPos3 +')').css({'color': '#24989c'});

		$('.slider3 li').hide(); // Ocultamos todos los slides
		$('.slider3 li:nth-child('+ imgPos3 +')').fadeIn(); // Mostramos el Slide seleccionado
	}

});