<?php

namespace App\Controllers;

use App\Models\VehiculoModel;

class Vehiculo extends BaseController
{

    public function index()
    {
        $Vehiculos = new VehiculoModel();
        $datos = $Vehiculos->listarVehiculos();
        $mensaje = session('mensaje');
        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('Vehiculos', $data);
    }

    public function crear()
    {
        $datos = [
            "placa" => $_POST['placa'],
            "modelo" => $_POST['modelo'],
            "idconductor" => $_POST['idconductor']
        ];
        $vehiculoModel = new VehiculoModel();
        $respuesta = $vehiculoModel->insertar($datos);
        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '0');
        }
    }

    public function actualizar()
    {
        $datos = [
            "modelo" => $_POST['modelo'],
            "idconductor" => $_POST['idconductor']
        ];
        $placa = $_POST['placa'];

        $vehiculoModel = new VehiculoModel();
        $respuesta = $vehiculoModel->actualizar($datos, $placa);
        if ($respuesta) {
            return redirect()->to(base_url() . '/')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '3');
        }
    }

    public function obtenerVehiculo($placa)
    {
        $data = ["placa" => $placa];
        $vehiculoModel = new VehiculoModel();
        $respuesta = $vehiculoModel->obtenerVehiculo($data);
        $datos = ["datos" => $respuesta];
        return view('actualizar_vehiculo', $datos);
    }

    public function eliminar($placa)
    {
        $vehiculoModel = new VehiculoModel();
        $data = ["placa" => $placa];
        $respuesta = $vehiculoModel->eliminar($data);
        if ($respuesta) {
            return redirect()->to(base_url() . '/')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '5');
        }
    }

}
