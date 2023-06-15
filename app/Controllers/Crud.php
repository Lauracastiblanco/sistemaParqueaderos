<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{

    public function index()
    {
        $Crud = new CrudModel();
        $datos = $Crud->listarConductor();
        $mensaje = session('mensaje');
        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('listado', $data);
    }

    public function crear()
    {
        $datos = [
            "idconductor" => $_POST['cedula'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "celular" => $_POST['celular']
        ];
        $Crud = new CrudModel();
        $respuesta = $Crud->insertar($datos);
        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '0');
        }
    }

    public function actualizar()
    {
        $datos = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "celular" => $_POST['celular']
        ];
        $idConductor = $_POST['idConductor'];

        $Crud = new CrudModel();
        $respuesta = $Crud->actualizar($datos, $idConductor);
        if ($respuesta) {
            return redirect()->to(base_url() . '/')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '3');
        }
    }


    public function obtenerConductor($idconductor)
    {
        $data = ["idconductor" => $idconductor];
        $Crud = new CrudModel();
        $respuesta = $Crud->obtenerConductor($data);
        $datos = ["datos" => $respuesta];
        return view('actualizar', $datos);
    }
    public function eliminar($idconductor)
    {
        $Crud = new CrudModel();
        $data = ["idconductor" => $idconductor];
        $respuesta = $Crud->eliminar($data);

        if ($respuesta) {
            return redirect()->to(base_url() . '/')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/')->with('mensaje', '3');
        }
    }

}