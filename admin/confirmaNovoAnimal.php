<?php
include_once("includes/body.php");
// ligar à base de dados
// precisamos de uma variável
/******* Ficheiro da fotografia ****/
if($_FILES['fotoAnimal']['name']!=""){// existe fotografia
    $fotoURL="images/".$_FILES['fotoAnimal']['name'];
    copy($_FILES['fotoAnimal']['tmp_name'],"../".$fotoURL);



}




$nome=addslashes($_POST['nomeAnimal']);
$dataNasc=addslashes($_POST['dataNascimento']);
$dataVac=addslashes($_POST['dataUltimaVacina']);
$genero=addslashes($_POST['genero']);
$descricao=addslashes($_POST['descricaoAnimal']);
$idRaca=intval($_POST['raca']);
$idDono=intval($_POST['dono']);
$sql="Insert into animais(
        animalNome
        ,animalDataNascimento
        ,animalDataUltimaVacina
        ,animalGenero
        ,animalRacaId
        ,animalDonoId
        ,animalFotoURL
        ,animalDescricao
        ) values(
         '$nome'
        ,'$dataNasc'
        ,'$dataVac'
        ,'$genero'
        ,$idRaca
        ,$idDono
        ,'$fotoURL'
        ,'$descricao'
            )";
mysqli_query($con,$sql);
header("location:animais.php");

?>
