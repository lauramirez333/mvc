<?php
require_once 'conexion.php';

class usuarioModel {

    private $conexion;

    public function __construct()
    {
        $this->conexion = Database::Connect();
    }

    public function registrarUsuario($usuario, $password) {
        try {
            $db = $this->conexion;
            $query = $db->prepare("INSERT INTO usuarios (usuario, password) VALUES 
            ('".$usuario."', '".$password."');");
            $query->execute();
            return $db->lastInsertId();
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function consultarUsuario($usuario, $password) {
        try {
            $db = $this->conexion;
            $query = $db->prepare("SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND password = '".$password."';");
            $query->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
            $query->execute();
            return $query->fetch();
        } catch (Exception $e) {
            throw new Exception($e);
        } 
    }
}