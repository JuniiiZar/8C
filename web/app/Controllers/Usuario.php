<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuario extends BaseController{
    public function guardar(){
        $datos = array(
            "fecha_creacion" => date("Y-m-d"),
            "nombre" => $this->request->getPost("nombre"),
            "paterno" => $this->request->getPost("paterno"),
            "materno" => $this->request->getPost("materno"),
            "correo" => $this->request->getPost("email"),
            "password" => $this->request->getPost("password")
        );
        $tablaUsuario = new \App\Models\TablaUsuario;
        if($tablaUsuario->insert($datos)){
            return redirect()->to("admin/dashboard");
        }
    }
    public function actualizar(){
        $id_usuario = $this->request->getPost("id_usuario");
        $datos = array(
            "fecha_actualizacion" => date("Y-m-d"),
            "nombre" => $this->request->getPost("nombre"),
            "paterno" => $this->request->getPost("paterno"),
            "materno" => $this->request->getPost("materno"),
            "correo" => $this->request->getPost("email"),
            "password" => $this->request->getPost("password")
        );
        $tablaUsuario = new \App\Models\TablaUsuario;
        if($tablaUsuario->update($id_usuario,$datos)){
            return redirect()->to("admin/dashboard");
        }
    }
}
