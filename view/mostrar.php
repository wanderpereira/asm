<?php include("../model/connection.php"); ?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>ASM.net </title>
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
<article>
<table>
  <thead>
   <?php

$id = $_GET['id'];


$resultado = $conecta->query("SELECT * FROM paciente WHERE id = $id");
  if ($resultado->num_rows) {
    $cont = 0; 
       while ($rows = $resultado->fetch_object()) {


        
?>
    <tr>
      <th colspan="3">Pacientes</th>
    </tr>
    <tr>
      <th colspan="2">Resultados de: <?php echo $rows->nome; ?></th>
    </tr>
  </thead>
  <tbody>

    <tr><td>Nome Completo: <?php echo $rows->nome; ?></td><td></td>
    <tr><td>Nome da Mãe: <?php echo $rows->mae; ?></td><td></td>
    <tr><td>Data de Nascimento: <?php echo date('d/m/Y',strtotime($rows->nasc)); ?></td><td></td>
    <tr><td>Sexo: <?php echo $rows->sexo; ?></td><td></td>
    <tr><td>CPF: <?php echo $rows->cpf; ?></td><td></td>
    <tr><td>RG: <?php echo $rows->rg; ?></td><td></td>
    <tr><td>Título de Eleitor: <?php echo $rows->titulo; ?></td><td></td>
    <tr><td>Cartão do SUS: <?php echo $rows->sus; ?></td><td></td>
    <tr><td>Endereço: <?php echo $rows->rua; ?></td><td></td>
    <tr><td>Quadra: <?php echo $rows->quadra; ?></td><td></td>
    <tr><td>Número: <?php echo $rows->numero; ?></td><td></td>
    <tr><td>Bairro: <?php echo $rows->bairro; ?></td><td></td>
    <tr><td>CEP: <?php echo $rows->cep; ?></td><td></td>
    <tr><td>Telefone: <?php echo $rows->telefone; ?></td><td></td>
    <tr><td>Celular: <?php echo $rows->celular; ?></td><td></td>
    <tr><td>E-mail: <?php echo $rows->email; ?></td><td></td>
    <tr><td>Assunto: <?php echo $rows->assunto; ?></td><td></td>
 
    </tr>
<?php
$cont++;
}
}


?>    
  </tbody>
</table>
</article>
</body>
</html>

