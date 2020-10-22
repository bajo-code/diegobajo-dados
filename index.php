
<?php

// session_start(); primera instancia para trabajar con sesiones
// las variables de sesion son globales al proyecto
//echo session_id();


if(isset($_REQUEST['btn_login'])) //Si se ha pulsado el boton
{
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
if($email="juan@gmail.com"  && $password=="juan") 
    header('Location:menu/menu.php');  //redirige a otra pagina 

}
echo'<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Diego Bajo</title>
</head>

<style>
@import url("css/estilos.css");
</style>

<body>

        <div class="login">
            <h1>LOGIN</h1>
            
            <form action="menu.php" method="post">
                Introduce el email: <input type="text" placeholder="mail" name="email">
                <p></p>
                Introduce la contraseña: <input type="password" placeholder="password" name="password">
                <p></p>
                <input type="submit">
        
            </form>

</body>

</html>';
?>
