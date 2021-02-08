<?php
    include_once("includes/body.php");
    $idAnimal=intval($_POST['idAnimal']);
    $nomeAnimal=addslashes($_POST['nomeAnimal']);
    $dataNascimento=addslashes($_POST['dataNascimento']);
    $dataUltimaVacina=addslashes($_POST['dataUltimaVacina']);
    $generoAnimal=addslashes($_POST['genero']);
    $descricaoAnimal=addslashes($_POST['descricaoAnimal']);
    $idRaca=intval($_POST['raca']);
    $idDono=intval($_POST['dono']);
    if($_FILES['fotoAnimal']['name']!=""){// existe fotografia
        $fotoURL="images/".$_FILES['fotoAnimal']['name'];
        copy($_FILES['fotoAnimal']['tmp_name'],"../".$fotoURL);
    }



    $sql="Update animais set
            animalNome='$nomeAnimal',
            animalDataNascimento='$dataNascimento',
            animalDataUltimaVacina='$dataUltimaVacina',
            animalGenero='$generoAnimal',
            animalDonoId=$idDono,
            animalDescricao='$descricaoAnimal',
            animalRacaId=$idRaca";
    if($_FILES['fotoAnimal']['name']!="")// existe fotografia
            $sql.=",animalFotoURL='".$fotoURL."' ";
    $sql.=" where animalId=$idAnimal";
    mysqli_query($con,$sql);
    header("location:animais.php");
?>
