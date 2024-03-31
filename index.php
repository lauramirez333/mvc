<?php
/* Programa cliente para el registro de usuarios o login
Creado Laura Camila Ramirez Lara
De que se trata el código:
El presente código es para crear la parte del cliente que corre a través de una red local
En este caso http://localhost; http://127.0.0.1; http://192.168.1.12 puerto 3306
Aquí se hacen las conexiones del cliente a la base de datos y se establece tambien una comunicación con el servidor
donde se indica que se desea registrar un usuario y darle los datos para guardar en la base de datos.
En este caso se incluye un archivo de tipo index donde se implementa una vista sencilla desde donde parte el modelo 
de comunicacion entre los usuarios con el servidor 
*/

if ($_GET['c'] && $_GET['a']) {
    $controller = $_GET['c'];
    require_once "controller/".$controller."Controller.php";
    $nombreControlador = $controller . "Controller";
    $controller = new $nombreControlador;
    $action = isset($_GET['a']) ? $_GET['a'] : 'index';
    call_user_func(array($controller, $action));
} else {
    require_once 'view/inicio.php'; 
}

?>