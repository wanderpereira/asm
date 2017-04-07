<?php
include_once("connection.php");

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

$sql = "INSERT INTO paciente(nome, mae, nasc, sexo, cpf, rg, titulo, sus, rua, quadra, numero, bairro, cep, telefone, celular, email, assunto) VALUES('$nome', '$mae', '$nasc', '$sexo', '$cpf', '$rg', '$titulo', '$sus', '$rua', '$quadra', '$numero', '$bairro','$cep', '$telefone', '$celular', '$email', '$assunto')";

if (mysqli_query($conecta, $sql)) {

} else {
    echo "Erro Encontrado: " . mysqli_error($conecta);
}

?>