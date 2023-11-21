<?php

require_once ("./v-1/usuarios/repository/usuario.repository.php");

$usuariosRepo = UsuarioRepository::getInstance();

switch ($request_method) {
    case 'GET':
        if(isset($path_components[$path_index+1])){   
            if($path_components[$path_index + 1] != 'byid'){
                header(HTTP_CODE_400);
                break;
            }

            $id = $path_components[$path_index + 2];
            // Get the user by ID.
            break;
        }
        $usuarios = $usuariosRepo -> getAllUsuarios();
        echo json_encode($usuarios);
        break;
    case 'POST':
        # code...
        break;
    default:
        # code...
        break;
}