<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Taller Backend</title>
</head>
<body>
    
    <form action="punto4.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="nombre">Fecha de nacimiento</label>
        <input type="date" name="fecha" class="form-control" id="fecha" required>
        </div>
        <br>
    </div>
    <br>
    <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
    </form>
</body>

<?php

if (isset($_POST['calcular'])) {
    $fecha_n = $_POST['fecha'];
    $fecha = new DateTime($_POST['fecha']);
    $fecha_act_n = date('Y-m-d');
    $fecha_act = new DateTime(date('Y-m-d'));
    $diff = $fecha->diff($fecha_act);
    $año = $diff->y;
    $mes = $diff->m;
    $dia = $diff->d;

    echo '<h3>Fecha de nacimiento = '.$fecha_n.'<br>'.
         'Fecha actual = '.$fecha_act_n.'<br>'.
         'Edad = '.$año.' año(s) '.$mes.' mese(s) y '.$dia.' dia(s) <h3>';
}

?>

    
