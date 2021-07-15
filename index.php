<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    require_once 'app/config.php';
    ?>
    <?php
    require_once 'app/dependencias.php';
    ?>
    <title>Shop Mish</title>
</head>

<body>
    <?php
    if (isset($_GET['vista'])) {
        $vista_solicitada = explode('/', $_GET['vista']);
        switch ($vista_solicitada[0]) {
            case 'home':
                require_once 'view/bienvenido.php';
                break;
            case 'inicio-sesion':
                require_once 'view/inicio.php';
                break;
            case 'registro':
                require_once 'view/registro.php';
                break;
            default:
                echo 'Error 404';
                break;
        }
    } else {
        header('location: home');
    }
    ?>
</body>

</html>