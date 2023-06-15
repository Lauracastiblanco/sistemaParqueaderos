<?php
namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        // Obtén el ID del usuario desde el formulario de inicio de sesión
        $userId = $this->request->getPost('user_id');

        // Verifica si el usuario existe en la base de datos
        $model = new UsuariosModel();
        $user = $model->find($userId);

        if ($user) {
            // Las credenciales son válidas, inicia sesión
            // Puedes almacenar la información del usuario en la sesión si es necesario
            // Ejemplo: $this->session->set('user', $user);

            // Redirige a la página principal o a otra página deseada
            return redirect()->to('/home');
        } else {
            // Las credenciales no son válidas, muestra un mensaje de error
            $data['error'] = 'Credenciales inválidas';
            return view('login', $data);
        }
    }
}


