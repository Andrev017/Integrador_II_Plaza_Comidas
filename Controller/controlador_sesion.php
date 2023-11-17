<?php
/*
echo  $_POST['email'];
echo '<br>';
echo $_POST['password'];
*/

session_start();
$email = $_POST['email'];
$password = $_POST['contraseña'];


$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
//$sql = "SELECT * FROM usuario WHERE contraseña_usuario ='1234567' AND email_usuario ='adre@gmail.com'";

$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) == 1) {
  
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;


    header('Location: ../View/index.php');
} else {
    header('Location: ../View/regitro_clientes.php');
}

/*
$results = $_DB->select("SELECT * FROM usuario WHERE contraseña_usuario ='$password' AND email_usuario ='$email'");

echo($results);
/* if (count($results) > 0) {
    foreach ($results as $res) {
        $nombre = $res['nombre_usuario'];
        $id = $res['id_usuario'];
        //echo $res['nombre'] . '<br>';
        session_start();
        $_SESSION["email_usuario"] = $email;
        $_SESSION['valid'] = true;
        $_SESSION['nombre_usuario'] = $nombre;
        $_SESSION['id_usuario'] = $id;
        header('Location: ../View/index.php');
        exit;
    }
} else {
        header('Location: ../View/regitro_clientes.php');
        exit;
        } */
        
?>