<?php

require_once 'model/usuarioModel.php';

class usuariosController
{
    const REGISTRO = 2;
    const LOGIN = 1;

    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new usuarioModel();
    }

    public function establecerSesion()
    {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $tipoOperacion = $_POST['tipoOperacion'];
        switch ($tipoOperacion) {
            case self::REGISTRO:
                $this->registrarUsuario($usuario, $password);
                break;
            case self::LOGIN:
                $this->login($usuario, $password);
                break;
        }
    }

    public function registrarUsuario($usuario, $password)
    {
        try {
            $this->usuarioModel->registrarUsuario($usuario, $password);
            echo "<script>alert('Registro exitosos');
            location.href ='index.php';</script>";
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function login($usuario, $password)
    {
        try {
            $usuario = $this->usuarioModel->consultarUsuario($usuario, $password);
            if ($usuario->id) {
                echo "<script>alert('Usuario logeado');
            location.href ='index.php';</script>";
            } else {
                echo "<script>alert('Usuario no encontrado');
            location.href ='index.php';</script>";
            }
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }
}
