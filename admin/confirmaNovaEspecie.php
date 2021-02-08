<?php
include_once("includes/body.php");
// ligar à base de dados
// precisamos de uma variável

$nome=addslashes($_POST['nomeEspecie']);
$sql="Insert into especies(especieNome) values('$nome')";
// correr o sql
mysqli_query($con,$sql);
header("location:especies.php");
?>
