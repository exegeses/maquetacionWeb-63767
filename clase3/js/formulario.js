const formulario = document.querySelector('#contacto form');
const campoNombre = document.querySelector('input[name="nombre"]');
const campoEmail = document.querySelector('input[name="email"]');
const campoConsulta = document.querySelector('textarea[name="consulta"]');

/*mensajes de error*/
const errNombre = document.querySelector('#errNombre');
const errEmail = document.querySelector('#errEmail');
const errConsulta = document.querySelector('#errConsulta');

/* validación */
formulario.addEventListener(
        'submit',
        function( evento ){
            //evitar envío de formulario
            evento.preventDefault();

            //limpiar mensajes de error
            limpiarMensajes();
            //datos escritos en los campos:
            let nombre = campoNombre.value;
            let consulta = campoConsulta.value;
            let email = campoEmail.value;

            /* validaciones */
            flag = true;
            if( checkVacio( nombre ) ){
                errNombre.innerText = '* complete el campo "Nombre"';
                flag = false;
            }
            if( checkVacio( consulta ) ){
                errConsulta.innerText = '* complete el campo "Consulta"';
            }
            if( !validarEmail(email) ){
                errEmail.innerText = '* complete el campo "Email"';
                flag = false;
            }
            /* si llegamos hasta acá pasó validaciones */
            if( flag ){
                formulario.submit();
            }
        }
)

function checkVacio( dato )
{
    if( dato == null || dato == '' ){
        return true;
    }
    return false;
}

function validarEmail (email) {
    let exp = /\S+@\S+\.\S+/;
    return exp.test(email);
}

function limpiarMensajes()
{
    errNombre.innerText = '';
    errEmail.innerText = '';
    errConsulta.innerText = '';
}