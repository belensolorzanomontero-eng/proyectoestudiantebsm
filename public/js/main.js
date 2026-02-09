/**
 * Abre el modal para crear un nuevo estudiante
 */
function mostrarModal() {
    const modal = document.getElementById('modalForm');
    const form = modal.querySelector('form');
    
    // Limpiar el formulario para nuevo registro
    form.reset();
    document.getElementById('est_id').value = '';
    document.getElementById('modalTitle').innerText = 'Registrar Nuevo Estudiante';
    
    modal.style.display = 'block';
}

/**
 * Cierra el modal
 */
function cerrarModal() {
    document.getElementById('modalForm').style.display = 'none';
}

/**
 * Prepara el modal con los datos del estudiante para editar
 * @param {Object} est - Objeto con los datos del estudiante 
 */
function editarEstudiante(est) {
    mostrarModal();
    document.getElementById('modalTitle').innerText = 'Editar Información de Estudiante';
    
    // Llenar campos
    document.getElementById('est_id').value = est.id;
    document.getElementById('est_nombre').value = est.nombre;
    document.getElementById('est_apellido').value = est.apellido;
    document.getElementById('est_email').value = est.email;
    document.getElementById('est_carrera').value = est.carrera;
}

// Cerrar modal si el usuario hace clic fuera de la caja blanca
window.onclick = function(event) {
    const modal = document.getElementById('modalForm');
    if (event.target == modal) {
        cerrarModal();
    }
}