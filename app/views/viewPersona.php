<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Personas</title>
</head>

<body>

    <h1>Lista de Personas</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Correo</th>
        </tr>

        <?php foreach ($personas as $persona): ?>

            <tr>

                <td>
                    <?= $persona['id'] ?>
                </td>

                <td>
                    <?= $persona['nombre'] ?>
                </td>

                <td>
                    <?= $persona['edad'] ?>
                </td>

                <td>
                    <?= $persona['correo'] ?>
                </td>

            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>