<?php
include_once("includes/body.php");

$idRaca=intval($_POST['idRaca']);
$idEspecie=intval($_POST['idEspecie']);
$nomeRaca=addslashes($_POST['nomeRaca']);


$sql="update racas set racaNome='$nomeRaca'
                        ,racaEspecieId=$idEspecie
                    where racaId=$idRaca";

mysqli_query($con,$sql);
header("location:racas.php");
?>