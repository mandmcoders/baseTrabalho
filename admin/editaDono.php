<?php
include_once("includes/body.php");
top();
$id=intval($_GET['id']);
// SQL acesso aos dados do dono
$sql="Select * from donos where donoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
//****************************************************
?>
<h1>Edita Dono</h1>
<form action="confirmaEditaDono.php" method="post" >
    <div class="form-group">
        <input type="hidden" name="idDono" value="<?php echo $dados['donoId']?>">

        <label for="exampleFormControlInput1">Nome:</label>
        <input name="nomeDono" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $dados['donoNome']?>">

        <label for="exampleFormControlInput1">Morada:</label>
        <input name="moradaDono" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $dados['donoMorada']?>">

        <label for="exampleFormControlInput1">Telefone:</label>
        <input name="telefoneDono" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $dados['donoTelefone']?>">

        <label for="exampleFormControlInput1">E-mail:</label>
        <input name="emailDono" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $dados['donoEmail']?>">

        <input type="submit" value="Ok">
    </div>
</form>
