<?php
include_once ("includes/body.php");
top();
?>
<h1>Nova Espécie</h1>
<form action="confirmaNovaEspecie.php" method="post">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome:</label>
        <input name="nomeEspecie" type="text" class="form-control" id="exampleFormControlInput1">
        <input class="btn btn-primary" type="submit" value="Ok">
    </div>
</form>
