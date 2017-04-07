<?php include("../model/connection.php"); ?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>ASM.net </title>
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="../custom.js"></script>
	</head>
	<body>
<article>
<div class="container block main" role="main">

  <?php
$id = $_GET['id'];

$resultado = $conecta->query("SELECT * FROM paciente WHERE id = $id");
  if ($resultado->num_rows) {
    $cont = 0; 
       while ($rows = $resultado->fetch_object()) {
        
?>

<table>
  <thead>
    <tr>
      <th colspan="3">Pacientes</th>
    </tr>
    <tr>
      <th colspan="2">Resultados de: <?php echo $rows->nome; ?></th>
    </tr>
  </thead>
  <form action="" method="post">
  <tbody>

    <tr><td>Nome Completo: <input type="" placeholder="<?php echo $rows->nome; ?>" id="nome"></td><td></td></tr>
    <tr><td>Nome da Mãe: <input type="" placeholder="<?php echo $rows->mae; ?>" id="mae"></td><td></td></tr>
    <tr><td>Data de Nascimento: <input type="date" placeholder="<?php echo $rows->nasc; ?>" id="nasc"></td><td></td></tr>
        <tr><td>Sexo: <select id="sexo">
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                  </select>
    </td><td></td></tr>
    <tr><td>CPF: <input type="" placeholder="<?php echo $rows->cpf; ?>" id="cpf"></td><td></td></tr>
    <tr><td>RG: <input type="" placeholder="<?php echo $rows->rg; ?>" id="rg"></td><td></td></tr>
    <tr><td>Título de Eleitor: <input type="" placeholder="<?php echo $rows->titulo; ?>" id="titulo"></td><td></td></tr>
    <tr><td>Cartão do SUS: <input type="" placeholder="<?php echo $rows->sus; ?>" id="sus"></td><td></td></tr>
    <tr><td>Endereço: <input type="" placeholder="<?php echo $rows->rua; ?>" id="rua"></td><td></td></tr>
    <tr><td>Quadra: <input type="" placeholder="<?php echo $rows->quadra; ?>" id="quadra"></td><td></td></tr>
    <tr><td>Número: <input type="" placeholder="<?php echo $rows->numero; ?>" id="numero"></td><td></td></tr>
    <tr><td>Bairro: <input type="" placeholder="<?php echo $rows->bairro; ?>" id="bairro"></td><td></td></tr>
    <tr><td>CEP: <input type="" placeholder="<?php echo $rows->cep; ?>" id="cep"></td><td></td></tr>
    <tr><td>Telefone: <input type="" placeholder="<?php echo $rows->telefone; ?>" id="telefone"></td><td></td></tr>
    <tr><td>Celular: <input type="" placeholder="<?php echo $rows->celular; ?>" id="celular"></td><td></td></tr>
    <tr><td>E-mail: <input type="" placeholder="<?php echo $rows->email; ?>" id="email"></td><td></td></tr>
    <tr><td>Assunto: <input type="" placeholder="<?php echo $rows->assunto; ?>" id="assunto"></td><td></td></tr>
    <input type="hidden" value="<?php echo $rows->id; ?>" id="id">

 <?php
}
}

?>
 </tbody>

</table>
  <input class="sharing__button btn btn--secondary btn--full" type="submit" id="salvar-editar" value="Salvar">
  </form>

</article>
	</body>
</html>