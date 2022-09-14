<?php
$error;
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if($nickname == "asd" && $password == "123")  {
        $error = 'OK';
        echo "Bienvenido";
    
    }else{
        $error = 'Datos incorrectos';
        header("Location: /view/login.php?error=$error");
    }
}else{
    $error  ='Datos vacíos';
    echo "Los datos están vacíos";
    header("Location: /view/login.php?error=$error");
}
?>