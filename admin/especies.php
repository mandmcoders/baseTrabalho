<?php
include_once ("includes/body.php");
top();

// SQL de listagem dos animais
$sql="Select * from especies";
// mandar correr o SQL no servidor
$result=mysqli_query($con,$sql);// indicamos qual o servidor
//mostrar os dados do result

?>
<div class="float-right">
    <a class="btn btn-success" href='novaEspecie.php'>Nova Espécie</a>
</div>

<?php
echo "<table class='table table-striped table-hover' cellpadding='5'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nome</th>";
echo "<th width='5%'>&nbsp;</th>";
echo "</tr>";



while($dados=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$dados['especieId']."</td>";
    echo "<td>".$dados['especieNome']."</td>";
    echo "<td>";
    echo "<a class='btn btn-primary' href='editaEspecie.php?id=".$dados['especieId']."'>Edita</a>";
    echo "<a class='btn btn-danger' href='#' onclick='eliminaEspecie(".$dados['especieId'].")'>Elimina</a>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>
