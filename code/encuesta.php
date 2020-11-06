<?php
require_once('encuesta.class.php');
$obj = new Encuesta();
if(isset($_POST['encuestaD'])){
    $obj->SavePreguntas();
}else{
    $data = $obj->GenerarPreguntas();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto #1 | Encuesta</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container mt-5" style="font-family: 'Source Sans Pro',sans-serif;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="border-top: 3px solid #d2d6de;border-top-color: #3c8dbc;">
                    <div class="card-header bg-white" style="border-bottom: 1px solid #f4f4f4;display: inline-block;
                    font-size: 18px;margin: 0;line-height: 1;">Encuesta</div>

                    <div class="card-body"  style="font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;font-weight: 400;">
                        <form action="" method="POST">
                            <div class="row">
                                <input type="hidden" name="encuestaD" value="1">
                                <div class="form-group col-md-4">
                                    <label for="">Nombre</label>
                                    <input class="form-control" type="text"  name="nombre" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Apellido</label>
                                    <input class="form-control" type="text" name="apellido" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Sexo</label>
                                    <select class="form-control" name="sexo" id="">
                                        <option value=""></option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Edad</label>
                                    <input class="form-control" type="text" name="edad" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Salario</label>
                                    <input class="form-control" type="text" name="salario" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Provincia</label>
                                    <select class="form-control" name="provincia" id="">
                                        <option value=""></option>
                                        <option value="1">Panamá</option>
                                        <option value="2">Cocle</option>
                                        <option value="3">Colon</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <h2>Preguntas</h2>
                                    <ul>
                                    <?php
                                    while($item = $data->fetch_assoc()){
                                        echo "<li>".html_entity_decode($item['titulo'])."<br>
                                        <input type='radio' name='P[$item[id]]' value='1'> SI<br>
                                        <input type='radio' name='P[$item[id]]' value='2'> NO
                                        </li>";

                                    }
                                    ?>
                                    </ul>
                                </div>
                                <input type="submit" value="Guardar">
                            </div>

                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>