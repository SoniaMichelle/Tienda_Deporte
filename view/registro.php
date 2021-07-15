<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="raw/css/estilo_registro.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <form class="card p-4 rounded-bottom" id="frmRegistro" autocomplete="off">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h5>Registro</h5>
                            </div>
                        </div>
                        <hr class="divisor_horizontal">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nombres">Nombre(s)</label>
                                                <input type="text" class="form-control form-control-sm rounded-pill" id="nombres" name="nombres" placeholder="Ingresar nombres" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="apellido_paterno">Apellido paterno</label>
                                                <input type="text" class="form-control form-control-sm rounded-pill" id="apellido_paterno" name="apellido_paterno" placeholder="Ingresar apellido paterno" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="apellido_materno">Apellido materno</label>
                                                <input type="text" class="form-control form-control-sm rounded-pill" id="apellido_materno" name="apellido_materno" placeholder="Ingresar apellido materno" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="sexo">Usuario:</label>
                                                <input type="text" class="form-control form-control-sm rounded-pill" id="nombre_usuario" name="nombre_usario" placeholder="Ingrese nombre usuario" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email"><i class="fas fa-at mr-2"></i>Email:</label>
                                                <input type="text" class="form-control form-control-sm rounded-pill" id="email" name="email" placeholder="Ingresar email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="contrasenia"><i class="fas fa-lock mr-2"></i>Contraseña:</label>
                                                <input type="password" class="form-control form-control-sm rounded-pill" id="password" name="password" placeholder="Ingresar contraseña" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <!-- <div class="col-md-12 text-center">
                                <span class="btn btn-sm rounded-pill botones" id="btn_registrar"><i class="fas fa-sign-in-alt mr-2"></i>Registrar</span>
                            </div> -->
                            <div class="col-md-12 text-center">
                                <button class="btn btn-sm rounded-pill botones" id="btn_registrar"><i class="far fa-check-circle mr-2"></i>Registrar</button>
                            </div>
                            <div class="col-md-12 text-center">
                                <a href="inicio-sesion">Ya tengo una cuenta</a>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="manager/manager_registro.js"></script>
</body>

</html>