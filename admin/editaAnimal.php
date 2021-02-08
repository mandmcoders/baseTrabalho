<?php
include_once("includes/body.php");
top();
// quem foi o escolhido?
$id=intval($_GET['id']);
// dados do animal escolhido
$sql="Select * from animais where animalId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

$idRaca=$dados['animalRacaId'];
$idDono=$dados['animalDonoId'];


?>
<h1>edita animal</h1>
<form action="confirmaEditaAnimal.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idAnimal" value="<?php echo $dados['animalId']?>">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome:</label>
        <input name="nomeAnimal" value="<?php echo $dados['animalNome']?>" type="text" class="form-control" id="exampleFormControlInput1">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricaoAnimal"><?php echo $dados['animalDescricao']?></textarea>


        <label for="exampleFormControlInput1">Data de nascimento:</label>
        <input name="dataNascimento" value="<?php echo $dados['animalDataNascimento']?>" type="date" class="form-control" id="exampleFormControlInput1">
        <label for="exampleFormControlInput1"> Data da última vacina:</label>
        <input name="dataUltimaVacina" value="<?php echo $dados['animalDataUltimaVacina']?>" type="date" class="form-control" id="exampleFormControlInput1">
        <label for="exampleFormControlInput1">Género:</label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php
            if($dados['animalGenero']=='M')
                echo " checked ";
            ?> name="genero" id="inlineRadio1" value="M">
            <label class="form-check-label" for="inlineRadio1">Macho</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"
                   <?php
                   if($dados['animalGenero']=='F')
                       echo " checked ";
                   ?> name="genero" id="inlineRadio2" value="F">
            <label class="form-check-label" for="inlineRadio2">Fêmea</label>
        </div>
        <br>
        <label for="exampleFormControlInput1">Raça:</label>
        <select name="raca" class="form-control">
            <?php
            $sql="select * from racas order by racaNome ";
            $res=mysqli_query($con,$sql);
            while($dadosR=mysqli_fetch_array($res)){
                ?>
                <option
                    <?php
                    if($idRaca==$dadosR['racaId'])
                        echo " selected ";
                    ?> value="<?php echo $dadosR['racaId']?>"><?php echo $dadosR['racaNome']?></option>
                <?php
            }
            ?>
        </select>
        <label for="exampleFormControlInput1">Dono:</label>
        <select name="dono" class="form-control">
            <?php
            $sql="select * from donos order by donoNome ";
            $res=mysqli_query($con,$sql);
            while($dadosD=mysqli_fetch_array($res)){
                ?>
                <option <?php
                if($idDono==$dadosD['donoId']) // passamos por todos
                    echo " selected ";
                ?> value="<?php echo $dadosD['donoId']?>"><?php echo $dadosD['donoNome']?></option>
                <?php
            }
            ?>
        </select>
        <div class="form-group">
            <label for="exampleFormControlFile1">Fotografia:</label>
            <input type="file" name="fotoAnimal" class="form-control-file" id="exampleFormControlFile1">
            <img src="../<?php echo $dados['animalFotoURL']?>">
        </div>
        <input type="submit" value="Ok">
    </div>




</form>