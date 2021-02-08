<?php
include_once("includes/body.php");
top();
?>
<h1>Novo Dono</h1>
<form action="confirmaNovoDono.php" method="post">


    <div class="form-group">
        <label for="exampleFormControlInput1">Nome:</label>
        <input name="nomeDono" type="text" class="form-control" id="exampleFormControlInput1">
        <label for="exampleFormControlInput1">Morada:</label>
        <input name="moradaDono" type="text" class="form-control" id="exampleFormControlInput1">
        <label for="exampleFormControlInput1">Telefone:</label>
        <input name="telefoneDono" type="text" class="form-control" id="exampleFormControlInput1">
        <label for="exampleFormControlInput1">E-mail:</label>
        <input name="emailDono" type="text" class="form-control" id="exampleFormControlInput1">
        <input class="btn btn-primary" type="submit" value="Ok">
    </div>
</form>
