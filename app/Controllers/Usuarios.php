<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Usuarios extends BaseController
{
    public function index()
    {
        $model = model(UsuariosModel::class);

        $data = [
            'users' => $model->getUsers(),
            'title' => 'Users List',
        ];

        return view('templatesSistema/header', $data)
            . view('usuarios/index', $data)
            . view('templatesSistema/footer');
    }

    public function view($slug = null)
    {
        $model = model(UsuariosModel::class);

        $data['user'] = $model->getUser($slug);

        if (empty($data['user'])) {
            throw new PageNotFoundException('Cannot find the user: ' . $slug);
        }

        $data['title'] = $data['user']['usunombre'];

        return view('templatesSistema/header', $data)
            . view('usuarios/view', $data)
            . view('templatesSistema/footer');
    }

    public function create()
    {
        $model = model(UsuariosModel::class);

        $data = [
            'users' => $model->findAll(),
            'title' => 'Crear Nuevo Usuario'
        ];

        helper('form');

        // Verifies if the form is submitted.
        if (!$this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templatesSistema/header', $data)
                . view('usuarios/create', $data)
                . view('templatesSistema/footer');
        }

        $post = $this->request->getPost(['idusuarios', 'usunombre', 'usuapellido', 'usutelefono', 'usucorreo', 'usudireccion']);

        // Verifies if the submitted data passed the validation rules.
        if (!$this->validate([
            'idusuarios' => 'required',
            'usunombre' => 'required',
            'usuapellido' => 'required',
            'usutelefono' => 'required',
            'usucorreo' => 'required|valid_email',
            'usudireccion' => 'required',
        ])) {
            // The validation fails, so returns the form.
            return view('templatesSistema/header', $data)
                . view('usuarios/create', $data)
                . view('templatesSistema/footer');
        }

        $model->save([
            'idusuarios' => $post['idusuarios'],
            'usunombre' => $post['usunombre'],
            'usuapellido' => $post['usuapellido'],
            'usutelefono' => $post['usutelefono'],
            'usucorreo' => $post['usucorreo'],
            'usudireccion' => $post['usudireccion'],
        ]);

        return view('templatesSistema/header', ['title' => 'Crear Nuevo usuario'])
            . view('usuarios/success')
            . view('templatesSistema/footer');
    }
}
