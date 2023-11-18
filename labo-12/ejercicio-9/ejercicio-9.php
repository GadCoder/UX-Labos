<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 9</title>
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
        <?php
        for ($i = 1; $i < 6; $i++) {
        ?>
          <input type="checkbox" name="categoria" value="<?php echo $i ?>">
          <?php echo $i ?> <br>
        <?php
        }
        ?>
        <input type="button" name="enviar" id="enviar" value="enviar">
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(() => {
      $('enviar').click(() => {
        let categorias = []
        $("input[name='categoria']:checked").each(() => {
          categorias.push($(this).val())
        })
        $("#formulario").attr('action', 'reporte.php')
        $("#formulario").attr('method', 'POST')
        $("#formulario").submit()
      })
    })
  </script>
</body>

</html>