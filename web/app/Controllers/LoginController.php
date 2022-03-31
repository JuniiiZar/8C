<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index(){
        return view("login/login");
    }
    public function validar(){
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('password');
        $tablausuario = new \App\Models\TablaUsuario;
        $usuario = $tablausuario->login($email,$pass);
        if($usuario != null){
            $session = session();
            $session->nombre_completo = $usuario->nombre_completo;
            $session->email = $usuario->correo;
            return redirect()->to("admin/dashboard");
        }
        else{
            return redirect()->to("/");
        }
    }
    public function logout(){
        session()->destroy();
        return redirect()->route("/");
    }
}
