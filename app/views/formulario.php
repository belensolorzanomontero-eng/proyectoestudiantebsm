<div id="modalForm">
    <div class="modal-content">
        <h3 id="modalTitle">Datos del Estudiante</h3>
        <form action="index.php?action=guardar" method="POST">
            <input type="hidden" name="id" id="est_id">
            <input type="text" name="nombre" id="est_nombre" placeholder="Nombres" required>
            <input type="text" name="apellido" id="est_apellido" placeholder="Apellidos" required>
            <input type="email" name="email" id="est_email" placeholder="Correo electrónico" required>
            <input type="text" name="carrera" id="est_carrera" placeholder="Carrera universitaria" required>
            
            <div style="margin-top: 15px; display: flex; gap: 10px;">
                <button type="submit" class="btn btn-add" style="flex: 1;">Guardar</button>
                <button type="button" class="btn btn-delete" onclick="cerrarModal()" style="flex: 1;">Cancelar</button>
            </div>
        </form>
    </div>
</div>