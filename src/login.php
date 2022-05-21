<?php

session_start();
$_SESSION['user'] = $_POST['txtusuario'];
$_SESSION['senha'] = $_POST['txtsenha'];

require_once '../bd/conectaBD.php';

$nome = $_POST["txtusuario"];
$senha = $_POST["txtsenha"];



    $stmt = $conn ->prepare("SELECT * FROM user where nome= ' ". $nome . "'and senha =' " .$senha ."'");
    $stmt-> execute();
    $login = false;

    if($recordSet = $stmt-> fetchAll()){
        $login=true; 
    }
    if($login=true){
        header('Location: main.php');
    }else{
        echo "num deu";
        
        echo $senha;
    }


?>