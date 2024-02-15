//----------------------- chatbot-----------------------

$(document).ready(function () {
	const form_chatbot = document.querySelector(".typing-area5");
	form_chatbot.onsubmit = (e) => {
		e.preventDefault();
	}
	const form_chatbot2 = document.querySelector(".typ2");
	form_chatbot2.onsubmit = (e) => {
		e.preventDefault();
	}
	$("#btn_chat5").on("click", function () {
		$value = $("#data").val();
		$msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
		$(".chatbot_text").append($msg);
		$("#data").val('');

		// iniciar el código ajax
		$.ajax({
			url: `${location.origin}/chatbot`,
			type: 'POST',
			data: 'text=' + $value,
			success: function (result) {
				$replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
				$(".chatbot_text").append($replay);
				// cuando el chat baja, la barra de desplazamiento llega automáticamente al final
				$(".chatbot_text").scrollTop($(".chatbot_text")[0].scrollHeight);
			}
		});
	});

	$("#btn_chat6").on("click", function () {
		$value = $("#data2").val();
		$msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
		$(".chat_2").append($msg);
		$("#data2").val('');

		// iniciar el código ajax
		$.ajax({
			url: `${location.origin}/chatbot`,
			type: 'POST',
			data: 'text=' + $value,
			success: function (result) {
				$replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
				$(".chat_2").append($replay);
				// cuando el chat baja, la barra de desplazamiento llega automáticamente al final
				$(".chat_2").scrollTop($(".chat_2")[0].scrollHeight);
			}
		});
	});
});
// menu respondive
document.getElementById("btn_menu").addEventListener("click", mostrar_menu);

document.getElementById("back_menu").addEventListener("click", ocultar_menu);

nav = document.getElementById("nav");
background_menu = document.getElementById("back_menu");

function mostrar_menu() {

	nav.style.right = "0px";
	background_menu.style.display = "block";
}

function ocultar_menu() {

	nav.style.right = "-250px";
	background_menu.style.display = "none";
}

// seleccionar la imagen del pago de la reserva

if (document.getElementById('file-label')) {
    const inputFile = document.getElementById('imagen_reserva');
    const fileLabel = document.getElementById('file-label');
	console.log('prueba emi');
    inputFile.addEventListener('change', function() {
        if (inputFile.files.length > 0) {
            fileLabel.textContent = inputFile.files[0].name;
			console.log(inputFile.files[0].name);
        } else {
            fileLabel.textContent = 'Subir Imagen';
        }
    });
}




// AJAX

if (document.querySelector(".typing-area")) {
	const form = document.querySelector(".typing-area"),
		incoming_id = form.querySelector(".incoming_id").value,
		inputField = form.querySelector(".input-field"),
		sendBtn = form.querySelector("button"),
		chatBox = document.querySelector(".chat-box");

	form.onsubmit = (e) => {
		e.preventDefault();
	}

	inputField.focus();
	inputField.onkeyup = () => {
		if (inputField.value != "") {
			sendBtn.classList.add("active");
		} else {
			sendBtn.classList.remove("active");
		}
	}

	sendBtn.onclick = () => {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "/chat", true);
		xhr.onload = () => {
			if (xhr.readyState === XMLHttpRequest.DONE) {
				if (xhr.status === 200) {
					inputField.value = "";
					scrollToBottom();
				}
			}
		}
		let formData = new FormData(form);
		xhr.send(formData);
	}
	chatBox.onmouseenter = () => {
		chatBox.classList.add("active");
	}

	chatBox.onmouseleave = () => {
		chatBox.classList.remove("active");
	}

	setInterval(() => {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "/actualizar-chat", true);
		xhr.onload = () => {
			if (xhr.readyState === XMLHttpRequest.DONE) {
				if (xhr.status === 200) {
					let data = xhr.response;
					chatBox.innerHTML = data;
					if (!chatBox.classList.contains("active")) {
						scrollToBottom();
					}
				}
			}
		}
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send("usuarios_id=" + incoming_id);

	}, 500);

	function scrollToBottom() {
		chatBox.scrollTop = chatBox.scrollHeight;
	}
}
// captar la imagen
function crearGaleria(){
	if(document.querySelector('.img_datosreserva')){
		const galeria=document.querySelector('.img_datosreserva');
	const imagen2 = galeria.querySelector('img');
	const id = imagen2.src;
	imagen2.onclick=function(){
		mostrarImagen(id);
	}
	}
	
}

// mostrar imagen
function mostrarImagen(id){
	
    const imagen=document.createElement('picture');
	imagen.classList.add("picture_edit");
    imagen.innerHTML=`
     <img class="img_picture" loading="lazy" width="100%" height="100%" src="${id}" alt="imagen galeria">
    `;
// crear el overlay con la imagen
    const overlay=document.createElement('DIV');
    overlay.appendChild(imagen);
    overlay.classList.add('overlay');
    overlay.onclick=function(){
        const body=document.querySelector('body');
        // para poder cerrar una foto de la galeria al darle click en cualquier parte
        body.classList.remove('fijar-body');
        overlay.remove();
    }
// Boton para cerrar el modal
const cerrarModal=document.createElement('P');
cerrarModal.textContent='X';
cerrarModal.classList.add('btn-cerrar');
cerrarModal.onclick=function(){
    const body=document.querySelector('body');
    // para poder darle scroll luego de cerrar una foto de la galeria
    body.classList.remove('fijar-body');
    overlay.remove();
}
overlay.appendChild(cerrarModal);

// añadirlo al html
    const body=document.querySelector('body');
    body.appendChild(overlay);
    // para no darle scroll
    body.classList.add('fijar-body');
}


// chat de la parye del servidor. Panel administrativo

if (document.querySelector(".typing-area2")) {
	const form_chat_admi = document.querySelector(".typing-area2"),
		incoming_id3 = form_chat_admi.querySelector(".incoming_id2").value,
		inputField3 = form_chat_admi.querySelector(".input-field3"),
		sendBtn3 = form_chat_admi.querySelector("button"),
		chatBox3 = document.querySelector(".chat-box3");

	form_chat_admi.onsubmit = (e) => {
		e.preventDefault();
	}

	inputField3.focus();
	inputField3.onkeyup = () => {
		if (inputField3.value != "") {
			sendBtn3.classList.add("active");
		} else {
			sendBtn3.classList.remove("active");
		}
	}

	sendBtn3.onclick = () => {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "/chat2", true);
		xhr.onload = () => {
			if (xhr.readyState === XMLHttpRequest.DONE) {
				if (xhr.status === 200) {
					inputField3.value = "";
					scrollToBottom();
				}
			}
		}
		let formData = new FormData(form_chat_admi);
		xhr.send(formData);
	}
	chatBox3.onmouseenter = () => {
		chatBox3.classList.add("active");
	}

	chatBox3.onmouseleave = () => {
		chatBox3.classList.remove("active");
	}

	setInterval(() => {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "/actualizarChatServidor", true);
		xhr.onload = () => {
			if (xhr.readyState === XMLHttpRequest.DONE) {
				if (xhr.status === 200) {
					let data = xhr.response;
					chatBox3.innerHTML = data;
					if (!chatBox3.classList.contains("active")) {
						scrollToBottom();
					}
				}
			}
		}
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send("usuarios_id=" + incoming_id3);

	}, 500);

	function scrollToBottom() {
		chatBox3.scrollTop = chatBox3.scrollHeight;
	}
}

// ------------------------------------------
// recargar los usuarios
if (document.querySelector(".usuarios_mostrar")) {
	const usuarios_mostrar = document.querySelector(".usuarios_mostrar"),
		incoming_id4 = document.querySelector(".incoming_id4").value;

	setInterval(() => {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "/responder", true);
		xhr.onload = () => {
			if (xhr.readyState === XMLHttpRequest.DONE) {
				if (xhr.status === 200) {
					let data = xhr.response;
					usuarios_mostrar.innerHTML = data;
					if (!usuarios_mostrar.classList.contains("active")) {
						scrollToBottom();
					}
				}
			}
		}
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send("usuarios_id=" + incoming_id4);

	}, 500);

	function scrollToBottom() {
		usuarios_mostrar.scrollTop = usuarios_mostrar.scrollHeight;
	}
}


// -----------------------------------------
if (document.querySelector(".nav_menu_bg")) {
	const menu_div = document.querySelector(".nav_menu_bg");
	const btn_menu_opciones = document.querySelector("#menu_usuario");

	btn_menu_opciones.addEventListener("click", () => {
		menu_div.classList.toggle("active_menu");
	});
}

