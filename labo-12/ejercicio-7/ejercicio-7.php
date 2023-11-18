<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 7</title>
  <style>
    #container {
      font-family: arial;
      font-size: 24px;

      /* Center vertically and horizontally */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 0.5em;
    }
  </style>
</head>

<body>
  <div id="container">
    <div id="content">
      <form id="form">
        <label for="txtn1">Número</label>
        <input type="text" name="txtn1" id="txtn1">
        <button id="enviar">Enviar</button>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(() => {
      $("#enviar").click(() => {
        $("#form").attr('action', 'controlador.php')
        $("#form").attr('method', 'GET')
        $("#form").submit()
      })
    });
  </script>
</body>

</html>