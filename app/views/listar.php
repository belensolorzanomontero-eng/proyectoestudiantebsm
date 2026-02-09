<?php include '../app/views/header.php'; ?>

<div class="container">
    <h2>Listado de Estudiantes Registrados</h2>
    <button class="btn btn-add" onclick="mostrarModal()">+ Nuevo Estudiante</button>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Estudiante</th>
                <th>Email</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $estudiantes->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['nombre'] . " " . $row['apellido']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['carrera']); ?></td>
                <td>
                    <button class="btn btn-edit" onclick='editarEstudiante(<?php echo json_encode($row); ?>)'>Editar</button>
                    <a href="index.php?action=eliminar&id=<?php echo $row['id']; ?>" 
                       class="btn btn-delete" 
                       onclick="return confirm('¿Seguro que desea eliminar del registro?')">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php 
// Incluimos el formulario modal
include '../app/views/formulario.php'; 
// Incluimos el pie de página con los scripts
include '../app/views/footer.php'; 
?>