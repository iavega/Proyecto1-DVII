<?php 
require_once("mantenimiento_preguntas.class.php");
$obj = new Preguntas();
if(isset($_GET['code'])){
    $obj->delete($_GET['id']);
}
if(isset($_POST['formulario'])){
    $obj->CreateOrUpdate($_GET["id"],$_POST['pregunta']);
}
$buttonText = "Guardar";
if($_GET['id'] != 0){
    $respuesta = $obj->find($_GET['id']);
    $data = $respuesta->fetch_assoc();
    $buttonText = "Editar";
}


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
    <form action="" method="POST">
        <label for="">Titulo de la pregunta</label>
        <input type="text" name="pregunta" value="<?php echo $data['titulo'] ?? '' ?>" id="">
        <input type="hidden" name="formulario" value="" id="">
        <input type="submit" value="<?php echo $buttonText; ?>">
    </form>
</body>
</html>