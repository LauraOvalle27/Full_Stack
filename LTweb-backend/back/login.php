<?php 

include '../bd/conexion.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass_code = base64_encode($pass);
}

    $consult = mysqli_query($conexion, "SELECT id_person, pass FROM users
    WHERE email = '$email' and pass ='$pass_code'");

    $exist = mysqli_num_rows($consult);

    if($exist == 1){
        session_start();
        while($data = mysqli_fetch_array($consult)){
            $_SESSION['name'] = $datos['names'];
            $_SESSION['lastname'] = $datos['lastName'];
        }
        header('location:../index.html');
    }else {
        header('location:../signin.php?status=3');
    }



?>