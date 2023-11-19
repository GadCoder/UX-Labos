<?php
$op = $_REQUEST['op'];
switch ($op) {
    case 1: {
            $pagina = "../vista/seguridad/FrmLogin.php";
            header('Location: ' . $pagina);
            break;
        }
    case 2: {
            $pagina = "../vista/seguridad/FrmPrincipal.php";
            header('Location:' . $pagina);
            break;
        }
    case 3: {
            $pagina = "../vista/seguridad/FrmLogin.php";
            header('Location:' . $pagina);
            break;
        }
}