// la parte de gestion de usuario
if (document.querySelector(".formulario_usuario_act")) {
	const form_gestion = document.querySelector(".formulario_usuario_act"),
		id_usuario_act = form_gestion.querySelector(".id_usuario_act").value,
		nombre_id = form_gestion.querySelector("#nombre_id"),
		fecha_id = form_gestion.querySelector("#fecha_id"),
		apellido_id = form_gestion.querySelector("#apellido_id"),
		sexo_id = form_gestion.querySelector("#sexo_id"),
		cedula_id = form_gestion.querySelector("#identificacion_id"),
		nro_telefono_id = form_gestion.querySelector("#nro_telefono_id"),
		pais_id = form_gestion.querySelector("#countries-list"),
		estado_id = form_gestion.querySelector("#estado_id"),
		ciudad_id = form_gestion.querySelector("#ciudad_id"),
		direccion_id = form_gestion.querySelector("#direccion_id"),
		c_postal_id = form_gestion.querySelector("#c_postal_id"),
		email_id = form_gestion.querySelector("#email_id"),
		contrasenia = form_gestion.querySelector("#contarsenia_id"),
		sendBtn2 = form_gestion.querySelector("button");


	form_gestion.onsubmit = (e) => {
		e.preventDefault();
	}

	// inputField.focus();


	sendBtn2.onclick = () => {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "/actualizar-usuario", true);
		xhr.onload = () => {
			if (xhr.readyState === XMLHttpRequest.DONE) {
				if (xhr.status === 200) {
					Swal.fire({
						position: "top-end",
						icon: "success",
						title: "Sus datos han sido actualizados con exito",
						showConfirmButton: false,
						timer: 1500
					}).then(() => {
						setTimeout(() => {
							window.location.reload();
						}, 2000);
					})
				} else {
					Swal.fire({
						icon: 'info',
						title: 'Revise su conexion a internet',
						text: 'No se actualizaron sus datos, por favor, intente mas tarde.'
					})
				}
			}
		}
		let formData = new FormData(form_gestion);
		xhr.send(formData);
	}
}

// IN HOUSE LA RESERVA
if (document.querySelectorAll(".form_reservas")) {

	let reservas_btn = document.querySelectorAll(".form_recibida_reserva");


	reservas_btn.forEach(function (form_reserva) {
		// let	form_reserva = document.querySelector(".form_recibida_reserva"),
		let id_reserva = form_reserva.querySelector("input").value,
			sendBtn_reserva = form_reserva.querySelector(".boton-rojo-block_reservas");


		form_reserva.onsubmit = (e) => {
			e.preventDefault();
		}


		sendBtn_reserva.onclick = () => {
			let xhr = new XMLHttpRequest();
			xhr.open("POST", "/reserva/recibida", true);
			xhr.onload = () => {
				if (xhr.readyState === XMLHttpRequest.DONE) {
					if (xhr.status === 200) {
						Swal.fire({
							position: "top-end",
							icon: "success",
							title: "La reserva ha sido marcada como 'in house'",
							showConfirmButton: false,
							timer: 1500
						}).then(() => {
							setTimeout(() => {
								window.location.reload();
							}, 2000);
						})
					} else {
						Swal.fire({
							icon: 'info',
							title: 'Revise su conexion a internet',
							text: 'No se pudo cambiar el estado de la reserva, por favor, intente mas tarde.'
						})
					}
				}
			}
			let formData = new FormData(form_reserva);
			xhr.send(formData);
			// xhr.send("id_reserva="+id_reserva);
		}
	});

}


// Confirmada LA RESERVA
if (document.querySelector(".form_confirmada_reserva")) {

	let form_reserva = document.querySelector(".form_confirmada_reserva");


	// reservas_btn.forEach(function (form_reserva) {
		// let	form_reserva = document.querySelector(".form_recibida_reserva"),
		let id_reserva_conf = form_reserva.querySelector("input").value,
			sendBtn_reserva = form_reserva.querySelector(".boton-verde_confirmado");


		form_reserva.onsubmit = (e) => {
			e.preventDefault();
		}


		sendBtn_reserva.onclick = () => {
			let xhr = new XMLHttpRequest();
			xhr.open("POST", "/reservas/confirmar", true);
			xhr.onload = () => {
				if (xhr.readyState === XMLHttpRequest.DONE) {
					if (xhr.status === 200) {
						Swal.fire({
							position: "top-end",
							icon: "success",
							title: "La reserva ha sido marcada como 'confirmada'",
							showConfirmButton: false,
							timer: 1500
						}).then(() => {
							setTimeout(() => {
								window.location.reload();
							}, 2000);
						})
					} else {
						Swal.fire({
							icon: 'info',
							title: 'Revise su conexion a internet',
							text: 'No se pudo cambiar el estado de la reserva, por favor, intente mas tarde.'
						})
					}
				}
			}
			let formData = new FormData(form_reserva);
			xhr.send(formData);
			// xhr.send("id_reserva="+id_reserva);
		}
	// });

}


// bela asistente virtual y rose
if (document.querySelector("#bela_ia")) {
	const bela_ia = document.querySelector("#bela_ia");
	const rose_ia = document.querySelector("#rose_ia");
	const elegir_chatbot = document.querySelector(".elegir_chatbot");
	const part_chatbot_ia = document.querySelector(".part_chatbot_ia");
	const part_chatbot_ia2 = document.querySelector(".part_chatbot_ia2");
	const chat_display = document.querySelector("#chat_display");
	const chat_display2 = document.querySelector("#chat_display2");
	bela_ia.addEventListener("click", function () {
		elegir_chatbot.classList.add("ocultar_elegir");
		part_chatbot_ia.classList.add("activar_chat");
		chat_display.classList.add("activar_chat");
	});
	rose_ia.addEventListener("click", function () {
		elegir_chatbot.classList.add("ocultar_elegir");
		part_chatbot_ia2.classList.add("activar_chat");
		chat_display2.classList.add("activar_chat");
	});
}

// comentarios
if (document.querySelector(".comentarios")) {
	const form_comentario = document.querySelector(".form_comentario"),
		centros_consumo_id = form_comentario.querySelector("#centros_consumo_id").value,
		inputField2 = form_comentario.querySelector(".mensaje_comentario"),
		chatBox2 = document.querySelector(".comentarios"),
		sendBtnCentro = form_comentario.querySelector("button");


	form_comentario.onsubmit = (e) => {
		e.preventDefault();
	}
	inputField2.focus();
	inputField2.onkeyup = () => {
		if (inputField2.value != "") {
			sendBtnCentro.classList.add("active");
		} else {
			sendBtnCentro.classList.remove("active");
		}
	}
	sendBtnCentro.onclick = () => {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "/crear-comentario", true);
		xhr.onload = () => {
			if (xhr.readyState === XMLHttpRequest.DONE) {
				if (xhr.status === 200) {
					inputField2.value = "";
					scrollToBottom();
				}
			}
		}
		let formData = new FormData(form_comentario);
		xhr.send(formData);
	}

	chatBox2.onmouseenter = () => {
		chatBox2.classList.add("active");
	}

	chatBox2.onmouseleave = () => {
		chatBox2.classList.remove("active");
	}

	setInterval(() => {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "/actualizar-comentarios", true);
		xhr.onload = () => {
			if (xhr.readyState === XMLHttpRequest.DONE) {
				if (xhr.status === 200) {
					let data = xhr.response;
					chatBox2.innerHTML = data;
					if (!chatBox2.classList.contains("active")) {
						scrollToBottom();
					}
				}
			}
		}
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send("centros_consumo_id=" + centros_consumo_id);

	}, 500);

	function scrollToBottom() {
		chatBox2.scrollTop = chatBox2.scrollHeight;
	}
}
// ----cerrar comentarios---


if (document.querySelector(".form_eliminar_reserva")) {
	const form_eliminar_reserva = document.querySelector(".form_eliminar_reserva"),
		id = form_eliminar_reserva.querySelector("#id_reserva2").value,
		sendBtn3 = form_eliminar_reserva.querySelector("button");

	form_eliminar_reserva.onsubmit = (e) => {
		e.preventDefault();
	}

	// inputField.focus();


	sendBtn3.onclick = () => {
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success",
				cancelButton: "btn btn-danger"
			},
			buttonsStyling: false
		});
		Swal.fire({
			title: "¿Estas seguro de eliminar la reserva?",
			text: "No podras revertir esto",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Si, eliminar.",
			cancelButtonText: "No, mejor no",
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			reverseButtons: true

		}).then((result) => {
			if (result.isConfirmed) {
				let xhr = new XMLHttpRequest();
				xhr.open("POST", "/cancelar_reserva", true);
				xhr.onload = () => {
					if (xhr.readyState === XMLHttpRequest.DONE) {
						if (xhr.status === 200) {
							Swal.fire({
								position: "top-end",
								icon: "success",
								title: "La reserva ha sido eliminada con exito",
								showConfirmButton: false,
								timer: 1500
							}).then(() => {
								setTimeout(() => {
									window.location.reload();
								}, 2000);
							})
						} else {
							Swal.fire({
								icon: 'info',
								title: 'Revise su conexion a internet',
								text: 'No se elimino la reserva. Por favor, intente mas tarde.'
							})
						}
					}
				}
				let formData = new FormData(form_eliminar_reserva);
				xhr.send(formData);
			} else if (
				result.dismiss === Swal.DismissReason.cancel
			) {
				Swal.fire({
					title: "Operacion cancelada",
					text: "Su reserva no ha sido cancelada",
					icon: "error"
				});
			}
		});
	}
}
// -----------------------------------------------------------------------FIN
AOS.init();
// api de los paises
if (document.getElementById('countries-list')) {
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
}

