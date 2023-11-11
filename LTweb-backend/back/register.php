<?php

    include '../bd/conexion.php';

    if (isset($_POST['register'])){
        $id_person = $_POST['id_person'];
        $names = $_POST['names'];
        $lastName = $_POST['lastName'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $pass_en = base64_encode($pass);

        $validation = mysqli_query($conexion, "SELECT * FROM users where id_person = '$id_person'");
        $cant = mysqli_num_rows($validation);

        if ($cant ==1) {
            header('location:../signup.php?status=2');
        }else{  
            
        $sql = mysqli_query($conexion, "INSERT INTO users 
        (id_person, names, lastName, country, email, pass) VALUES 
        ('$id_person','$names', '$lastName', '$country', '$email', '$pass_en')"); 
            header('location:../signup.php?status=1');
        }
    }
?>