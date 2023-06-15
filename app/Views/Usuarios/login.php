<!-- login.php -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Iniciar sesión</h2>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form action="/login/authenticate" method="post">
                <div class="mb-3">
                    <label for="user_id" class="form-label">ID de usuario</label>
                    <input type="text" name="user_id" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
</div>
