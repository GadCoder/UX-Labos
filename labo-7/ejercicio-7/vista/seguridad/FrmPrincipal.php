<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function salir() {
            document.form.action = "../../controlador/UsuarioControlador.php"
            document.form.method = "GET"
            document.form.op.value = "3"
            document.form.submit()
        }
    </script>
</head>


<body bgcolor="green">
    <form name="form">
        <input type="hidden" name="op">
        <input type="button" onclick="salir()" value="Salir">
    </form>

</body>

</html>