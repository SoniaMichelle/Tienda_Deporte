<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="raw/css/estilo-secion.css">
    <title>Inicio Sesion</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="login-content card">
                <form id="frmLogin" method="post">
                    <h2 class="title mt-3">Inicio Sesion</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Usario</h5>
                            <input type="text" class="input" id="nombre_usuario" required>
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input" id="password" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <!-- <div class="col-md-12 text-center">
                                <span class="btn btn-sm rounded-pill botones" id="btn_registrar"><i class="fas fa-sign-in-alt mr-2"></i>Registrar</span>
                            </div> -->
                        <div class="col-md-12 text-center">
                            <button class="btn btn-sm rounded-pill botones" type="submit" id="btn_ingresar"><i class="far fa-check-circle mr-2"></i>Ingresar</button>
                        </div>
                    </div>
                    <a href="registro">No tengo una cuenta</a>
                </form>
            </div>
        </div>
    </div>
    <script src="manager/estilo_secion.js"></script>
    <script src="manager/manager_login.js"></script>
</body>

</html>