<?php

namespace App\Controllers;

use App\Models\CitasModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Citas extends BaseController
{
    public function index()
    {
        $model = model(CitasModel::class);

        $data = [
            'citas' => $model->getCitas(),
            'title' => 'Citas List',
        ];

        return view('templatesSistema/header', $data)
            . view('citas/index', $data)
            . view('templatesSistema/footer');
    }

    public function view($id = null)
    {
        $model = model(CitasModel::class);

        $data['cita'] = $model->getCita($id);

        if (empty($data['cita'])) {
            throw new PageNotFoundException('Cannot find the cita: ' . $id);
        }

        $data['title'] = 'Cita: ' . $data['cita']['idcitas'];

        return view('templatesSistema/header', $data)
            . view('citas/view', $data)
            . view('templatesSistema/footer');
    }

    public function create()
    {
        helper('form');

        $model = model(CitasModel::class);
        $citas = $model->getCitas(); // Obtener las citas desde el modelo

        $data = [
            'citas' => $citas,
            'title' => 'Crear Nueva Cita',
        ];

        // Verifies if the form is submitted.
        if (!$this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templatesSistema/header', $data)
                . view('citas/create', $data)
                . view('templatesSistema/footer');
        }

        $post = $this->request->getPost(['id_paciente', 'doctor', 'especialidad', 'fecha', 'id_sede']);

        // Verifies if the submitted data passed the validation rules.
        if (
            !$this->validate([
                'id_paciente' => 'required',
                'doctor' => 'required',
                'especialidad' => 'required',
                'fecha' => 'required',
                'id_sede' => 'required',
            ])
        ) {
            // The validation fails, so returns the form.
            return view('templatesSistema/header', $data)
                . view('citas/create', $data)
                . view('templatesSistema/footer');
        }

        $model->saveCita([
            'idUsuario' => $post['id_paciente'],
            'idDoctor' => $post['doctor'],
            'idEspecialidad' => $post['especialidad'],
            'FechaCita' => $post['fecha'],
            'idsede' => $post['id_sede']
        ]);

        return view('templatesSistema/header', $data)
            . view('citas/success', $data)
            . view('templatesSistema/footer');
    }

}