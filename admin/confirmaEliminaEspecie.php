<?php
include_once("includes/body.php");
// ligar � base de dados
// precisamos de uma vari�vel
$id=intval($_GET['id']);
$sql="delete from especies where especieId=$id";
// correr o sql
mysqli_query($con,$sql);
header("location:especies.php");
?>
