<?php 

namespace App\Controllers\Ajax;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Usuarios extends Controller{

    public function getDados(){
        $usuariosModel =  new UsuarioModel();

        $usuariosModel->select('id, nome, sobrenome, login, email');
        $usuarios = $usuariosModel->findAll();

        foreach($usuarios as $usuario){
            $result[] = [
                $usuario['id'],
                $usuario['nome'],
                $usuario['sobrenome'],
                $usuario['login'],
                $usuario['email']
            ];
        }
        
        $usuarios = [
            'data' => $result
        ];

        echo json_encode($usuarios);

    } 
}