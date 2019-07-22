<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_Registro extends CI_Controller{   

    // Construct
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this -> load -> view('plantilla/header');
        $this -> load -> view('V_Registro');
        $this -> load -> view('plantilla/footer');
    }

    function registrar()
    {
        $user = array(
            'id_usuario' => '',
            'password' => md5($this -> input -> post('password')),
            'nombre_usuario' => $this -> input -> post('nombre'),
            'email_usuario' =>  $this -> input -> post('usuario')

        );
        $this -> load -> model('M_Usuario','user');
        
        if ($this->user->existeUsuario($this -> input -> post('usuario'))) {
            $response = "Ya hay un usuario registrado con ese email.";
        } else {
            if ($this->user->guardarUsuario($user)) {
                $response = "Añadido";
            } else {
                $response = 'No se pudo registrar el usuario, por favor intente nuevamente.';
            }
        }        
        echo json_encode($response);

    }

}

?>