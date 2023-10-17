<?php
$host="app-efdb019d-4982-4e05-9332-74782736329e-do-user-14722467-0.c.db.ondigitalocean.com";
$user="doadmin";
$psw="AVNS_HexEgCP5pp-MwzTswaD";
$db="parking_inteligente";

$miConexion=mysqli_connect($host, $user,$psw,$db);
if(mysqli_errno($miConexion)){
   // echo "Fallo la conexion".mysqli_connect_error();
    
}else{
   // echo "la conexion se ha realizado";
}


?>
