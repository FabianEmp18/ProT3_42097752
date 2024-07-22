<!DOCTYPE html>
<html>
<head>
    <title>Administración de Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <a href="<?php echo base_url('admin/create'); ?>">Crear Nuevo Usuario</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Perfil</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nombre']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $usuario['perfil_id']; ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/edit/' . $usuario['id']); ?>">Editar</a>
                        <a href="<?php echo base_url('admin/delete/' . $usuario['id']); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php if (isset($action) && $action == 'create'): ?>
        <h2>Crear Nuevo Usuario</h2>
        <form method="post" action="<?php echo base_url('admin/store'); ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required><br>
            <label for="perfil_id">Perfil:</label>
            <select name="perfil_id" id="perfil_id">
                <option value="1">Admin</option>
                <option value="2">Cliente</option>
            </select><br>
            <button type="submit">Crear Usuario</button>
        </form>
    <?php endif; ?>

    <?php if (isset($action) && $action == 'edit'): ?>
        <h2>Editar Usuario</h2>
        <form method="post" action="<?php echo base_url('admin/update/' . $usuario['id']); ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $usuario['nombre']; ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $usuario['email']; ?>" required><br>
            <label for="password">Nueva Contraseña (dejar en blanco para mantener la actual):</label>
            <input type="password" name="password" id="password"><br>
            <label for="perfil_id">Perfil:</label>
            <select name="perfil_id" id="perfil_id">
                <option value="1" <?php echo ($usuario['perfil_id'] == 1) ? 'selected' : ''; ?>>Admin</option>
                <option value="2" <?php echo ($usuario['perfil_id'] == 2) ? 'selected' : ''; ?>>Cliente</option>
            </select><br>
            <button type="submit">Actualizar Usuario</button>
        </form>
    <?php endif; ?>
</body>
</html>
