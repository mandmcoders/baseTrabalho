<?php
include_once("includes/body.php");
// ligar à base de dados
// precisamos de uma variável

$nome=addslashes($_POST['nomeDono']);
$morada=addslashes($_POST['moradaDono']);
$telefone=addslashes($_POST['telefoneDono']);
$email=addslashes($_POST['emailDono']);
$sql="insert into donos(donoNome
,donoMorada
,donoTelefone
,donoEmail)
values(
'$nome',
'$morada',
'$telefone',
'$email')";
// correr o sql
mysqli_query($con,$sql);
header("location:donos.php");
?>
