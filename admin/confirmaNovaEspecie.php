<?php
include_once("includes/body.php");
// ligar � base de dados
// precisamos de uma vari�vel

$nome=addslashes($_POST['nomeEspecie']);
$sql="Insert into especies(especieNome) values('$nome')";
// correr o sql
mysqli_query($con,$sql);
header("location:especies.php");
?>
