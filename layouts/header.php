<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shoppers &mdash; Mish Sport</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    require_once '../app/config.php';
    ?>
    <?php
    require_once '../app/dependencias.php';
    ?>



    <link rel="stylesheet" href="../raw/css/style.css">
    <link rel="stylesheet" href="../raw/css/main.css">
    <link rel="stylesheet" href="../raw/css/util.css">

</head>

<body>
    <div class="site-wrap">
        <!-- HEADER -->
        <header>
            <div class="conatiner">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light site-navbar" role="banner">
                            <div class="col-sm-5">
                                <img src="../raw/img/logo4.png" alt="" width="300px">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="../view/index2.php">Inicio <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../view/tienda.php">Tienda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../view/cart.php">Carrito</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../view/about.php">Conocenos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <div class="site-top-icons mt-3">
                                    <ul>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="entrada_usuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span><i class="fas fa-user"></i></span>
                                                <?php
                                                $nombre_usuario = $_SESSION['usuario'];
                                                echo $nombre_usuario;
                                                ?>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="../home"><i class="fas fa-power-off mr-3"></i>Cerrar Sesion
                                            </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="cart.php" class="site-cart">
                                                <span><i class="fas fa-shopping-cart"></i></span>
                                                <span class="count">
                                                    <?php
                                                    if (isset($_SESSION['carrito'])) {
                                                        echo count($_SESSION['carrito']);
                                                    } else {
                                                        echo 0;
                                                    }
                                                    ?>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>