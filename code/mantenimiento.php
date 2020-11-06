<?php
require_once("mantenimiento_preguntas.class.php");
$obj = new Preguntas();
$consulta = $obj->showAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Proyecto #1 | Mantenimiento</title>
</head>
<body class="bg-light">
    <div class="container">
    <div class="row justify-content-center ">
    <a href="mantenimiento_preguntas.php" type="button" class="btn btn-primary">Crear Pregunta</a>
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Enunciado</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
        <?php
        $x = 1;
        while($item = $consulta->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$x."</td>";
            echo "<td>".$item['titulo']."</td>";
            echo "<td><a  href='mantenimiento_preguntas.php?id=".$item['id']."'>Editar</a></td>";
            echo "<td><a  href='mantenimiento/delete/".$item['id']."'>Eliminar</a></td>";
            echo "</tr>";
            $x++;
        }
        ?>
        </tbody>
    </table>
    </div>
    </div>
</body>
</html>