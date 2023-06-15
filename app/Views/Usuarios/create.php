<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mt-3"><?= esc($title) ?></h2>

            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>

            <form action="/usuarios/create" method="post" class="mt-3">
                <?= csrf_field() ?>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="idusuarios" class="form-label">Cédula Usuario</label>
                        <input type="input" name="idusuarios" class="form-control" value="<?= set_value('idusuarios') ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="usunombre" class="form-label">Nombre</label>
                        <input type="input" name="usunombre" class="form-control" value="<?= set_value('usunombre') ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="usuapellido" class="form-label">Apellido</label>
                        <input type="input" name="usuapellido" class="form-control" value="<?= set_value('usuapellido') ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="usudireccion" class="form-label">Dirección</label>
                        <input type="input" name="usudireccion" class="form-control" value="<?= set_value('usudireccion') ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="usucorreo" class="form-label">Email</label>
                        <input type="input" name="usucorreo" class="form-control" value="<?= set_value('usucorreo') ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="usutelefono" class="form-label">Teléfono</label>
                        <input type="input" name="usutelefono" class="form-control" value="<?= set_value('usutelefono') ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Crear nuevo usuario</button>
                    </div>
                </div>
            </form>

            <h2 class="mt-5">Lista de usuarios</h2>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Cédula Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= esc($user['idusuarios']) ?></td>
                            <td><?= esc($user['usunombre']) ?></td>
                            <td><?= esc($user['usuapellido']) ?></td>
                            <td><?= esc($user['usutelefono']) ?></td>
                            <td><?= esc($user['usucorreo']) ?></td>
                            <td><?= esc($user['usudireccion']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
