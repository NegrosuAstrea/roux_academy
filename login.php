

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/roux_academy/css/style.css"> 
  <title>Roux Conference: Login</title>
</head>
<body id="page_login">
  <div class="wrapper">
    <?php
        require("layout/header.php");
    ?>
    <?php
    require 'bd_connection.php';
    $valid = false;
    if(isset($_POST['login'])){
        $user = $_POST['name'];
        $pass = $_POST['pass'];

        if(!validate_user_bd($user, $pass, $conn)){
            $valid = false;
        }else{
            session_start();
            $valid = true;
            $_SESSION['user'] = $user;
            header('Location:index.php');
        }
    }
?>
  <div id="rotator"> <img src="/roux_academy/images/art01.jpg" alt="Artwork from show"> </div>
    <section id="main" class = "login">
        <h2>LOGIN</h2>
        <div class="formulario">
            <form action="" method="post">
                <label for="name">Usuario: </label>
                <input type="text" name="name" id="name" placeholder = "Usuario" require>
                <br><br>
                <label for="pass">Contraseña: </label>
                <input type="password" name="pass" id="pass" placeholder = "Password" require>
                <br><br>
                <input type="submit" value="Entrar", name="login">
                <?php
                    if(!$valid && isset($_POST['login'])){
                        echo 'Error de credenciales.';
                    }
                ?>
            </form>
        </div>
        
    </section>
    <?php
        require("layout/footer.php");
    ?>
</div>
</body>
</html>

