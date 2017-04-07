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

<table>
  <thead>
    <tr>
      <th colspan="3">Criar novo paciente</th>
    </tr>
    <tr>
      <th colspan="2">Adicione um novo paciente</th>
    </tr>
  </thead>
  <form class="form-salvar" method="post">
  <tbody>

    <tr><td>Nome Completo: <input type="" id="nome"></td><td></td></tr>
    <tr><td>Data de Nascimento: <input type="date" id="nasc"></td><td></td></tr>
    <tr><td>Sexo: <select id="sexo">
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                  </select>
    </td><td></td></tr>
    <tr><td>Nome da Mãe: <input type="" id="mae"></td><td></td></tr>
    <tr><td>CPF: <input type="" id="cpf"></td><td></td></tr>
    <tr><td>RG: <input type="" id="rg"></td><td></td></tr>
    <tr><td>Título de Eleitor: <input type="" id="titulo"></td><td></td></tr>
    <tr><td>Cartão do SUS: <input type="" id="sus"></td><td></td></tr>
    <tr><td>Endereço: <input type="" id="rua"></td><td></td></tr>
    <tr><td>Quadra: <input type="" id="quadra"></td><td></td></tr>
    <tr><td>Número: <input type="" id="numero"></td><td></td></tr>
    <tr><td>Bairro: <input type="" id="bairro"></td><td></td></tr>
    <tr><td>CEP: <input type="" id="cep"></td><td></td></tr>
    <tr><td>Telefone: <input type="" id="telefone"></td><td></td></tr>
    <tr><td>Celular: <input type="" id="celular"></td><td></td></tr>
    <tr><td>E-mail: <input type="" id="email"></td><td></td></tr>
    <tr><td>Assunto: <input type="" id="assunto"></td><td></td></tr>
 </tbody>
</table>

<div id="mostraout"></div>

  <input class="sharing__button btn btn--secondary btn--full" type="submit" id="salvar-criar" value="Salvar">
  </form>
  <br><br>
</article>
	</body>
</html>