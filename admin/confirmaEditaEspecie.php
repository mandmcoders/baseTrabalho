<?php
include_once("includes/body.php");
// ligar � base de dados
// precisamos de uma vari�vel
$id=intval($_POST['idEspecie']);
$nome=addslashes($_POST['nomeEspecie']);



$sql="update especies set especieNome='$nome' where especieId=$id";
// correr o sql
mysqli_query($con,$sql);
header("location:especies.php");
?>
