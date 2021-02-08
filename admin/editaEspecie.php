<?php
include_once("includes/body.php");
top();
$id=intval($_GET['id']);
$sql="select * from especies where especieId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>


<h1>Edita Espécie</h1>
<form action="confirmaEditaEspecie.php" method="post">
    <!-- Id: -->
    <input type="hidden" name="idEspecie" value="<?php echo $dados['especieId']?>"><br>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome:</label>
        <input name="nomeEspecie" value="<?php echo $dados['especieNome']?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <input class="btn btn-primary" type="submit" value="Ok">
    </div>


</form>