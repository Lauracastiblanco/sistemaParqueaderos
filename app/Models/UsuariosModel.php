<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';

    protected $primaryKey = 'idusuarios';

    protected $allowedFields = ['idusuarios', 'usunombre', 'usuapellido', 'usutelefono', 'usucorreo', 'usudireccion'];

    /**
     * Verifica si el ID del usuario y la contraseña coinciden.
     *
     * @param string $userId
     * @param string $password
     * @return bool
     */
    public function verifyCredentials($userId, $password)
    {
        // Obtén el usuario por su ID
        $user = $this->find($userId);

        if ($user) {
            // Compara el ID del usuario con la contraseña proporcionada
            return $user['idusuarios'] === $password;
        }

        return false;
    }
}
