<?php
include_once("includes/body.php");
// ligar à base de dados
// precisamos de uma variável
$id=intval($_GET['id']);
$sql="delete from especies where especieId=$id";
// correr o sql
mysqli_query($con,$sql);
header("location:especies.php");
?>
