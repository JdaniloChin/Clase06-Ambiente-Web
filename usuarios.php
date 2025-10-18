<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./estilos/estilo.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inicio</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <aside class="col-md-3 bg-dark text-white p-4">
                <h4 class="mb-4">Menú</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-white" href="./home.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Productos</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Ventas</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Reportes</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Configuración</a></li>
                </ul>
            </aside>
            <main class="col-md-9 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Usuarios del sistema</h3>
                    <button class="btn btn-success mb-3" id="btnAgregar" data-bs-toggle="modal"
                        data-bs-target="#modalFormulario">Agregar Usuario</button>
                </div>
                <table class="table table-bordered table-striped" id="tablaUsuarios">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí se agregan los usuarios dinámicamente -->

                        <!--<tr>
                            <td>Danilo Chinchilla</td>
                            <td>7-0206-0059</td>
                            <td>test@example.com</td>
                            <td>Masculino</td>
                            <td>Heredia</td>
                            <td>100m oeste del chino</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm btnEditar">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Está seguro de eliminar este usuario?')">Eliminar</a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </main>
            <footer class="text-center mt-3">
                &copy; 2025 - Desarrollado por Ambiente Web Cliente Servidor
            </footer>
        </div>
    </div>
    <div class="modal fade" id="modalFormulario" tabindex="-1" aria-labelledby="modalFormularioLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalFormularioLabel">Registro de usuarios</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioUsuarios">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Juan Pérez"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario"
                                placeholder="X-XXXX-XXXX" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="usuario@dominio.com" required>
                        </div>
                        <div class="mb3">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                required>
                        </div>
                        <div class="mb3">
                            <label for="confirm" class="form-label">Confirmar Contraseña:</label>
                            <input type="password" class="form-control" id="confirm" name="confirm"
                                required>
                        </div>
                        <div class="mb-3">
                                <label for="rol" class="form-label">Provincia:</label>
                                <select class="form-select" id="rol" name="rol">
                                    <option selected>Seleccione el rol</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Cliente">Cliente</option>
                                    <option value="Vendedor">Vendedor</option>
                                </select>
                        </div>
                        <div class="mb-3">
                                <label for="estado" class="form-label">Provincia:</label>
                                <select class="form-select" id="estado" name="estado">
                                    <option selected>Seleccione el estado</option>
                                    <option value="A">Activo</option>
                                    <option value="I">Inactivo</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-success" id="btnGuardar">Guardar Usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./javascript/usuarios.js"></script>
</body>

</html>