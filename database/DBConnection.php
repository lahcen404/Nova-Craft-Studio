<?php

$db_server = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "novacraftdb";
$connection = "";

$connection = mysqli_connect($db_server , $db_user , $db_password , $db_name);

if($connection){
    echo "Connected succeess !!";

}else{
    echo "Not connected , try agaain !!!";
}


?>