<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiculoModel extends Model
{

    public function listarVehiculos()
    {
        $query = $this->db->query("SELECT * FROM vehiculos");
        return $query->getResult();
    }

    public function insertar($datos)
    {
        $this->db->table('vehiculos')->insert($datos);
        return $this->db->insertID();
    }

    public function obtenerVehiculo($data)
    {
        $query = $this->db->table('vehiculos');
        $query->where($data);
        return $query->get()->getResultArray();
    }

    public function actualizar($data, $placa)
    {
        $query = $this->db->table('vehiculos');
        $query->set($data);
        $query->where('placa', $placa);
        return $query->update();
    }

    public function eliminar($data)
    {
        $query = $this->db->table('vehiculos');
        $query->where($data);
        return $query->delete();
    }

}
