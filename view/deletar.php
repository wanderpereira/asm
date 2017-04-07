<?php
include("../model/connection.php");

$deletar = $_POST['id'];

$id = substr($deletar,22);

$sql = "DELETE FROM paciente WHERE id= $id";

mysqli_query($conecta, $sql);


?>