<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form name="form" action="../../controlador/UsuarioControlador.php" method="GET">
            <input type="hidden" name="op" value="2">
            <table border="10">
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="txtusuario" required></td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="text" name="txtclave" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Entrar">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>