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
    
    <form action="punto2.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="edad">Edad</label>
        <input type="number"  name="edad" class="form-control" id="edad" placeholder="Edad" required>
        </div>
    </div>
    <br>
    <button type="submit" name="calcular"class="btn btn-primary">Calcular</button>
    </form>

    <?php

    if(isset($_POST['calcular'])){
        $edad = $_POST['edad'];

        if($edad >= 18){
            echo '<h1>Es mayor de edad<h1>';
        }else{
            echo '<h1>Es menor de edad<h1>';
        }


    }

    
    ?>

</body>