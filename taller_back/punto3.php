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
    
    <form action="respuesta_punto3.php" method="GET">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Digite su nombre" required>
        </div>
        <br>
        <div class="form-group col-md-6">
        <label for="apellido">Apellido</label>
        <input type="text"  name="apellido" class="form-control" id="apellido" placeholder="Digite su apellido" required>
        </div>
        <br>
        <div class="form-group col-md-6">
        <label for="id">Cédula</label>
        <input type="number" name="id" class="form-control" id="id" placeholder="Digite su cédula" required>
        </div>
    </div>
    <br>
    <button type="submit" name="datos" class="btn btn-primary">Enviar</button>
    </form>

    

</body>