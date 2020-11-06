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
    <title>Proyecto #1 | Mantenimiento</title>
</head>
<body>
    <a href="mantenimiento/0">Crear Pregunta</a>
    <table>
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
            echo "<td><a  href='mantenimiento/".$item['id']."'>Editar</a></td>";
            echo "<td><a  href='mantenimiento/delete/".$item['id']."'>Eliminar</a></td>";
            echo "</tr>";
            $x++;
        }
        ?>
        </tbody>
    </table>
</body>
</html>