// fecha en la gestion de usuario y registro
if(document.getElementById('fecha_id')){
	// Obtener el selector de fecha y el selector de año
	const fechaInput = document.getElementById('fecha_id');
	const yearSelect = document.getElementById('year-select');

	// Obtener el año actual y el año de nacimiento del usuario
	const fechaActual = new Date();
	const añoActual = fechaActual.getFullYear();
	const añoNacimiento = parseInt(fechaInput.value.substring(0, 4));

	// Llenar el selector de año con los últimos 100 años
	for (let i = añoActual; i >= añoActual - 100; i--) {
		const option = document.createElement('option');
		option.text = i;
		option.value = i;
		if (i === añoNacimiento) {
			option.selected = true;
		}
		yearSelect.add(option);
	}

	// Actualizar la fecha de nacimiento cuando se selecciona un año
	yearSelect.addEventListener('change', function() {
		const nuevoAño = yearSelect.value;
		const nuevoMes = fechaInput.value.substring(5, 7);
		const nuevoDia = fechaInput.value.substring(8, 10);
		fechaInput.value = `${nuevoAño}-${nuevoMes}-${nuevoDia}`;
	});
}
// fecha en el registro
if(document.getElementById('fecha')){
	// Obtener el selector de fecha y el selector de año
	const fechaInput = document.getElementById('fecha');
	const yearSelect = document.getElementById('year-select2');

	// Obtener el año actual y el año de nacimiento del usuario
	const fechaActual = new Date();
	const añoActual = fechaActual.getFullYear();
	const añoNacimiento = parseInt(fechaInput.value.substring(0, 4));

	// Llenar el selector de año con los últimos 100 años
	for (let i = añoActual; i >= añoActual - 100; i--) {
		const option = document.createElement('option');
		option.text = i;
		option.value = i;
		if (i === añoNacimiento) {
			option.selected = true;
		}
		yearSelect.add(option);
	}

	// Actualizar la fecha de nacimiento cuando se selecciona un año
	
	if(fechaInput.value===''){
		const nuevoAño = yearSelect.value;
		const nuevoMes = '01';
		const nuevoDia = '01';
		fechaInput.value = `${nuevoAño}-${nuevoMes}-${nuevoDia}`;
	}
	yearSelect.addEventListener('change', function() {
		const nuevoAño = yearSelect.value;
		const nuevoMes = fechaInput.value.substring(5, 7);
		const nuevoDia = fechaInput.value.substring(8, 10);
		fechaInput.value = `${nuevoAño}-${nuevoMes}-${nuevoDia}`;
		console.log("n dia: "+nuevoDia);
		console.log("n mes: "+nuevoMes);
		console.log("n año: "+nuevoAño);
	});
}

let paso = 1;
const pasoInicial = 1;
const pasoFinal = 3;

const reserva = {
	id: '',
	fecha_i: '',
	fecha_e: '',
	solicitudes: '',
	monto: '',
	ninos: '',
	adultos: '',
	cantidad: '',
	opcion_pago: '',
	hora_ll: '',
	codigo: '',
	habitaciones: [],
	habitaciones_re: [], // Nuevo campo para almacenar re_habitacion asociadas a habitaciones seleccionadas
	status: 2,
	imagen: '',
	traslado: ''
};

const re_habitacion = {
	id: '',
	id_reserva: '',
	id_habitacion: '',
	cantidad_d: 0,
	cantidad_s: 0,
};
const reserva_cant = {
	mostrar: 0,
	cant: 0
};
if (document.getElementById('fechaReserva2')) {
	const fechaIngresoInput = document.getElementById('fechaReserva2');
	const fechaEgresoInput = document.getElementById('fechaEgreso2');

	fechaIngresoInput.addEventListener('input', function () {
		// Obtener la fecha de ingreso
		const fechaIngreso = new Date(fechaIngresoInput.value);

		// Establecer la fecha de egreso un día después
		const fechaEgreso = new Date(fechaIngreso);
		fechaEgreso.setDate(fechaIngreso.getDate() + 1);

		// Formatear la fecha de egreso en el formato adecuado (YYYY-MM-DD)
		const formattedFechaEgreso = fechaEgreso.toISOString().split('T')[0];

		// Asignar la fecha de egreso y actualizar el atributo min
		fechaEgresoInput.value = formattedFechaEgreso;
		fechaEgresoInput.min = formattedFechaEgreso;
	});
}
if (document.querySelector('#fechaReserva2')) {
	const fechaReserva = document.querySelector('#fechaReserva2');
	const fechaEgreso = document.querySelector('#fechaEgreso2');
	fechaReserva.min = new Date().toISOString().split("T")[0];
	fechaEgreso.min = fechaReserva.value;
	fechaReserva.addEventListener('input', function () {
		fechaEgreso.min = fechaReserva.value;
	})
}


document.addEventListener('DOMContentLoaded', function () {
	const chatbot = document.getElementById("chatbot");
	const abrirBoton = document.getElementById("abrirChatbot");


	if (document.querySelector(".cerrar_chatbot")) {
		const cerrarBoton = document.querySelector(".cerrar_chatbot");
		cerrarBoton.addEventListener("click", function () {
			chatbot.classList.add("cerrado");
			chatbot.classList.remove("abierto");
			abrirBoton.classList.remove("cerrarbtn_chat");

		});
	}


if (document.getElementById("abrirChatbot")) {
	abrirBoton.addEventListener("click", function () {
		chatbot.classList.remove("cerrado");
		chatbot.classList.add("abierto");
		abrirBoton.classList.add("cerrarbtn_chat");
	});
}
	crearGaleria();
	eventListeners();
	limitarCaracteres();
	limitarCaracteres2();
	iniciarApp();
	if (document.querySelector('#fechaReserva2')) {
		const fechaReserva = document.querySelector('#fechaReserva2');
		const fechaEgreso = document.querySelector('#fechaEgreso2');
		fechaReserva.min = new Date().toISOString().split("T")[0];
		fechaEgreso.min = fechaReserva.value;
		fechaReserva.addEventListener('input', function () {
			fechaEgreso.min = fechaReserva.value;
		})
	}


});


var cantidadTotalHabitaciones = '';
function iniciarApp() {
	cantidadTotalHabitaciones = '';
	consultarApi();
	seleccionarSolicitudes();
	seleccionarHora();
	seleccionarPago();
	mostrarResumen();
	idUsuario();
	mostrarSeccion(); //muestra y oculta las secciones
	tabs();

}

// MODAL
if (document.getElementById('abrir_modal')) {
	let modal2 = document.getElementById('miModal2');
	let flex2 = document.getElementById('flex2');
	let abrir2 = document.getElementById('abrir_modal');
	let cerrar2 = document.getElementById('close2');
	let is_usuario = document.getElementById('id_usuario_acti');
	abrir2.addEventListener('click', function () {
		if (is_usuario.value === '') {
			Swal.fire({
				icon: 'info',
				title: 'Inicie sesion',
				text: 'Por favor, iniciar sesion o registrarse para poder habilitar el chat en linea con el hotel'
			})
		} else {
			modal2.style.display = 'block';
			modal2.style.zIndex = 5;
		}

	});

	cerrar2.addEventListener('click', function () {
		modal2.style.display = 'none';
	});

	window.addEventListener('click', function (e) {
		// console.log(e.target);
		if (e.target == flex) {
			modal.style.display = 'none';
		}
	});
}

let modal = document.getElementById('miModal');
let flex = document.getElementById('flex');
// let abrir=document.getE
if (document.getElementById('close')) {
	let cerrar = document.getElementById('close');


	cerrar.addEventListener('click', function () {
		modal.style.display = 'none';
	});
}



// consultar Api
async function consultarApi() {
	try {
		const urlParams = new URLSearchParams(window.location.search);
		const cantidad = urlParams.get('habitaciones');
		const ninos = urlParams.get('ninos');
		const adultos = urlParams.get('adultos');
		const fecha_i = urlParams.get('fechaReserva');
		const fecha_e = urlParams.get('fechaEgreso');
		const url = `${location.origin}/api/servicios`;
		const resultado = await fetch(url);
		const habitaciones = await resultado.json();
		reserva_cant.cant = 0;
		mostrarservicio(habitaciones, cantidad, ninos, adultos, fecha_i, fecha_e);


	} catch (error) {
		console.log(error);
	}
}

