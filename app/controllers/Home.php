<?php

class Home extends Controller
{
    public function __construct()
    {
        $this->usuario = $this->model('usuario');
    }

    public function index()
    {
        $this->view('pages/login_register');
    }

    public function login_register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datosRegistro = [
                'privilegio' => '1',
                'email' => trim($_POST['email']),
                'usuario' => trim($_POST['usuario']),
                'contraseña' => password_hash(trim($_POST['contraseña']), PASSWORD_DEFAULT),
            ];

            if ($this->usuario->login_register($datosRegistro)) {

            } else {

            }
        } else {

            $this->view('pages/login-register');
        }
    }
}
