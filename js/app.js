// slider
if (document.querySelector('.contenedor-slider')) {
    let index = 1;
    let selectedIndex = 1;

    const slides = document.querySelector('.slider');
    const slide = slides.children;
    const slidesTotal = slides.childElementCount;

    const dots = document.querySelector('.dots');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    // Puntos de los Slides
    for (let i = 0; i < slidesTotal; i++) {
        dots.innerHTML += '<span class="dot "></span>';
    }
    // Ejecutamos la funcion MostrarSlider
    mostrarSlider(index);

    // Slide Automatico
    setInterval(() => { mostrarSlider(index = selectedIndex); }, 4500);

    // Funcion Mostrar Slider
    function mostrarSlider(num) {

        if (selectedIndex > slidesTotal) {
            selectedIndex = 1;
        } else {
            selectedIndex++;
        }

        if (num > slidesTotal) {
            index = 1;
        }

        if (num < 1) {
            index = slidesTotal;
        }

        // Quitamos la clase active de los slide
        for (let i = 0; i < slidesTotal; i++) {
            slide[i].classList.remove('active');
        }

        for (let x = 0; x < dots.children.length; x++) {
            dots.children[x].classList.remove('active');
        }


        slide[index - 1].classList.add('active');

        dots.children[index - 1].classList.add('active');

    }

    // Evento para mostrar slider con los botones
    next.addEventListener('click', (e) => {
        mostrarSlider(index += 1);
        selectedIndex = index;
    });

    prev.addEventListener('click', (e) => {
        mostrarSlider(index += -1);
        selectedIndex = index;
    })

    // dots
    for (let y = 0; y < dots.children.length; y++) {
        dots.children[y].addEventListener('click', () => {
            mostrarSlider(index = y + 1);
            selectedIndex = y + 1;
        });
    }
}

// tabs Formulario
const tabLink = document.querySelectorAll('.tab-link');
const formularios = document.querySelectorAll('.formulario');

for (let x = 0; x < tabLink.length; x++) {
    tabLink[x].addEventListener('click', () => {

        // Removemos la clase actiev de los tabs
        tabLink.forEach((tab) => tab.classList.remove('active'));

        // Agregamos la clase active de los tabs que se le da click
        tabLink[x].classList.add('active');

        // Mostramos el formulario que se le de click
        formularios.forEach((form) => form.classList.remove('active'));
        formularios[x].classList.add('active');

    });
}

// Mostrar contraseña
const mostrarClave = document.querySelectorAll('.mostrarClave');
const inputPass = document.querySelectorAll('.clave');

for (let i = 0; i < mostrarClave.length; i++) {
    mostrarClave[i].addEventListener('click', () => {
        if (inputPass[i].type === "password") {
            // cambiamos el tipo password a text
            inputPass[i].setAttribute('type', 'text');

            // Quitamos la clases del icono
            mostrarClave[i].classList.remove('fa-eye');

            // mostramos el icono del ojo con una diagonal
            mostrarClave[i].classList.add('fa-eye-slash');

            // agregamos la clase active
            mostrarClave[i].classList.add('active');

        } else {
            // cambiamos el tipo de texto a password
            inputPass[i].setAttribute('type', 'password');

            // Quitamos la clases del icono
            mostrarClave[i].classList.remove('fa-eye-slash');

            // mostramos el nuevo icono 
            mostrarClave[i].classList.add('fa-eye');

            // Quitamos la clase active
            mostrarClave[i].classList.remove('active');
        }
    })
}

// Formulario de Registro
let nombre, correo,telefono, password, cbx_notificaciones, cbx_terminos;

if (document.getElementById('btnRegistro')) {
    const btnRegistro = document.getElementById('btnRegistro')

    btnRegistro.addEventListener('click', (e) => {
        e.preventDefault();

        const msError = document.querySelector('#formRegistro .error-text');

        msError.innerHTML = "";
        msError.classList.remove('active');

        nombre = formRegistro.nombre.value.trim();
        correo = formRegistro.correo.value.trim();
        password = formRegistro.password.value.trim();

        cbx_notificaciones = formRegistro.cbx_notificaciones;
        cbx_terminos = formRegistro.cbx_terminos;

        if (nombre == "" && correo == "" && password == "") {
            mostrarError('Todos Los Campos Son Obligatorios', msError);

            inputError([formRegistro.nombre, formRegistro.correo, formRegistro.password]);
            return false;
        } else {
            inputErrorRemove([formRegistro.nombre, formRegistro.correo, formRegistro.password]);
        }

        if (nombre == "" || nombre == null) {
            mostrarError('Por Favor Ingrese Su Nombre', msError);
            inputError([formRegistro.nombre]);
            formRegistro.nombre.focus();
            return false;
        }

        if (correo == "" || correo == null) {
            mostrarError('Por Favor Ingrese Su Correo', msError);
            inputError([formRegistro.correo]);
            formRegistro.correo.focus();
            return false;
        } else {
            if (!ValidarCorreo(correo)) {
                mostrarError('Por favor ingrese un correo valido', msError);
                inputError([formRegistro.correo]);
                formRegistro.correo.focus();
                return false;
            }
        }

        if (password == "" || password == null) {
            mostrarError('Por Favor Ingrese Su Contraseña', msError);
            inputError([formRegistro.password]);
            formRegistro.password.focus();
            return false;
        } else {
            if (password <= 4) {
                mostrarError('Contraseña debil, minimo 5 Caracteres', msError);
                inputError([formRegistro.password]);
                formRegistro.password.focus();
                return false;
            }
        }

        if (cbx_terminos.checked == false) {
            mostrarError('Por favor acepta terminos y condiciones', msError);

            formRegistro.cbx_terminos.parentNode.classList.add('cbx-error');
            return false;
        } else {
            formRegistro.cbx_terminos.parentNode.classList.remove('cbx-error');
        }

        // enviamos el formularios, para recibirlo con php
        formRegistro.submit();
        return true;
    });
    formRegistro.cbx_terminos.addEventListener('change', (e) => {
        if (e.targe.checked) {
            formRegistro.cbx_terminos.parentNode.classList.remove('cbx-error');
        }
    });
}

