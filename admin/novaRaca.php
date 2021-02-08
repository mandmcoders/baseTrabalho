<?php
include_once("includes/body.php");
top();
?>
<h1>Nova Raça</h1>
<form action="confirmaNovaRaca.php" method="post">

    <div class="form-group">
        <label for="exampleFormControlInput1">Nome:</label>
        <input name="nomeRaca" type="text" class="form-control" id="exampleFormControlInput1">

        <label for="exampleFormControlInput1">especie:</label>
        <select class="form-control" name="nomeEspecie">
            <?php
            $sql="select * from especies";
            $res=mysqli_query($con,$sql);
            while($dados=mysqli_fetch_array($res)){
                ?>
                <option value="<?php echo $dados['especieId']?>">
                    <?php echo $dados['especieNome']?></option>
                <?php
            }
            ?>
        </select>


        <input class="btn btn-primary" type="submit" value="Ok">
    </div>




</form>