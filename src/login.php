<?php

require_once '../bd/conectaBD.php';

$nome = $_POST["txtusuario"];
$senha = $_POST["txtsenha"];



    $stmt = $conn ->prepare("SELECT * FROM user where nome= ' ". $nome . "'and senha =' " .$senha ."'");
    $stmt-> execute();
    $login = false;

    if($recordSet = $stmt-> fetchAll()){
        $login=true; 
    }
    if($login){
        echo "deu";  
        header("location: main.html");
    }else{
        echo "num deu";
    }


?>