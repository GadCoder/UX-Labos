<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 1</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
    }
</style>

<body>
    <?php
    // PHP code here
    $nombre_ejercicio = "Ejercicio 1";
    $datos = [
        ["Juan", "Petrlink"],
        ["Alberto", "Carranza"],
        ["Pablo", "Tineo"],
        ["Ivan", "Marquez"],
        ["Andres", "Petrlink"],
        ["Larissa", "Peterlink"],
        ["Samantha", "Petrlink"]
    ]
    ?>
    <header>

        <h1><?php echo $nombre_ejercicio; ?></h1>
    </header>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Modificación</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $index => $data) {
                ?>

                    <tr>
                        <td>000<?php echo $index + 1; ?> </td>
                        <td><?php echo $data[0]; ?> </td>
                        <td><?php echo $data[1]; ?> </td>
                        <td> <button type="button" onclick="showInfo(
                            '000<?php echo $index; ?>',
                            '<?php echo $data[0]; ?>',
                            '<?php echo $data[1]; ?>',
                        )">Modificar</button> </td>
                    <?php
                }
                    ?>
            </tbody>
        </table>
    </section>
    <script>
        function showInfo(codigo, nombre, apellido) {
            alert(
                ` Código: ${codigo}\n Nombre: ${nombre} \n Apellido: ${apellido}`
            )
        }
    </script>
</body>

</html>