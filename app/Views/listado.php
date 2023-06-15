<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Parqueadero</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Menú</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/Vehiculos'); ?>">Vehículos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/'); ?>">Conductores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center">Parqueadero</h1>
        <form action="<?php echo base_url('/crear'); ?>" method="POST">
            <div class="form-group">
                <label for="cedula">Cédula</label>
                <input type="number" class="form-control" name="cedula">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" name="celular">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <h2 class="text-center mt-4">Listado de Conductores</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Celular</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $key): ?>
                    <tr>
                        <td>
                            <?php echo $key->idconductor ?>
                        </td>
                        <td>
                            <?php echo $key->nombre ?>
                        </td>
                        <td>
                            <?php echo $key->apellido ?>
                        </td>
                        <td>
                            <?php echo $key->celular ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url() . '/obtenerConductor/' . $key->idconductor ?>"
                                class="btn btn-warning">Editar</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url() . '/eliminar/' . $key->idconductor ?>"
                                class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function () {
            let mensaje = '<?php echo $mensaje ?>';
            if (mensaje == '0') {
                Swal.fire({
                    title: 'Agregado con éxito',
                    text: 'Agregado con éxito',
                    icon: 'success'
                });
            } else if (mensaje == '1') {
                Swal.fire({
                    title: 'No se pudo agregar',
                    text: 'No se pudo agregar',
                    icon: 'error'
                });
            }
            else if (mensaje == '2') {
                Swal.fire({
                    title: 'Se actualizó correctamente',
                    text: 'Se actualizó correctamente',
                    icon: 'success'
                });
            }
            else if (mensaje == '3') {
                Swal.fire({
                    title: 'No se actualizó correctamente',
                    text: 'No se actualizó correctamente',
                    icon: 'error'
                });
            } else if (mensaje == '4') {
                Swal.fire({
                    title: 'Se eliminó correctamente',
                    text: 'Se eliminó correctamente',
                    icon: 'success'
                });
            }
        });
    </script>
</body>

</html>
