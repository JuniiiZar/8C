<?php

namespace App\Models;

use CodeIgniter\Model;

class TablaUsuario extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuario';
    protected $primaryKey       = 'id_usuario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['fecha_creacion','fecha_actualizacion','nombre','paterno','materno','correo','password'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'fecha_creacion';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'fecha_eliminacion';

    public function login($correo, $pass){
        $usuario = $this->select("CONCAT(nombre,'',paterno,'',materno) as nombre_completo,correo")
                    ->where("correo",$correo)
                    ->where("password",hash("sha256",$pass))
                    ->first();
        if($usuario != null){
            return $usuario;
        }
        else{
            return null;
        }
    }


    // Validation
    protected $validationRules      = [

    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
