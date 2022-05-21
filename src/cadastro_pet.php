<?php
	// abre conexao com o banco 
	require_once '../bd/conectaBD.php';

	print_r($_POST);
	echo "<br><br>";
	$nome = $_POST["txtnome"];
	$apelido = $_POST["txtapelido"];
    $tipo = $_POST["txttipo"];
    $peso = $_POST["txtpeso"];
    $temperamento = $_POST["txttemperamento"];
    $castrado = $_POST["txtcastrado"];
    $dtnascimento = $_POST["txtdtnascimento"];
    $cor = $_POST["txtcor"];
    $sexo = $_POST["txtsexo"];
    $raca = $_POST["txtraca"];
    $def = $_POST["txtdef"];
    $rga = $_POST["txtrga"];


	//monta sql para o banco de dados ,
	$sql = "INSERT  INTO pet (nome, apelido, tipo, peso, temperamento, castrado, dtnascimento, cor, sexo, raca, deficiencia, rga) VALUES 
    ('" . $nome . "','" . $apelido . "','" . $tipo . "','" . $peso . "','" . $temperamento . "','" . $castrado . "','" . $dtnascimento . "','" . $cor . "','" . $sexo . "','" . $raca . "','" . $def . "','" . $rga ."')";
	echo $sql;
	echo "<br><br>";

	$stmt = $conn->prepare($sql);
	$stmt->execute();

	header('Location: main.php');
?>