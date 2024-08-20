<?php

class usuario 
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function login_register($datosUsuario)
    {
        $this->db->query('INSERT INTO usuarios (id)');
    }

}