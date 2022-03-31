<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $tablaUsuario = new \App\Models\TablaUsuario;
        $usuarios = $tablaUsuario->findAll();
        $datos = array(
            "usuarios" => $usuarios,
            "numeroUsuarios" => sizeof($usuarios)
        );
        return view("dashboard/dashboard",$datos);
    }
}
