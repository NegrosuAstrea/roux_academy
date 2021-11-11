<?php
    $bd = 'roux_academy';
    $servidor = 'localhost';
    $user = 'pmauser';
    $pass = '1234';

    $conn = mysqli_connect($servidor, $user, $pass, $bd);

    if(!$conn){
        die('Conexion fallo');
    }

    

    function validate_user_bd($user, $pass, $conn){
        $query = "select 1 as user_valido from usuarios where usuario='$user' and contrasena=MD5('$pass')";
        
        //$result = mysqli_query($conn,$query);
        $result = $conn->query($query);

        if($result->num_rows == 0){
        //if(mysqli_num_rows($result)==0){ 
            return false;
        }else{
            return true;
        }
    }

    //if(validate_user_bd('admin', 'superadmin', $conn)){
    //     echo 'user in db';
    //}else{
    //     echo 'user not in db';
    //}
?>