function mostrarservicio(habitaciones, cantidad, ninos, adultos, fecha_i, fecha_e) {
	reserva.fecha_e = fecha_e;
	reserva.fecha_i = fecha_i;
	reserva.cantidad = cantidad;
	reserva.ninos = ninos;
	reserva.adultos = adultos;

	console.log(reserva);
	habitaciones.forEach(habitacion => {
		const { id, imagen, nombre, descripcion, preciocd, preciosd, adultos, ninos } = habitacion;

		const nombreH = document.createElement('H5');
		nombreH.textContent = nombre;

		const descripcionH = document.createElement('P');
		descripcionH.textContent = descripcion;

		const infoH = document.createElement('P');
		infoH.textContent = `Hasta ${adultos} adultos y ${ninos} niños`;

		const imagenH = document.createElement('img');
		imagenH.src = `/imagenes_h/${imagen}`;

		const preciocd_h = document.createElement('P');
		preciocd_h.classList.add('precio-hab');
		preciocd_h.textContent = `USD ${preciocd}`;

		const preciosd_h = document.createElement('P');
		preciosd_h.textContent = `USD ${preciosd}`;

		const preciocd_h_text = document.createElement('P');
		preciocd_h_text.textContent = `Con desayuno`;

		const preciosd_h_text = document.createElement('P');
		preciosd_h_text.textContent = `Sin desayuno`;

		const precio_habi = document.createElement('DIV');
		precio_habi.classList.add('precio_habi');

		precio_habi.appendChild(preciocd_h_text);
		precio_habi.appendChild(preciocd_h);
		precio_habi.appendChild(preciosd_h_text);
		precio_habi.appendChild(preciosd_h);

		const img_hab = document.createElement('DIV');
		img_hab.classList.add('img_hab');
		img_hab.appendChild(imagenH);

		const descrip_precio = document.createElement('DIV');
		descrip_precio.classList.add('descrip_precio');


		const aH = document.createElement('a');
		aH.href = `/habitacion?id=${id}`;
		aH.appendChild(nombreH);
		aH.target = '_blank';
		const titulo_info = document.createElement('DIV');
		titulo_info.classList.add('titulo_info');
		titulo_info.appendChild(aH);

		const info_adicional = document.createElement('DIV');
		info_adicional.classList.add('info_adicional');
		info_adicional.appendChild(infoH);

		const info_parrafo = document.createElement('DIV');
		info_parrafo.classList.add('info_parrafo');
		info_parrafo.appendChild(descripcionH);

		descrip_precio.appendChild(info_parrafo);
		descrip_precio.appendChild(precio_habi);

		const info_hab_3 = document.createElement('DIV');
		info_hab_3.classList.add('info_hab_3');
		info_hab_3.appendChild(titulo_info);
		info_hab_3.appendChild(info_adicional);
		info_hab_3.appendChild(descrip_precio);
		// info_hab_3.appendChild(info_parrafo);

		const info_hab = document.createElement('DIV');
		info_hab.classList.add('info_hab');
		info_hab.appendChild(info_hab_3);

		const hab_part = document.createElement('DIV');
		hab_part.classList.add('hab_part2');
		hab_part.appendChild(img_hab);
		hab_part.appendChild(info_hab);
		hab_part.setAttribute("id", `abrir${id}`);

		hab_part.dataset.idServicio = id;
		hab_part.onclick = function () {
			seleccionarHabitacion2(habitacion);
		}

		document.querySelector('#habitaciones').appendChild(hab_part);

	});

	// añadir fecha
	const fecha_re = document.createElement('DIV');
	fecha_re.classList.add('fecha_re');

	const datos_seleccion_basic = document.createElement('DIV');
	datos_seleccion_basic.classList.add('datos_seleccion_basic');

	const fecha_re_i = document.createElement('input');
	fecha_re_i.type = 'date';
	fecha_re_i.value = reserva.fecha_i;
	fecha_re_i.addEventListener('input', function () {
		reserva.fecha_i = fecha_re_i.value;
	});


	const fecha_re_i_p = document.createElement('P');
	fecha_re_i_p.classList.add('fecha_reserva_p');
	fecha_re_i_p.textContent = "Check-in";

	// check-out
	const fecha_re2 = document.createElement('DIV');
	fecha_re2.classList.add('fecha_re');

	const fecha_re_e = document.createElement('input');
	fecha_re_e.type = 'date';
	fecha_re_e.value = reserva.fecha_e;
	fecha_re_e.addEventListener('input', function () {
		reserva.fecha_e = fecha_re_e.value;
	});

	const fecha_re_e_p = document.createElement('P');
	fecha_re_e_p.classList.add('fecha_reserva_p');
	fecha_re_e_p.textContent = "Check-out";

	const nino = document.querySelector('#ninos');
	nino.value = reserva.ninos;
	nino.addEventListener('input', function () {
		reserva.ninos = nino.value;
	});
	const adulto = document.querySelector('#adultos');
	adulto.value = reserva.adultos;
	adulto.addEventListener('input', function () {
		reserva.adultos = adulto.value;
	});
	const hab = document.querySelector('#habitaciones2');
	hab.value = reserva.cantidad;
	hab.addEventListener('input', function () {
		reserva.cantidad = hab.value;
	});

	const espacio = document.createElement('BR');
	espacio.classList.add('br');


	fecha_re.appendChild(fecha_re_i_p);
	fecha_re.appendChild(fecha_re_i);

	fecha_re2.appendChild(fecha_re_e_p);
	fecha_re2.appendChild(fecha_re_e);

	// datos_seleccion_basic.appendChild(counter_list);
	datos_seleccion_basic.appendChild(fecha_re);
	datos_seleccion_basic.appendChild(espacio);
	datos_seleccion_basic.appendChild(fecha_re2);


	document.querySelector('#datos_seleccion').appendChild(datos_seleccion_basic);
}
// var  cantidadTotalHabitaciones='';
function seleccionarHabitacion2(habitacion) {
	const { id } = habitacion;
	const { nombre } = habitacion;
	const { habitaciones, cantidad } = reserva;

	indexprueba = reserva.habitaciones_re.findIndex(hab_re => hab_re.id_habitacion === id);
	const re_habitacion = {
		id_reserva: '', // Puedes asignar aquí el valor correspondiente a id_reserva
		id_habitacion: id, // Asignamos el id de la habitación
		cantidad_d: 0, // Inicializamos la cantidad en 0
		cantidad_s: 0, // Inicializamos la cantidad en 0
	};
	const modal_body = document.getElementById('modal-body');
	modal_body.innerHTML = '';
	// Obtener la cantidad total de habitaciones
	let cantidadTotalHabitaciones = 0;
	cantidadTotalHabitaciones = reserva.cantidad;


	let textCantidad = document.createElement('p');
	textCantidad.textContent = 'Habitaciones con desayuno incluido:';
	let inputCantidad = document.createElement('input');
	inputCantidad.setAttribute('id', 'cant_desayuno');
	inputCantidad.type = 'text';
	inputCantidad.value = 0;
	// Inhabilitar el input
	inputCantidad.disabled = true;
	let btn_cant = document.createElement('button');
	btn_cant.type = 'button';
	btn_cant.classList.add('counter-btn');
	btn_cant.setAttribute('onclick', "incrementar3('cant_desayuno')");
	btn_cant.textContent = '+';
	let btn_cant2 = document.createElement('button');
	btn_cant2.type = 'button';
	btn_cant2.classList.add('counter-btn');
	btn_cant2.setAttribute('onclick', "decrementar3('cant_desayuno')");
	btn_cant2.textContent = '-';

	inputCantidad.addEventListener('change', function () {
		re_habitacion.cantidad_d = parseInt(inputCantidad.value) || 0;
	});
	let btn_cant3 = document.createElement('button');
	btn_cant3.type = 'button';
	btn_cant3.classList.add('counter-btn');
	btn_cant3.setAttribute('onclick', "incrementar3('cant_sdesayuno')");
	btn_cant3.textContent = '+';
	let textCantidad2 = document.createElement('p');
	textCantidad2.textContent = 'Habitaciones sin desayuno';
	let inputCantidad2 = document.createElement('input');
	inputCantidad2.type = 'text';
	inputCantidad2.setAttribute('id', 'cant_sdesayuno');
	inputCantidad2.value = 0;
	// Inhabilitar el input
	inputCantidad2.disabled = true;
	let btn_cant4 = document.createElement('button');
	btn_cant4.type = 'button';
	btn_cant4.classList.add('counter-btn');
	btn_cant4.setAttribute('onclick', "decrementar3('cant_sdesayuno')");
	btn_cant4.textContent = '-';
	//    if(indexprueba!==-1 && reserva.[]){
	// 		inputCantidad2.value=re_habitacion.cantidad_s;
	//    }

	inputCantidad2.addEventListener('change', function () {
		re_habitacion.cantidad_s = parseInt(inputCantidad2.value) || 0;

	});

	const seleccionar_hab_p = document.createElement('DIV');
	seleccionar_hab_p.classList.add('seleccionar_hab_p');
	seleccionar_hab_p.textContent = 'Seleccionar';
	const seleccionar_numeros = document.createElement('DIV');
	seleccionar_numeros.classList.add('seleccionar_numeros');
	seleccionar_numeros.appendChild(btn_cant);
	seleccionar_numeros.appendChild(inputCantidad);
	seleccionar_numeros.appendChild(btn_cant2);

	const seleccionar_numeros2 = document.createElement('DIV');
	seleccionar_numeros2.classList.add('seleccionar_numeros');
	seleccionar_numeros2.appendChild(btn_cant3);
	seleccionar_numeros2.appendChild(inputCantidad2);
	seleccionar_numeros2.appendChild(btn_cant4);

	modal_body.appendChild(textCantidad);
	modal_body.appendChild(seleccionar_numeros);
	//    modal_body.appendChild(btn_cant);
	//    modal_body.appendChild(inputCantidad);
	//    modal_body.appendChild(btn_cant2);
	modal_body.appendChild(textCantidad2);
	modal_body.appendChild(seleccionar_numeros2);
	//    modal_body.appendChild(btn_cant3);
	//    modal_body.appendChild(inputCantidad2);
	//    modal_body.appendChild(btn_cant4);
	modal_body.appendChild(seleccionar_hab_p);
	let abrir = document.getElementById(`abrir${id}`);
	modal.style.display = 'block';
	seleccionar_hab_p.onclick = function () {
		// Actualizar la entrada en habitaciones_re
		re_habitacion.cantidad_s = parseInt(inputCantidad2.value);
		re_habitacion.cantidad_d = parseInt(inputCantidad.value);
		const index = reserva.habitaciones.findIndex(hab => hab.id === id);

		seleccionarHabitacion(habitacion, re_habitacion);
	}

}
function validarCantidad() {
	let cantidadTotalHabitaciones = 0;
	cantidadTotalHabitaciones = reserva.cantidad;
	if (reserva_cant.cant > parseInt(cantidadTotalHabitaciones)) {
		return false
	} else {
		return true;
	}
}
function validarCantidadTotal(ult, valida) {
	let cantidadTotalHabitaciones = 0;
	cantidadTotalHabitaciones = reserva.cantidad;
	console.log('la cantidad actual: ' + reserva_cant.cant);
	if (valida === 2) {
		reserva_cant.cant -= ult;
	}
	if (reserva_cant.cant > parseInt(cantidadTotalHabitaciones)) {
		// Limitar las cantidades para que no superen la cantidad total
		Swal.fire({
			icon: 'info',
			title: 'Revise las cantidad',
			text: 'Esta introduciendo mas habitaciones de las que indico, por favor, modifiquelo si desea mas'
		})
		reserva_cant.cant -= ult;


	} else if (reserva_cant.cant === parseInt(cantidadTotalHabitaciones)) {
		Swal.fire({
			position: "top-end",
			icon: "success",
			title: "Las habitaciones han sido guardadas",
			showConfirmButton: false,
			timer: 1500
		});
		modal.style.display = 'none';
		paso = 2;
		mostrarSeccion();
	}
	if (reserva_cant.cant < 0) {
		reserva_cant.cant = 0;
		console.log('la cantidad actual PERO AHORA: ' + reserva_cant.cant);
	}
}
function seleccionarHabitacion(habitacion, re_habitacion) {
	const { id } = habitacion;
	let ult = 0;
	let valida = 0;
	const { nombre } = habitacion;
	const { habitaciones, habitaciones_re } = reserva;

	const divServicio = document.querySelector(`[data-id-servicio="${id}"]`);

	// Comprobar si una habitacion ya fue agregado 
	if (habitaciones.some(agregado => agregado.id === id)) {
		ult = 0;
		let indexprueba = 0;

		indexprueba = reserva.habitaciones_re.findIndex(hab_re => hab_re.id_habitacion === id);
		console.log('index: ' + indexprueba);
		if (indexprueba !== -1) {
			console.log(habitaciones_re[indexprueba]);
			if ((reserva.habitaciones_re[indexprueba].cantidad_s === 0) && reserva.habitaciones_re[indexprueba].cantidad_d !== 0) {
				console.log('if1');
				reserva_cant.cant = reserva_cant.cant - habitaciones_re[indexprueba].cantidad_d;

			} else if (reserva.habitaciones_re[indexprueba].cantidad_s !== 0 && reserva.habitaciones_re[indexprueba].cantidad_d === 0) {
				console.log('if2');
				reserva_cant.cant -= parseInt(reserva.habitaciones_re[indexprueba].cantidad_s);
			} else if (reserva.habitaciones_re[indexprueba].cantidad_s !== 0 && reserva.habitaciones_re[indexprueba].cantidad_d !== 0) {
				console.log('if3');
				reserva_cant.cant -= parseInt(reserva.habitaciones_re[indexprueba].cantidad_s) + parseInt(reserva.habitaciones_re[indexprueba].cantidad_d);
			} else {
				console.log('no entraron a los ifs: ' + reserva.habitaciones_re[indexprueba].cantidad_s + reserva.habitaciones_re[indexprueba].cantidad_d)

			}
		}
		reserva.habitaciones = habitaciones.filter(agregado => agregado.id !== id);
		reserva.habitaciones_re = habitaciones_re.filter(hab_re => hab_re.id_habitacion !== id);


		divServicio.classList.remove('seleccionado');

	} else {
		ult = 0;
		if (re_habitacion.cantidad_d && re_habitacion.cantidad_s) {
			ult = parseInt(re_habitacion.cantidad_s) + parseInt(re_habitacion.cantidad_d);
			reserva_cant.cant += parseInt(re_habitacion.cantidad_s) + parseInt(re_habitacion.cantidad_d);
		} else {
			if (re_habitacion.cantidad_s && !re_habitacion.cantidad_d) {
				ult = parseInt(re_habitacion.cantidad_s);
				reserva_cant.cant += parseInt(re_habitacion.cantidad_s);
			}
			else if (!re_habitacion.cantidad_s && re_habitacion.cantidad_d) {
				ult = parseInt(re_habitacion.cantidad_d);
				reserva_cant.cant += parseInt(re_habitacion.cantidad_d);

			}
		}
		if (validarCantidad()) {
			valida = 0;
			console.log('seleccionadoo');
			console.log(re_habitacion.cantidad_s);
			console.log(re_habitacion.cantidad_d);
			console.log('----------------');
			if (re_habitacion.cantidad_d !== 0 && re_habitacion.cantidad_s !== 0) {
				reserva.habitaciones = [...habitaciones, habitacion];
				reserva.habitaciones_re = [...habitaciones_re, re_habitacion];

				divServicio.classList.add('seleccionado');
				console.log('seleccionadoo');
				console.log(re_habitacion.cantidad_s);
				console.log(re_habitacion.cantidad_d);
				console.log('----------------');
				valida = 1;
			}

			if (re_habitacion.cantidad_s !== 0 && re_habitacion.cantidad_d === 0) {
				// re_habitacion.cantidad_d=0;
				reserva.habitaciones = [...habitaciones, habitacion];
				reserva.habitaciones_re = [...habitaciones_re, re_habitacion];

				divServicio.classList.add('seleccionado');
				console.log('seleccionadoo');
				console.log(re_habitacion.cantidad_s);
				console.log(re_habitacion.cantidad_d);
				console.log('----------------');
				valida = 1;
			}
			if (re_habitacion.cantidad_d !== 0 && re_habitacion.cantidad_s === 0) {
				// re_habitacion.cantidad_s=0;
				reserva.habitaciones = [...habitaciones, habitacion];
				reserva.habitaciones_re = [...habitaciones_re, re_habitacion];

				divServicio.classList.add('seleccionado');
				console.log('seleccionadoo');
				console.log(re_habitacion.cantidad_s);
				console.log(re_habitacion.cantidad_d);
				console.log('----------------');
				valida = 1;
			}
			if ((isNaN(re_habitacion.cantidad_s) && isNaN(re_habitacion.cantidad_d)) || (re_habitacion.cantidad_s === 0 && re_habitacion.cantidad_d === 0)) {
				// mostrar un aviso que no se selecciono porque ambos espacios estan en nulo

				Swal.fire({
					icon: 'info',
					title: 'Por favor, ingrese una cantidad valida',
					text: 'No puede seleccionar una habitacion hasta indicar cuantas quiere con desayuno o sin desayuno'
				})
				valida = 2;

			}

		}


	}
	validarCantidadTotal(ult, valida);

	mostrarResumen();
}
// Función para ocultar el aviso después de 6 segundos


