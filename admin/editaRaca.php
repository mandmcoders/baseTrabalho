<?php
include_once("includes/body.php");
top();
$id=intval($_GET['id']);

//**** dados da raca
$sql="select * from racas where racaId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
//******

?>
<h1>Edita Raça</h1>


<div class="form-group">

    <form action="confirmaEditaRaca.php" method="post">
        <!-- Id: -->
        <input type="hidden"  name="idRaca" value="<?php echo $dados['racaId']?>"><br>
        <label for="exampleFormControlInput1">Nome:</label>
        <input  class="form-control" type="text" name="nomeRaca" value="<?php echo $dados['racaNome']?>"><br>
        <label for="exampleFormControlInput1">Especie:</label>
        <select  class="form-control" name="idEspecie">
            <?php
            $sql="select * from especies";
            $res=mysqli_query($con,$sql);
            while($dadosE=mysqli_fetch_array($res)){
            ?>
                <option value="<?php echo $dadosE['especieId']?>"
                    <?php
                    if($dadosE['especieId']==$dados['racaEspecieId'])
                        echo " selected ";
                    ?>
                >
                    <?php echo $dadosE['especieNome']?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Ok">


    </form>




</div>