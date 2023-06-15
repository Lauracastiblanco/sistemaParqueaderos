<?php

namespace App\Models;

use CodeIgniter\Model;

class CitasModel extends Model
{
    protected $table = 'citas';

    protected $allowedFields = ['idUsuario', 'idDoctor', 'idEspecialidad', 'FechaCita', 'idsede'];

    public function getCitas()
    {
        return $this->findAll();
    }

    public function getCita($id)
    {
        return $this->find($id);
    }

    public function saveCita($data)
    {
        return $this->insert($data);
    }
}