function mostrarSeccion() {
	// ocultar la seccion que tenga la clase de mostrar
	// ocultar la seccion que tenga la clase de mostrar
	let tab2 = document.querySelector('.tabs');
	if (paso === 3) {
		tab2.classList.add("esconder_tabs");
	} else {
		tab2.classList.remove("esconder_tabs");;
	}
	const seccionAnterior = document.querySelector('.mostrar');
	if (seccionAnterior) {
		seccionAnterior.classList.remove('mostrar');
	}

	// seleccionar la seccion con el paso
	const pasoSelector = `#paso-${paso}`;
	const seccion = document.querySelector(pasoSelector);
	seccion.classList.add('mostrar');

	// quita el resaltador del tab anterior
	const tabAnterior = document.querySelector('.actual');
	if (tabAnterior) {
		tabAnterior.classList.remove('actual');
	}

	// reslata el tab actual
	const tab = document.querySelector(`[data-paso="${paso}"]`);
	tab.classList.add("actual");


	// }, 10); // ajusta este valor según sea necesario
}

function idUsuario() {
	reserva.id = document.querySelector('#id').value;
}
function seleccionarSolicitudes() {
	const textTarea = document.querySelector('#solicitudes');
	textTarea.addEventListener('change', function (e) {
		reserva.solicitudes = e.target.value;
	});
}
function seleccionarPago() {
	const radioButtons = document.querySelectorAll('input[name="m_pago"]');
	radioButtons.forEach(radioButton => {
		radioButton.addEventListener('input', function (e) {
			reserva.opcion_pago = e.target.value;

		});
	});
}

