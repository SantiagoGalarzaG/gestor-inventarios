function validarFormulario(form) {
    const usuario = form.usuario.value.trim();
    const password = form.password.value.trim();
    const alerta = document.getElementById('alerta');
    const loader = document.querySelector('.loader');
    const btn = document.getElementById('btn-login');

    alerta.style.display = 'none';
    alerta.innerHTML = '';

    let errores = '';

    if (usuario === '') {
        errores += '<p>Ingrese un usuario</p>';
    }

    if (password === '') {
        errores += '<p>Ingrese una contraseña</p>';
    } else if (password.length < 4) {
        errores += '<p>La contraseña debe tener al menos 4 caracteres</p>';
    }

    if (errores !== '') {
        alerta.innerHTML = errores;
        alerta.classList.add('error', 'alert');
        alerta.style.display = 'block';
        return false;
    }

    // Mostrar loader y ocultar botón
    btn.style.display = 'none';
    loader.style.display = 'inline-block';

    // Enviar formulario manualmente tras 2 segundos
    if(errores === '') {
        setTimeout(() => {
            form.submit(); // Esto enviará el formulario después de la validación
        }, 5000);
    }
    return false; // Prevenir el envío inmediato del formulario
    
}
