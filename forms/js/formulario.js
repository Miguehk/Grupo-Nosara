


const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

/*------------------------Expresiones---------------------------*/ 
const expresiones = {
	
	nombre:   /^[a-zA-ZÀ-ÿ\s]{1,40}$/,                                    // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,                                    // Letras y espacios, pueden llevar acentos.
    cedula:   /^\d{9,14}$/,                                               // 9 a 15 numeros.
    facelectronica: /^\d{20}$/,                                           // 20 digitos
    telefono: /^\d{8,14}$/,                                               // 8 a 15 numeros.
	electronico:   /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/     // debe terner el @
    
}

const campos = {

	nombre: false,
	apellido: false,
	cedula: false,
	facelectronica: false,
	telefono: false,
    electronico: false

}


/*------------------------Evento de validacion--------------------*/ 

const validarFormulario = (e) =>{
    switch(e.target.name){
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;
        case "apellido":
            validarCampo(expresiones.apellido, e.target, 'apellido');
        break;
        case "cedula":
            validarCampo(expresiones.cedula, e.target, 'cedula');
        break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
        break;
        case "facelectronica":
            validarCampo(expresiones.facelectronica, e.target, 'facelectronica');
        break;
        case "electronico":
            validarCampo(expresiones.electronico, e.target, 'electronico');
        break;
    }
}

const validarCampo = (expresion, input, campo) => {

	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}



inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {

	if(campos.nombre && campos.apellido && campos.cedula && campos.telefono && campos.facelectronica && campos.electronico && terminos.electronico){
        
		formulario.reset();
		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        e.preventDefault();
	}
});