// Validamos formulario de Login
if(document.getElementById('btnLogin'))
{
    const btnLogin=document.getElementById('btnLogin');
    
    btnLogin.addEventListener('click',(e)=>
    {
        e.preventDefault();

        const msError=document.querySelector('#formLogin .error-text');
        msError.innerHTML="";
        msError.classList.remove('active');

        correo=formLogin.correo.value.trim();
        password=formLogin.password.value.trim();

        if(correo=="" && password=="")
        {
            mostrarError('Por favor ingrese su usuario y contraseña',msError);
            inputError([formLogin.correo,formLogin.password]);
            return false;
        }else{
            inputErrorRemove([formLogin.correo, formLogin.password]);
        }

        if (correo == "" || correo == null) {
            mostrarError('Por Favor Ingrese Su Correo', msError);
            inputError([formLogin.correo]);
            formLogin.correo.focus();
            return false;
        } else {
            if (!ValidarCorreo(correo)) {
                mostrarError('Por favor ingrese un correo valido', msError);
                inputError([formLogin.correo]);
                formLogin.correo.focus();
                return false;
            }
        }

        if(password=="" || password==null)
        {
            mostrarError('Por favor ingrese su contraseña',msError);
            inputError([formLogin.password]);
            formLogin.password.focus();
            return false;
        }

        formLogin.submit();
        return true;
    })
}


// Formulario Contacto
if(document.getElementById('btnContact'))
{
    const btnContact=document.getElementById('btnContact');
    
    btnContact.addEventListener('click',(e)=>
    {
        e.preventDefault();

        const msError=document.querySelector('#formContact .error-text');
        msError.innerHTML="";
        msError.classList.remove('active');

        nombre=formContact.nombre.value.trim();
        correo=formContact.correo.value.trim();
        telefono=formContact.telefono.value.trim();

        if (nombre == "" && correo == "" && telefono == "") {
            mostrarError('Todos Los Campos Son Obligatorios', msError);

            inputError([formContact.nombre, formContact.correo, formContact.telefono]);
            return false;
        } else {
            inputErrorRemove([formContact.nombre, formContact.correo, formContact.telefono]);
        }

        if(nombre=="" || nombre==null){
            mostrarError('Por Favor Ingrese Su Nombre Completo', msError);
            inputError([formContact.nombre]);
            formContact.nombre.focus();
            return false;
        }

        if (correo == "" || correo == null) {
            mostrarError('Por Favor Ingrese Su Correo', msError);
            inputError([formContact.correo]);
            formContact.correo.focus();
            return false;
        } else {
            if (!ValidarCorreo(correo)) {
                mostrarError('Por favor ingrese un correo valido', msError);
                inputError([formContact.correo]);
                formContact.correo.focus();
                return false;
            }
        }

        if(telefono=="" || telefono==null)
        {
            mostrarError('Por favor ingrese su Numero De Contacto',msError);
            inputError([formContact.telefono]);
            formContact.telefono.focus();
            return false;
        }

        formContact.submit();
        return true;
    })
}


// Funcionesque muestran errores
// mostrar el error
function mostrarError(mensaje, msError) {
    msError.classList.add('active');

    msError.innerHTML = '<p>' + mensaje + '</p>';
}

function inputError(datos) {
    for (let i = 0; i < datos.length; i++) {
        datos[i].classList.add('input-error');
    }
}

function inputErrorRemove(datos) {
    for (let i = 0; i < datos.length; i++) {
        datos[i].classList.remove('input-error');
    }
}

function validarLetrasNumeros(valor) {
    if (!/^[a-zA-Z0-9]+$/.test(valor)) {
        return false;
    }
    return true;
}

function validarSoloLetras(valor) {
    if (!/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$/.test(valor)) {
        return false;
    }
    return true;
}

function ValidarCorreo(valor) {
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)) {
        return false;
    }
    return true;
}

function validarSoloNumeros(valor) {
    if (!/^[0-9]*$/.test(valor)) {
        return false;
    }
    return true;
}