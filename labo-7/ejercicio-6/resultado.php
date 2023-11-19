<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: blue">
    <?php
    $codigo = array("001", "002", "003", "004");
    $nombre = array("Wilson", "Ariana", "Alan", "Renzo");
    $apellido = array("Martin", "Orue", "Fierro", "Allende")
    ?>
    <center>
        <table border="5">
            <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <tr>
                        <td> <?php echo $codigo[$i]; ?></td>
                        <td> <?php echo $nombre[$i]; ?></td>
                        <td> <?php echo $apellido[$i]; ?></td>

                    </tr>

                <?php   } ?>
            </tbody>
        </table>
    </center>

</body>

</html>