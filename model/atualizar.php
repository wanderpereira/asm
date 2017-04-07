<?php
include_once("connection.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$mae = $_POST['mae'];
$nasc = $_POST['nasc'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$titulo = $_POST['titulo'];
$sus = $_POST['sus'];
$rua = $_POST['rua'];
$quadra = $_POST['quadra'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];


$sql = "UPDATE paciente SET nome = '$nome', mae = '$mae', nasc = '$nasc', sexo = '$sexo', cpf = '$cpf', rg = '$rg', titulo = '$titulo', sus = '$sus', rua = '$rua', quadra = '$quadra', numero = '$numero', bairro = '$bairro', cep = '$cep', telefone = '$telefone', celular = '$celular', email = '$email', assunto = '$assunto' WHERE id = $id;";

mysqli_query($conecta, $sql);


?>