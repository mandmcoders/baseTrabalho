<?php
include_once("includes/body.php");
// ligar � base de dados
// precisamos de uma vari�vel

$nome=addslashes($_POST['nomeRaca']);
$especie=addslashes($_POST['nomeEspecie']);
$sql="Insert into racas(racaNome, racaEspecieId) values('$nome','$especie')";
// correr o sql
mysqli_query($con,$sql);
header("location:racas.php");
?>
