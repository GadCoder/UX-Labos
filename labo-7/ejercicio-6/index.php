<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labo 7 - Ejercicio 6</title>
    <script>
        function Listar() {
            document.form.action = "controlador.php"
            document.form.method = "GET"
            document.form.submit()
        }
    </script>
    <style>
        body {
            background-color: green;
        }

        #capacentral {
            width: 500px;
            height: 400px;
            background-color: yellow;
        }
    </style>
</head>

<body>
    <div id="capacentral">
        <form name="form">
            <button onclick="Listar()">Listar personas</button>
        </form>
    </div>

</body>

</html>