function seleccionarHora() {
	const inputHora = document.querySelector('#hora');
	inputHora.addEventListener('input', function (e) {
		reserva.hora_ll = e.target.value;

	});
}
function finalreserva() {

}
function mostrarResumen() {
	const resumen = document.querySelector('.contenido-resumen');
	const boton_reserva = document.querySelector('.boton-reserva');
	const part_resumen_monto = document.querySelector('.part_resumen_monto');
	// Limpiar el Contenido de Resumen
	while (resumen.firstChild) {
		resumen.removeChild(resumen.firstChild);
	}
	while (boton_reserva.firstChild) {
		boton_reserva.removeChild(boton_reserva.firstChild);
	}
	while (part_resumen_monto.firstChild) {
		part_resumen_monto.removeChild(part_resumen_monto.firstChild);
	}



	// Formatear el div de resumen
	const { fecha_e, fecha_i, ninos, adultos, habitaciones, habitaciones_re } = reserva;
	console.log(reserva);
	reserva.monto = 0;



	habitaciones.forEach(habitacion => {

		console.log(habitacion);
		const { id, imagen, nombre, descripcion, preciocd, preciosd, adultos, ninos } = habitacion;
		const contenedorHabitacion = document.createElement('DIV');
		contenedorHabitacion.classList.add('contenedor-habitacion');

		const textoHabitacion = document.createElement('P');
		textoHabitacion.textContent = nombre;
		const imagenHabitacion = document.createElement('IMG');

		imagenHabitacion.src = `/imagenes_h/${imagen}`;

		const precioHab_c = document.createElement('P');
		precioHab_c.innerHTML = `<span>Precio con desayuno:</span>  USD ${preciocd}`;

		const precioHab_s = document.createElement('P');
		precioHab_s.innerHTML = `<span>Precio sin desayuno:</span> USD ${preciosd}`;

		contenedorHabitacion.appendChild(textoHabitacion);
		contenedorHabitacion.appendChild(imagenHabitacion);
		// contenedorHabitacion.appendChild(precioHab_s);

		habitaciones_re.forEach(habitacionr => {
			const { id_habitacion, cantidad_d, cantidad_s } = habitacionr;
			if (parseInt(id_habitacion) === parseInt(id)) {


				if (!isNaN(cantidad_s) && cantidad_s !== 0) {
					// if(cantidad_s!== 0){
					const cantidads = document.createElement('P');
					let preciocant = 0;
					preciocant = cantidad_s * preciosd;
					cantidads.innerHTML = `<span>Habitaciones sin desayuno: </span> (${cantidad_s}). <br> Total: USD ${preciocant} por noche`;
					contenedorHabitacion.appendChild(cantidads);
					reserva.monto = reserva.monto + (parseFloat(preciosd) * parseFloat(cantidad_s));
					// }

					// contenedorHabitacion.appendChild(cantidads);
				} else {
					habitacionr.cantidad_s = 0;
				}
				if (!isNaN(cantidad_d) && cantidad_d !== 0) {
					// if(cantidad_d!== 0){
					const cantidadd = document.createElement('P');
					let preciocant2 = 0;
					preciocant2 = cantidad_d * preciocd;
					cantidadd.innerHTML = `<span>Habitaciones con desayuno incluido: </span> (${cantidad_d}). <br> Total: USD ${preciocant2} por noche`;
					reserva.monto = reserva.monto + (parseFloat(preciocd) * parseFloat(cantidad_d));
					contenedorHabitacion.appendChild(cantidadd);
					// }
				} else {
					habitacionr.cantidad_d = 0;
				}

			}
		});
		resumen.appendChild(contenedorHabitacion);
	});

	// Heading para Cita en Resumen
	const monto3 = document.createElement('p');
	monto3.innerHTML = `<span> El monto total es:</span> USD ${reserva.monto}`;
	// resumen.appendChild(monto3);

	// Boton para Crear una cita
	const botonReservar = document.createElement('BUTTON');
	const botonPdf = document.createElement('BUTTON');
	botonReservar.classList.add('btn_reservar');
	botonReservar.textContent = 'Enviar reserva';
	botonReservar.onclick = reservarHabitacion   // resumen.appendChild(nombreCliente);

	// formatear fecha ingreso:
	// Formatear la fecha en español
	const fechaObj = new Date(fecha_i);
	const mes = fechaObj.getMonth();
	const dia = fechaObj.getDate() + 2;
	const year = fechaObj.getFullYear();

	const fechaUTC = new Date(Date.UTC(year, mes, dia));

	const opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }
	const fechaFormateada = fechaUTC.toLocaleDateString('es-MX', opciones);
	// formatear fecha de salida:
	const fechaObj2 = new Date(fecha_e);
	const mes2 = fechaObj2.getMonth();
	const dia2 = fechaObj2.getDate() + 2;
	const year2 = fechaObj2.getFullYear();

	const fechaUTC2 = new Date(Date.UTC(year2, mes2, dia2));

	const opciones2 = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }
	const fechaFormateada2 = fechaUTC2.toLocaleDateString('es-MX', opciones2);

	const fecha_parrafo_i = document.createElement('P');
	fecha_parrafo_i.classList.add('fecha_parrafo_i');
	fecha_parrafo_i.innerHTML = ` <span>ENTRADA:</span> ${fechaFormateada}`;
	const fecha_parrafo_e = document.createElement('P');
	fecha_parrafo_e.classList.add('fecha_parrafo_e');
	fecha_parrafo_e.innerHTML = `<span>SALIDA:</span> ${fechaFormateada2}`;
	const adultos_parrafo = document.createElement('P');
	adultos_parrafo.classList.add('adultos_parrafo');
	adultos_parrafo.innerHTML = `<span>ADULTOS: </span>(${adultos})`;
	const ninos_parrafo = document.createElement('P');
	ninos_parrafo.classList.add('ninos_parrafo');
	ninos_parrafo.innerHTML = `<span>NIÑOS: </span>(${ninos})`;



	part_resumen_monto.appendChild(fecha_parrafo_i);
	part_resumen_monto.appendChild(fecha_parrafo_e);
	part_resumen_monto.appendChild(adultos_parrafo);
	part_resumen_monto.appendChild(ninos_parrafo);
	part_resumen_monto.appendChild(monto3);
	boton_reserva.appendChild(botonReservar);
}
function uuidv4() {

	return 'xxxxxxxxxxxx4xxx'.replace(/[x]/g, function () {
		return Math.floor(Math.random() * 10); // Números del 0 al 9
	});
}
async function reservarHabitacion() {

	const { fecha_i, fecha_e, solicitudes, cantidad, monto, opcion_pago, adultos, ninos, hora_ll, habitaciones, habitaciones_re, id, codigo, status, imagen, traslado } = reserva;
	// Generar código único para la reserva
	const codigo2 = uuidv4();
	const idHabitaciones = habitaciones.map(habitacion => habitacion.id);
	const checkbox = document.getElementById('traslado');
	const interestChecked = checkbox.checked;
	console.log(idHabitaciones);

	const datos = new FormData();
	const fileInput = document.getElementById('imagen_reserva');

	datos.append('usuarios_id', id);
	datos.append('fecha_i', fecha_i);
	datos.append('cantidad', cantidad);
	datos.append('fecha_e', fecha_e);
	datos.append('monto', monto);
	datos.append('solicitudes', solicitudes);
	datos.append('opcion_pago', opcion_pago);
	datos.append('adultos', adultos);
	datos.append('ninos', ninos);
	datos.append('hora_ll', hora_ll);
	datos.append('codigo', codigo2);
	// reserva.status=2;
	datos.append('status', status);
	if (opcion_pago === 'Transferencia' || opcion_pago === 'Bank of america') {
		reserva.imagen = fileInput.files[0];
		datos.append('imagen', reserva.imagen);
	} else {
		reserva.imagen = 'ninguna';
		datos.append('imagen', reserva.imagen );
	}
	datos.append('traslado',interestChecked);
	reserva.traslado=interestChecked;
	// datos.append('habitaciones', idHabitaciones);
	console.log(datos);
	habitaciones_re.forEach(habitacionre => {
		datos.append(`habitaciones[${habitacionre.id_habitacion}][id]`, habitacionre.id_habitacion);
		datos.append(`habitaciones[${habitacionre.id_habitacion}][cantidad_d]`, habitacionre.cantidad_d);
		datos.append(`habitaciones[${habitacionre.id_habitacion}][cantidad_s]`, habitacionre.cantidad_s);
	});
	console.log(reserva);
	reserva.codigo = codigo2;
	if ((Object.entries(reserva).filter(([key, value]) => key !== 'solicitudes' && (value === '' || value === undefined || value === null)).length > 0 || reserva.habitaciones.length === 0)) {
		Swal.fire({
			icon: 'error',
			title: 'Error',
			text: 'Por favor complete todos los campos primero'
		})

		return;
	} else {
		try {
			// Petición hacia la api
			const url = `${location.origin}/api/reservas`
			const respuesta = await fetch(url, {
				method: 'POST',
				body: datos
			});

			const resultado = await respuesta.json();
			console.log(resultado);
			if (resultado.resultado) {


				// Mostrar mensaje de éxito
				Swal.fire({
					icon: 'success',
					title: 'Reserva enviada',
					text: 'Su reserva fue registrada correctamente',
					button: 'OK'
				})

					.then(() => {
						setTimeout(() => {
							paso = 3;
							mostrarSeccion();
						}, 3000);
					});
			}
		} catch (error) {
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Hubo un error al guardar la reserva'
			})
		}


	}
}
// mostraralerta('correeee','error');

