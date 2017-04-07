<?php include("../model/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="../custom.js"></script>
</head>
<body>
  <table>
  <thead>
    <tr>
      <th colspan="3">Pacientes</th>
    </tr>
    <tr>
      <th>#</th>
      <th colspan="2">Recentes</th>
    </tr>
  </thead>
  <tbody>
  <?php
$resultado = $conecta->query("SELECT * FROM paciente order by nome asc");
  if ($resultado->num_rows) {
    $cont = 0; 
       while ($rows = $resultado->fetch_object()) {
        
?>
    <tr>
      <td><?php echo $cont;  ?></td>
      <td><?php echo $rows->nome;  ?></td>
      <td>

      <a id="mostrar" href="<?php echo 'view/mostrar.php?id='.$rows->id;?>"><i class="fa fa-info button edit"></i></a>
      <a id="editar" href="<?php echo 'view/atualizar.php?id='.$rows->id;?>"><i class="fa fa-pencil-square-o button update"></i></a>
      <a id="deletar" href="<?php echo $rows->id;?>"><i class="fa fa-trash button delete"></i></a>
      </td>
    </tr>
<?php


$cont++;
}
}


?>

<script type="text/javascript">

$("a#mostrar").click(function() {
  var href = this.href;
   $.ajax({
      url: href,
      type: 'GET',
      success: function(data){
        $("#conteudo").html(data);
      }
    });
  return false;
});


$("a#editar").click(function() {
  var href = this.href;
   $.ajax({
      url: href,
      type: 'GET',
      success: function(data){
        $("#conteudo").html(data);
      }
    });
  return false;
});

$("a#deletar").click(function() {
  var href = this.href;
   $.ajax({
      url: 'view/deletar.php',
      type: 'POST',
      data: {id: href},
      success: function(data){
        $.ajax({
                  url: 'view/contatos.php',
                  type: 'GET',
                  success: function(data){
                      $("#conteudo").html(data);
                }
              });
      }
    });
  return false;
});


</script>

</tbody>
</table>
</body>
</html>

