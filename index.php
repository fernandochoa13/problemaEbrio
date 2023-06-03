<!--Desarrollar  una aplicación que permita resolver el problema del EBRIO, puede ser programada en "cualquier lenguaje de programación o herramienta informatica que este a su disposición". Se debera remitir el codigo fuente y un archivo ejecutable de la misma.
Enunciado:
Supongamos que un ebrio está parado en una esquina, cuando decide caminar para que le pase el efecto “ya ustedes saben cuál”.
Supongamos que existe una probabilidad igual de que se dirija al norte, sur, este u oeste al llegar a cada esquina.
Si camina 10 calles, ¿Cuál es la probabilidad de que termine su recorrido a dos calles de donde lo empezó? -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema del EBRIO</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="shortcut icon" href="imagenes/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <form action="" method="POST" class="formulario">
    <h2 id="tituloH2">Problema del Ebrio</h2><br>
    <input type="submit" name="boton" value="Empezar programa" class="botonIniciar btn btn-primary"><br><br>
    </form>
</body>
</html>
<?php
if(isset($_POST['boton'])) {
    $posiciones = ["norte", "sur", "este", "oeste"];
    $coordenadas = [0,0];
    $cantidadVecesDio2 = 0;
    for($i=0;$i<10;$i++) {
        $posicion = rand(0,3);
        if($posicion == 0) {
            $coordenadas[0] += 1; ?>
            <p style="text-align:center"><?php echo 'Se movió un paso hacia el norte' . "<br>Posicion actual: (" . $coordenadas[0] . "," . $coordenadas[1] . ")<br>"; ?>  </p>
            <?php
            if($coordenadas[0] == 2 || $coordenadas[0] == -2) {
                $cantidadVecesDio2 += 1;
            }
            if ($coordenadas[1] == 2 || $coordenadas[1] == -2) {
                $cantidadVecesDio2 += 1;
            }
        } else if($posicion == 1) {
            $coordenadas[0] -= 1; 
            ?>
            <p style="text-align:center"><?php echo 'Se movió un paso hacia el sur' . "<br>Posicion actual: (" . $coordenadas[0] . "," . $coordenadas[1] . ")<br>"; ?>  </p>
            <?php
            if($coordenadas[0] == 2 || $coordenadas[0] == -2) {
                $cantidadVecesDio2 += 1;
            }
            if ($coordenadas[1] == 2 || $coordenadas[1] == -2) {
                $cantidadVecesDio2 += 1;
            }
        } else if($posicion == 2 ) {
            $coordenadas[1] += 1;
            ?>
            <p style="text-align:center"><?php echo 'Se movió un paso hacia el este' . "<br>Posicion actual: (" . $coordenadas[0] . "," . $coordenadas[1] . ")<br>"; ?>  </p>
            <?php
            if($coordenadas[0] == 2 || $coordenadas[0] == -2) {
                $cantidadVecesDio2 += 1;
            }
            if ($coordenadas[1] == 2 || $coordenadas[1] == -2) {
                $cantidadVecesDio2 += 1;
            }
        } else if($posicion == 3) {
            $coordenadas[1] -= 1;
            ?>
            <p style="text-align:center"><?php echo 'Se movió un paso hacia el oeste' . "<br>Posicion actual: (" . $coordenadas[0] . "," . $coordenadas[1] . ")<br>"; ?>  </p>
            <?php
            if($coordenadas[0] == 2 || $coordenadas[0] == -2) {
                $cantidadVecesDio2 += 1;
            }
            if ($coordenadas[1] == 2 || $coordenadas[1] == -2) {
                $cantidadVecesDio2 += 1;
            }
        }
    }
    $probabilidad = ($cantidadVecesDio2/10) * 100;
    ?>
    <p style="text-align:center"><?php echo "La probabilidad de caer a dos cuadras fue del: " . $probabilidad . "%"; ?></p> 
    <p style="text-align:center"><?php echo "Posición final: (".$coordenadas[0] .",". $coordenadas[1] .")<br>";?>  </p>
<?php
}
?>
<style>
    body {
        font-family: 'Montserrat';font-size: 22px;
    }

    #tituloH2 {
        margin-top: 5%;
        text-align: center;

    }

    .formulario {
        margin-top: 5%;
        text-align: center;
    }
</style>