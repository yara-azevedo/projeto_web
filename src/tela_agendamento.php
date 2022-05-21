<?php
	// abre conexao com o banco 
	require_once '../bd/conectaBD.php';

	print_r($_POST);
	echo "<br><br>";
	$cep = $_POST["txtcep"];
	$cidade = $_POST["txtcidade"];
    $cpf = $_POST["txtcpf"];
    $endereco = $_POST["txtendereco"];
    $estado = $_POST["txtestado"];
    $nome = $_POST["txtnome"];
    $senha = $_POST["txtsenha"];
    $telefone = $_POST["txttelefone"];


	//monta sql para o banco de dados ,
	$sql = "INSERT  INTO user (cep, cidade, cpf, endereco, estado, nome, senha, telefone) VALUES 
    ('" . $cep . "','" . $cidade . "','" . $cpf . "','" . $endereco . "','" . $estado . "','" . $nome . "','" . $senha . "','" . $telefone ."')";
	echo $sql;
	echo "<br><br>";

	$stmt = $conn->prepare($sql);
	$stmt->execute();

	header('Location: main.html');
?>