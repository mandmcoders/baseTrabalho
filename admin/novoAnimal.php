<?php
include_once("includes/body.php");
top();
?>
<h1>Novo animal</h1>
<form action="confirmaNovoAnimal.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome:</label>
        <input name="nomeAnimal" type="text" class="form-control" id="exampleFormControlInput1">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricaoAnimal"></textarea>



        <label for="exampleFormControlInput1">Data de nascimento:</label>
        <input name="dataNascimento" type="date" class="form-control" id="exampleFormControlInput1">
        <label for="exampleFormControlInput1"> Data da última vacina:</label>
        <input name="dataUltimaVacina" type="date" class="form-control" id="exampleFormControlInput1">
        <label for="exampleFormControlInput1">Género:</label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="inlineRadio1" value="M">
            <label class="form-check-label" for="inlineRadio1">Macho</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="genero" id="inlineRadio2" value="F">
            <label class="form-check-label" for="inlineRadio2">Fêmea</label>
        </div>
        <br>
        <label for="exampleFormControlInput1">Raça:</label>
        <select name="raca" class="form-control">
            <?php
            $sql="select * from racas order by racaNome ";
            $res=mysqli_query($con,$sql);
            while($dados=mysqli_fetch_array($res)){
            ?>
                <option value="<?php echo $dados['racaId']?>"><?php echo $dados['racaNome']?></option>
            <?php
            }
            ?>
        </select>
        <label for="exampleFormControlInput1">Dono:</label>
        <select name="dono" class="form-control">
            <?php
            $sql="select * from donos order by donoNome ";
            $res=mysqli_query($con,$sql);
            while($dados=mysqli_fetch_array($res)){
            ?>
                <option value="<?php echo $dados['donoId']?>"><?php echo $dados['donoNome']?></option>
            <?php
            }
            ?>
        </select>
        <div class="form-group">
            <label for="exampleFormControlFile1">Fotografia:</label>
            <input type="file" name="fotoAnimal" class="form-control-file" id="exampleFormControlFile1">
        </div>
    <input type="submit" value="Ok">
    </div>

</form>