function mostrarAlerta(mensaje, tipo, elemento, desaparece = true) {

	// Previene que se generen más de 1 alerta
	const alertaPrevia = document.querySelector('.alerta');
	if (alertaPrevia) {
		alertaPrevia.remove();
	}

	// Scripting para crear la alerta
	const alerta = document.createElement('DIV');
	alerta.textContent = mensaje;
	alerta.classList.add('alerta');
	alerta.classList.add(tipo);

	const referencia = document.querySelector(elemento);
	referencia.appendChild(alerta);

	if (desaparece) {
		// Eliminar la alerta
		setTimeout(() => {
			alerta.remove();
		}, 3000);
	}

}
function tabs() {
	const botones = document.querySelectorAll('.tabs button');

	botones.forEach(boton => {
		boton.addEventListener('click', function (e) {
			paso = parseInt(e.target.dataset.paso);
			if (paso === 2 && reserva_cant.cant !== parseInt(reserva.cantidad) || (paso === 3 && reserva_cant.cant !== parseInt(reserva.cantidad))) {
				paso = 1;
				mostrarSeccion();
				Swal.fire({
					icon: 'info',
					title: 'Seleccione las habitaciones',
					text: `Por favor, seleccione las (${reserva.cantidad}) habitaciones para habilitar el paso 2`
				})
			} else {

				if (paso === 2) {
					mostrarResumen();
					mostrarSeccion();
				} else if (paso === 1) {
					mostrarSeccion();
				}
			}

		})
	});
}

function paginaAnterior() {
	const paginaAnterior = document.querySelector('#anterior');
	paginaAnterior.addEventListener('click', function () {
		if (paso <= pasoInicial) return;
		paso--;

		// botonesPaginas();
	})

}
function paginaSiguiente() {
	const paginaSiguiente = document.querySelector('#siguiente');
	paginaSiguiente.addEventListener('click', function () {
		if (paso >= pasoFinal) return;
		paso++;

		// botonesPaginas();
	})
}

function botonesPaginas() {
	const paginaAnterior = document.querySelector('#anterior');
	const paginaSiguiente = document.querySelector('#siguiente');
	if (paso === 1) {
		paginaAnterior.classList.add('ocultar2');
		paginaSiguiente.classList.remove('ocultar2');

	} else if (paso === 3) {
		mostrarResumen();
		paginaAnterior.classList.remove('ocultar2');
		paginaSiguiente.classList.add('ocultar2');
	} else {
		paginaAnterior.classList.remove('ocultar2');
		paginaSiguiente.classList.remove('ocultar2');
	}

	mostrarSeccion();
}
function limitarCaracteres() {
	var parrafos = document.querySelectorAll(".descripcion");

	parrafos.forEach(parrafo => {
		var texto = parrafo.innerHTML;
		var limite = 100; // Define el número máximo de caracteres que deseas mostrar

		if (texto.length > limite) {
			// En el caso específico de la función slice(0, limite), el valor 0 indica que se desea comenzar desde el primer carácter de la cadena original. El parámetro limite representa el índice final, es decir, el carácter justo antes del cual deseas cortar la cadena.
			var nuevoTexto = texto.slice(0, limite) + "...";
			parrafo.innerHTML = nuevoTexto;
		}
	});
}

function limitarCaracteres2() {
	if (document.querySelectorAll(".descripcion2")) {
		var parrafos = document.querySelectorAll(".descripcion2");

		parrafos.forEach(parrafo => {
			var texto = parrafo.innerHTML;
			var limite = 15; // Define el número máximo de caracteres que deseas mostrar

			if (texto.length > limite) {
				// En el caso específico de la función slice(0, limite), el valor 0 indica que se desea comenzar desde el primer carácter de la cadena original. El parámetro limite representa el índice final, es decir, el carácter justo antes del cual deseas cortar la cadena.
				var nuevoTexto = texto.slice(0, limite) + "...";
				parrafo.innerHTML = nuevoTexto;
			}
		});
	}
}
// IMAGEN



//   listaa que no funciona--- ARREGLAR----
function toggleLista() {

	let detalleReserva = document.querySelector('.counter-list');
	detalleReserva.classList.toggle("no-display");
}

function incrementar(tipo) {
	let inputElement = document.getElementById(tipo);
	let inputElement2 = document.getElementById('adultos2');
	let inputElement3 = document.getElementById('habitaciones3');
	let cantidad = parseInt(inputElement.value);

	if (tipo === 'habitaciones3') {
		inputElement2.value = cantidad + 1;
		inputElement3.value = cantidad + 1;
	} else {
		inputElement.value = cantidad + 1;
	}

	asignarValores();
}
function incrementar2(tipo) {
	let inputElement = document.getElementById(tipo);
	let inputElement2 = document.getElementById('adultos');
	let inputElement3 = document.getElementById('habitaciones2');
	let cantidad = parseInt(inputElement.value);

	if (tipo === 'habitaciones2') {
		inputElement2.value = cantidad + 1;
		inputElement3.value = cantidad + 1;
	} else {
		inputElement.value = cantidad + 1;
	}
	asignarValores2();
}

//   incrementar del modal
function incrementar3(tipo) {
	let inputElement = document.getElementById(tipo);

	inputElement.value = parseInt(inputElement.value) + 1;
}
function decrementar3(tipo) {
	let inputElement = document.getElementById(tipo);
	if (inputElement.value > 0) {
		inputElement.value = parseInt(inputElement.value) - 1;
	}

}

function decrementar(tipo) {
	var inputElement = document.getElementById(tipo);
	var cantidad = parseInt(inputElement.value);

	if (cantidad > 1 && (tipo === 'habitaciones3' || tipo === 'adultos2')) {
		inputElement.value = cantidad - 1;
		asignarValores();
	} else {
		if (cantidad > 0 && tipo === 'ninos2') {
			inputElement.value = cantidad - 1;
			asignarValores();
		}
	}
}
function decrementar2(tipo) {
	var inputElement = document.getElementById(tipo);
	var cantidad = parseInt(inputElement.value);

	if (cantidad > 1 && (tipo === 'habitaciones2' || tipo === 'adultos')) {
		inputElement.value = cantidad - 1;
		asignarValores2();
	} else {
		if (cantidad > 0 && tipo === 'ninos') {
			inputElement.value = cantidad - 1;
			asignarValores2();
		}
	}
}

function asignarValores() {
	var enlaceReserva = document.getElementById("btnEnviar3");
	var detalleReserva = document.getElementById('detalleReserva');
	var habitacionesElement = document.getElementById('habitaciones3');
	var adultosElement = document.getElementById('adultos2');
	var ninosElement = document.getElementById('ninos2');
	var fechaReserva = document.getElementById('fechaReserva2');
	var fechaEgreso = document.getElementById('fechaEgreso2');
	let id_usuario_valor = document.getElementById('id_usuario_valor');

	enlaceReserva.onclick = function () {
		if (parseInt(habitacionesElement.value) !== 0 && parseInt(adultosElement.value) !== 0 && fechaReserva.value !== '' && fechaEgreso.value !== '' & id_usuario_valor.value !== '') {
			detalleReserva.innerHTML = `${adultosElement.value} adultos · ${ninosElement.value} niños · ${habitacionesElement.value} habitaciones`;

			enlaceReserva.href = `/habitaciones_s?adultos=${adultosElement.value}&ninos=${ninosElement.value}&habitaciones=${habitacionesElement.value}&fechaEgreso=${fechaEgreso.value}&fechaReserva=${fechaReserva.value}`;
		} else {
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Completa todos los campos y recuerde iniciar sesion primero'
			})
		}
	}



}
function asignarValores2() {
	var habitacionesElement = document.getElementById('habitaciones2');
	var adultosElement = document.getElementById('adultos');
	var ninosElement = document.getElementById('ninos');
	var fechaReserva = document.getElementById('fechaReserva');
	var fechaEgreso = document.getElementById('fechaEgreso');

	// var enlaceReserva = document.getElementById("btnEnviar3");

	reserva.adultos = adultosElement.value;
	reserva.ninos = ninosElement.value;
	reserva.cantidad = habitacionesElement.value;

}


function eventListeners() {
	// muestra campos condicionales

	if (document.querySelectorAll('input[name="contacto[contactar]"]')) {
		const metodoContacto = document.querySelectorAll('input[name="contacto[contactar]"]')
		metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto));
	}
	if (document.querySelectorAll('input[name="m_pago"]')) {
		const radioButtons = document.querySelectorAll('input[name="m_pago"]');
		// para añadirle un eventlisteners a un elemento:
		radioButtons.forEach(input => input.addEventListener('click', mostrarMetodosPago));
	}

}

