<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <p>Tareas</p>
    <?php
        include 'Tarea.php';    
        $obj = new Tarea("Cris", "NA", "NA", true, "LALAL");
        echo $obj -> getNombre();
    ?>
</body>
</html>


