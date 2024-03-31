<?php
/* Programa cliente para el registro de productos
Creado Laura Camila Ramirez Lara
De que se trata el código:
El presente código es para crear la parte del cliente que corre a través de una red local
En este caso http://localhost; http://127.0.0.1; http://192.168.1.12 puerto 3306
Aquí se hacen las conexiones del cliente a la base de datos y se establece tambien una comunicación con el servidor
donde se indica que se desea registrar un producto y darle los datos para guardar en la base de datos.
En este caso se incluye un archivo de tipo index donde se implementa una vista sencilla desde donde parte el modelo 
de comunicacion entre los clientes con el servidor 
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>

<body>
    <form action="?c=usuarios&a=establecerSesion" method="POST">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Inicia sesión / Registrate</h2>
                                    <p class="text-white-50 mb-5"></p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" name="usuario" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Usuario</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Contraseña</label>
                                    </div>

                                    <select class="form-select form-select-sm" name = "tipoOperacion" aria-label=".form-select-sm example">
                                        <option selected>Selecciona la operación</option>
                                        <option value="1">Login</option>
                                        <option value="2">Registro</option>
                                    </select>
                                    <br>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Validar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <link rel="stylesheet" href="view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>

</html>