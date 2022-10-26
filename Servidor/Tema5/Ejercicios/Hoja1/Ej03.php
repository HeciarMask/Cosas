<?php
if(isset($_POST['dni'])){
   $c = mysqli_connect ("localhost", "root", "","practicas") or die("No ha conectado.");

extract($_POST);

    mysqli_query($c,"INSERT INTO tabla1(DNI,nombre,apellidos,fechaNac,repetidor)
                    VALUES ('$dni','$nombre','$apellido','$fechaNac','$repetidor')");

     if (mysqli_errno($c)==0){
        echo "<h2>Registro AÑADIDO</b></H2>"; 
    }else{ 
        $numerror=mysqli_errno($c); 
        $descrerror=mysqli_error($c); 
        echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>"; 
    } 
 
mysqli_close($c); 
}else{
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form name="miForm" action="EJ03.php" method="post">
            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input required type="text" class="form-control" name="dni" id="dni">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellido" id="apellido">
            </div>
            <div class="row">
                <label class="form-label">Repite</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="repetidor" id="repetidor1" value="S">
                    <label class="form-check-label" for="repetidor1">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input default class="form-check-input" type="radio" name="repetidor" id="repetidor2" checked
                        value="N">
                    <label class="form-check-label" for="repetidor2">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="fechaNac">Fecha:</label>
                <input type="date" id="fecha" name="fechaNac">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
        
</body>

</html>
    <?php
}
?>
