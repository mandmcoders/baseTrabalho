<?php
    include_once("includes/body.php");


    $idDono=intval($_POST['idDono']);
    $nomeDono=addslashes($_POST['nomeDono']);
    $moradaDono=addslashes($_POST['moradaDono']);
    $telefoneDono=addslashes($_POST['telefoneDono']);
    $emailDono=addslashes($_POST['emailDono']);

    $sql="Update donos set
                donoNome='$nomeDono',
                donoMorada='$moradaDono',
                 donoTelefone='$telefoneDono',
                 donoEmail='$emailDono'
            where donoId=$idDono";
    mysqli_query($con,$sql);
    header("location:donos.php");
?>
