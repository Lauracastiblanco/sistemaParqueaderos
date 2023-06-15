<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mt-3">Registrar cita</h2>

            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>

            <form action="/citas/create" method="post" class="mt-3">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="id_paciente" class="form-label">ID Paciente</label>
                    <select name="id_paciente" class="form-select">
                        <option value="1">Paciente 1</option>
                        <option value="2">Paciente 2</option>
                        <option value="3">Paciente 3</option>
                        <!-- Agrega más opciones según tus necesidades -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="doctor" class="form-label">Doctor</label>
                    <select name="doctor" class="form-select">
                        <option value="1">Doctor 1</option>
                        <option value="2">Doctor 2</option>
                        <option value="3">Doctor 3</option>
                        <!-- Agrega más opciones según tus necesidades -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="especialidad" class="form-label">Especialidad</label>
                    <select name="especialidad" class="form-select">
                        <option value="1">Especialidad 1</option>
                        <option value="2">Especialidad 2</option>
                        <option value="3">Especialidad 3</option>
                        <!-- Agrega más opciones según tus necesidades -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="datetime-local" name="fecha" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="id_sede" class="form-label">ID Sede</label>
                    <select name="id_sede" class="form-select">
                        <option value="1">Sede 1</option>
                        <option value="2">Sede 2</option>
                        <option value="3">Sede 3</option>
                        <!-- Agrega más opciones según tus necesidades -->
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Crear cita</button>
                </div>
            </form>
        </div>
    </div>
</div>