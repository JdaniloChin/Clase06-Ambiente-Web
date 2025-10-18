document.addEventListener('DOMContentLoaded', function() {
    const tabla = document.getElementById('tablaUsuarios');
    const form = document.getElementById('formularioUsuarios');

    form.addEventListener('submit', function(e){
        e.preventDefault();

        const nombre = document.getElementById('nombre').value;
        const cedula = document.getElementById('identificacion').value;
        const email = document.getElementById('email').value;
        const genero = document.querySelector('input[name="genero"]:checked')?.value || "No especificado";
        const provincia = document.getElementById('provincia').value;
        const direccion = document.getElementById('direccion').value;

        if(!nombre || !email || !cedula || !provincia == "Selecione una provincia" ){
            alert("Por favor, complete los campos obligatorios");
            return;
        }

        const nuevaFila = tabla.insertRow();
        nuevaFila.innerHTML = `
        <td>${nombre}</td>
        <td>${cedula}</td>
        <td>${email}</td>
        <td>${genero}</td>
        <td>${provincia}</td>
        <td>${direccion}</td>
        <td>
            <a href="#" class="btn btn-warning btn-sm btnEditar">Editar</a>
            <a href="#" class="btn btn-danger btn-sm"
            onclick="return confirm('¿Está seguro de eliminar este usuario?')">Eliminar</a>
        </td>
        `;

        form.reset();

        const modal = bootstrap.Modal.getInstance(document.getElementById('modalFormulario'));
        modal.hide();
    })

})