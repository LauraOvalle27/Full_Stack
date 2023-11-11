<?php 
if(isset($_GET['status'])) {
  if ($_GET['status']== 1){
    echo '<div id="alertDiv" class="alert alert-success show" role="alert">
    Successful registration!
  </div>';
  } echo '<script>
  setTimeout(function(){
    document.getElementById("alertDiv").classList.add("hide");
  }, 3000); 
</script>';
  if ($_GET['status']== 2){
    echo '<div id="alertDiv" class="alert alert-light show" role="alert">
    User already exists!
  </div>';
  } echo '<script>
  setTimeout(function(){
    document.getElementById("alertDiv").classList.add("hide");
  }, 3000); 
</script>';
  }
  
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../LTweb/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="icon" type="image/x-icon" href="../LTweb/images/logo2.ico">
  <title>Louis Tomlinson Website</title>
</head>

<body>

  <div class="forms">
    <div class="mb-3">
    <img src="../LTweb/images/logo.png">
    </div>
    <h2>Sign up</h2>
    <br>
  <form action="back/register.php" method="post">
  <div class="form-floating mb-3">
      <input type="text" name="id_person" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Identification number</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="names" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="lastName" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput"> Last Name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="country" class="form-control" id="floatingPassword" placeholder="">
      <label for="floatingInput">Country</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="">
      <label>Password</label>
    </div>
    <button type="submit" name="register" class="submit-button">Submit</button>
    <div class="register">
      <br>
    <a href="signin.php">Back to login</a>
    <div id="alertDiv" class="" role="alert">
  </div>
  </div>
  </form>
  </div>
</body>