function mostrarMetodosContacto(e) {
	const contactoDiv = document.querySelector('#contacto');

	if (e.target.value === 'telefono') {
		contactoDiv.innerHTML = `
	<label for="telefono">Numero de teléfono</label>
	<input type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]" required>
	
	<p>Elija la fecha y la hora para la llamada:</p>
  
	<label for="fecha">Fecha:</label>
	<input type="date" id="fecha" name="contacto[fecha]">
  
	<label for="hora">Hora:</label>
	<input type="time" id="hora" min="08:00" max="20:00" name="contacto[hora]">
	`;
	} else {
		contactoDiv.innerHTML = `
	<label for="email">E-mail</label>
	<input type="email" placeholder="Tu Email" id="email" name="contacto[email]" required>`;
	}
}
function mostrarMetodosPago(e) {
	const pagoDiv = document.querySelector('#pago');

	if (e.target.value === 'Transferencia') {
		pagoDiv.innerHTML = `
	<p>Datos para la transferencia:</p>
	<p class="datos_banco">Banco de Venezuela <br> 01020102128192812 <br> J-0129210912 <br> Hotel RosaBela & Convention Center <br> </p>
	
	<p>Inserte la imagen del comprobante de pago </p>
	<label for="imagen_reserva" class="custom-file-upload" id="file-label">
    Subir Imagen
	</label>
	<input type="file" id="imagen_reserva" accept="image/jpeg, image/png" name="reserva[imagen]" required style="display: none;">
	`;
		// <input type="file" id="imagen_reserva" accept="image/jpeg, image/png" name="reserva[imagen]" required>	
	
		const inputFile = document.getElementById('imagen_reserva');
		const fileLabel = document.getElementById('file-label');
		console.log('prueba emi');
		inputFile.addEventListener('change', function() {
			if (inputFile.files.length > 0) {
				fileLabel.textContent = inputFile.files[0].name;
				console.log(inputFile.files[0].name);
			} else {
				fileLabel.textContent = 'Subir Imagen';
			}
		});
	} else if (e.target.value === 'Bank of America') {
		pagoDiv.innerHTML = `
	<p>Datos para el Bank of America:</p>
	<p class="datos_banco">Banco de Venezuela <br> 01020102128192812 <br> J-0129210912 <br> Hotel RosaBela & Convention Center <br> </p>
	<p>Inserte la imagen del comprobante de pago </p>
	<label for="imagen_reserva" class="custom-file-upload" id="file-label">
    Subir Imagen
	</label>
	<input type="file" id="imagen_reserva" accept="image/jpeg, image/png" name="reserva[imagen]" required style="display: none;">`;
	const inputFile = document.getElementById('imagen_reserva');
    const fileLabel = document.getElementById('file-label');
	console.log('prueba emi');
    inputFile.addEventListener('change', function() {
        if (inputFile.files.length > 0) {
            fileLabel.textContent = inputFile.files[0].name;
			console.log(inputFile.files[0].name);
        } else {
            fileLabel.textContent = 'Subir Imagen';
        }
    });

} else if (e.target.value === 'Pagar en el hotel') {
		pagoDiv.innerHTML = `
	<p> ¡No te preocupes! cancela en nuestras instalaciones sin costo adicional</p>`;
	}
}




$(document).ready(function () {


	var imgItems = $('.slider li').length; // Numero de Slides
	var imgPos = 1;

	// Agregando paginacion --
	for (i = 1; i <= imgItems; i++) {
		$('.pagination').append('<li><span class="fa fa-circle"></span></li>');
	}
	//------------------------

	$('.slider li').hide(); // Ocultanos todos los slides
	$('.slider li:first').show(); // Mostramos el primer slide
	$('.pagination li:first').css({ 'color': '#24989c' }); // Damos estilos al primer item de la paginacion

	// Ejecutamos todas las funciones
	$('.pagination li').click(pagination);
	$('.right span').click(nextSlider);
	$('.left span').click(prevSlider);


	setInterval(function () {
		nextSlider();
	}, 4000);

	// FUNCIONES =========================================================

	function pagination() {
		var paginationPos = $(this).index() + 1; // Posicion de la paginacion seleccionada

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child(' + paginationPos + ')').fadeIn(); // Mostramos el Slide seleccionado

		// Dandole estilos a la paginacion seleccionada
		$('.pagination li').css({ 'color': '#858585' });
		$(this).css({ 'color': '#24989c' });

		imgPos = paginationPos;

	}

	function nextSlider() {
		if (imgPos >= imgItems) { imgPos = 1; }
		else { imgPos++; }

		$('.pagination li').css({ 'color': '#858585' });
		$('.pagination li:nth-child(' + imgPos + ')').css({ 'color': '#24989c' });

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child(' + imgPos + ')').fadeIn(); // Mostramos el Slide seleccionado

	}

	function prevSlider() {
		if (imgPos <= 1) { imgPos = imgItems; }
		else { imgPos--; }

		$('.pagination li').css({ 'color': '#858585' });
		$('.pagination li:nth-child(' + imgPos + ')').css({ 'color': '#24989c' });

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child(' + imgPos + ')').fadeIn(); // Mostramos el Slide seleccionado
	}

	// slider dos


	var imgItems2 = $('.slider2 li').length; // Numero de Slides
	var imgPos2 = 1;

	// Agregando paginacion --
	for (i = 1; i <= imgItems2; i++) {
		$('.pagination2').append('<li><span class="fa fa-circle"></span></li>');
	}
	//------------------------

	$('.slider2 li').hide(); // Ocultanos todos los slides
	$('.slider2 li:first').show(); // Mostramos el primer slide
	$('.pagination2 li:first').css({ 'color': '#24989c' }); // Damos estilos al primer item de la paginacion

	// Ejecutamos todas las funciones
	$('.pagination2 li').click(pagination2);
	$('.right2 span').click(nextSlider2);
	$('.left2 span').click(prevSlider2);


	setInterval(function () {
		nextSlider2();
	}, 4000);

	// FUNCIONES =========================================================

	function pagination2() {
		var paginationPos2 = $(this).index() + 1; // Posicion de la paginacion seleccionada

		$('.slider2 li').hide(); // Ocultamos todos los slides
		$('.slider2 li:nth-child(' + paginationPos2 + ')').fadeIn(); // Mostramos el Slide seleccionado

		// Dandole estilos a la paginacion seleccionada
		$('.pagination2 li').css({ 'color': '#858585' });
		$(this).css({ 'color': '#24989c' });

		imgPos2 = paginationPos2;

	}

	function nextSlider2() {
		if (imgPos2 >= imgItems2) { imgPos2 = 1; }
		else { imgPos2++; }

		$('.pagination2 li').css({ 'color': '#858585' });
		$('.pagination2 li:nth-child(' + imgPos2 + ')').css({ 'color': '#24989c' });

		$('.slider2 li').hide(); // Ocultamos todos los slides
		$('.slider2 li:nth-child(' + imgPos2 + ')').fadeIn(); // Mostramos el Slide seleccionado

	}

	function prevSlider2() {
		if (imgPos2 <= 1) { imgPos2 = imgItems2; }
		else { imgPos2--; }

		$('.pagination2 li').css({ 'color': '#858585' });
		$('.pagination2 li:nth-child(' + imgPos2 + ')').css({ 'color': '#24989c' });

		$('.slider2 li').hide(); // Ocultamos todos los slides
		$('.slider2 li:nth-child(' + imgPos2 + ')').fadeIn(); // Mostramos el Slide seleccionado
	}


	// slider 3
	var imgItems3 = $('.slider3 li').length; // Numero de Slides
	var imgPos3 = 1;

	// Agregando paginacion --
	for (i = 1; i <= imgItems3; i++) {
		$('.pagination3').append('<li><span class="fa fa-circle"></span></li>');
	}
	//------------------------

	$('.slider3 li').hide(); // Ocultanos todos los slides
	$('.slider3 li:first').show(); // Mostramos el primer slide
	$('.pagination3 li:first').css({ 'color': '#24989c' }); // Damos estilos al primer item de la paginacion

	// Ejecutamos todas las funciones
	$('.pagination3 li').click(pagination3);
	$('.right3 span').click(nextSlider3);
	$('.left3 span').click(prevSlider3);


	setInterval(function () {
		nextSlider3();
	}, 4000);

	// FUNCIONES =========================================================

	function pagination3() {
		var paginationPos3 = $(this).index() + 1; // Posicion de la paginacion seleccionada

		$('.slider3 li').hide(); // Ocultamos todos los slides
		$('.slider3 li:nth-child(' + paginationPos3 + ')').fadeIn(); // Mostramos el Slide seleccionado

		// Dandole estilos a la paginacion seleccionada
		$('.pagination3 li').css({ 'color': '#858585' });
		$(this).css({ 'color': '#24989c' });

		imgPos3 = paginationPos3;

	}

	function nextSlider3() {
		if (imgPos3 >= imgItems3) { imgPos3 = 1; }
		else { imgPos3++; }

		$('.pagination3 li').css({ 'color': '#858585' });
		$('.pagination3 li:nth-child(' + imgPos3 + ')').css({ 'color': '#24989c' });

		$('.slider3 li').hide(); // Ocultamos todos los slides
		$('.slider3 li:nth-child(' + imgPos3 + ')').fadeIn(); // Mostramos el Slide seleccionado

	}

	function prevSlider3() {
		if (imgPos3 <= 1) { imgPos3 = imgItems3; }
		else { imgPos3--; }

		$('.pagination3 li').css({ 'color': '#858585' });
		$('.pagination3 li:nth-child(' + imgPos3 + ')').css({ 'color': '#24989c' });

		$('.slider3 li').hide(); // Ocultamos todos los slides
		$('.slider3 li:nth-child(' + imgPos3 + ')').fadeIn(); // Mostramos el Slide seleccionado
	}

});


