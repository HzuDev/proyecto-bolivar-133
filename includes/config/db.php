<?php
function conectarDB(){
    $db = mysqli_connect('localhost', 'root', '', 'storeBolivar');
    if($db){
        // echo "  Se conecto";
    }
    return $db;

}
?>
