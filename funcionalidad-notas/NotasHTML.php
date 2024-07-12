<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Información de la Nota</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Incluyendo la definición de la clase Notas
                include 'Notas.php';

                // Creando una instancia de Notas
                $nota = new Notas("Nota 1", "Descripción de la nota 1", "2024-07-12", "12345");

                // Imprimiendo la información de la nota en una fila de tabla
                echo $nota->getTableRow();
            ?>
        </tbody>
    </table>
</body>
</html>
