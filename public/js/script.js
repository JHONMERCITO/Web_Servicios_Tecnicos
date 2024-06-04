// public/js/script.js

document.addEventListener('DOMContentLoaded', function () {
    // Función para mostrar y ocultar secciones
    function mostrarSeccion(id) {
        const secciones = document.querySelectorAll('.seccion');
        secciones.forEach(seccion => {
            seccion.classList.remove('activa');
        });
        document.getElementById(id).classList.add('activa');
    }

    // Mostrar la sección de inicio por defecto
    mostrarSeccion('inicio');

    // Event listeners para los formularios de registro
    document.getElementById('registroEmpleadoForm').addEventListener('submit', function (event) {
        event.preventDefault();
        alert('Formulario de registro de empleado enviado');
        this.reset();
    });

    document.getElementById('registroUsuarioForm').addEventListener('submit', function (event) {
        event.preventDefault();
        alert('Formulario de registro de usuario enviado');
        this.reset();
    });

    // Código original para el registro de empleados
    const registroForm = document.getElementById('registroForm');
    const empleadosList = document.getElementById('empleadosList');

    if (registroForm) {
        registroForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Evita que el formulario se envíe de manera predeterminada

            // Obtiene los valores del formulario
            const nombre = registroForm.nombre.value;
            const profesion = registroForm.profesion.value;
            const experiencia = registroForm.experiencia.value;

            // Crea un nuevo elemento de empleado y lo agrega a la lista de empleados
            const empleadoItem = document.createElement('div');
            empleadoItem.classList.add('empleado');
            empleadoItem.innerHTML = `
                <h3>${nombre}</h3>
                <p><strong>Profesión:</strong> ${profesion}</p>
                <p><strong>Experiencia:</strong> ${experiencia}</p>
                <p><strong>Foto:</strong> <img src="path/to/default/photo.jpg" alt="Foto de ${nombre}" width="100"></p>
                <button>Contratar</button>
            `;
            empleadosList.appendChild(empleadoItem);

            // Limpia el formulario después de enviar
            registroForm.reset();
        });

        // Agrega algunos empleados de ejemplo (esto se cargaría desde una base de datos en una aplicación real)
        const ejemploEmpleados = [
            { nombre: 'Juan Pérez', profesion: 'Albañil', experiencia: '10 años de experiencia en construcción.' },
            { nombre: 'María López', profesion: 'Carpintero', experiencia: 'Especializada en muebles a medida.' },
            { nombre: 'Carlos García', profesion: 'Plomero', experiencia: 'Especializado en reparaciones de tuberías.' }
        ];

        ejemploEmpleados.forEach(empleado => {
            const empleadoItem = document.createElement('div');
            empleadoItem.classList.add('empleado');
            empleadoItem.innerHTML = `
                <h3>${empleado.nombre}</h3>
                <p><strong>Profesión:</strong> ${empleado.profesion}</p>
                <p><strong>Experiencia:</strong> ${empleado.experiencia}</p>
                <p><strong>Foto:</strong> <img src="path/to/default/photo.jpg" alt="Foto de ${empleado.nombre}" width="100"></p>
                <button>Contratar</button>
            `;
            empleadosList.appendChild(empleadoItem);
        });
    }

    // Exponer la función mostrarSeccion al ámbito global para que pueda ser llamada desde el HTML
    window.mostrarSeccion = mostrarSeccion;
});


