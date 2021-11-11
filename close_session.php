
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/roux_academy/css/style.css"> 
  <title>Roux Conference: Logout</title>
</head>
<body id="page_login">

  <div class="wrapper">
    <?php
        require 'layout/header.php';
        if(!isset($_SESSION['user'])){
            header('Location: login.php');
            exit;
        }
    ?>
    <div id="rotator"> <img src="/roux_academy/images/art01.jpg" alt="Artwork from show"> </div>
    <section id="main">
        <form action="" method="POST">
            <input type="submit" value="Confirmar cerrar sesión" name="closesession">
        </form>
        <?php
            if(isset($_POST['closesession'])){
                //echo 'Cerrada la sesión correctamente';
                $_SESSION=array();
                session_destroy();
                header('Location:login.php');
            }
        ?>
    </section>
    <?php
        require 'layout/footer.php';
    ?>
    </div>
</body>
</html>