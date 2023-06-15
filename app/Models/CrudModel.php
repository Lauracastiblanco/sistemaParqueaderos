<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{

    public function listarConductor()
    {
        $query = $this->db->query("SELECT * FROM conductor");
        return $query->getResult();
    }

    public function insertar($datos)
    {
        $this->db->table('conductor')->insert($datos);
        return $this->db->insertID();
    }

    public function obtenerConductor($data)
    {
        $query = $this->db->table('conductor');
        $query->where($data);
        return $query->get()->getResultArray();
    }
    public function actualizar($data, $idConductor)
    {
        $query = $this->db->table('conductor');
        $query->set($data);
        $query->where('idconductor', $idConductor);
        return $query->update();
    }
    public function eliminar($data)
    {
        $query = $this->db->table('conductor');
        $query->where($data);
        return $query->delete();
    }

}