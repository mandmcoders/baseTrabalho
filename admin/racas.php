<?php
include_once ("includes/body.php");
top();

// SQL de listagem dos animais
$sql="Select * from racas 
                inner join especies on racaEspecieId=especieId";
// mandar correr o SQL no servidor
$result=mysqli_query($con,$sql);// indicamos qual o servidor
//mostrar os dados do result
?>
<div class="float-right">
    <a class="btn btn-success" href='novaRaca.php'>Nova Raças</a>
</div>
<?php
echo "<table class='table table-striped table-hover' cellpadding='5'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nome</th>";
echo "<th>Espécie</th>";
echo "<th width='5%'>&nbsp;</th>";echo "<th width='5%'>&nbsp;</th>";
echo "</tr>";



while($dados=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $dados['racaId']?></td>
        <td>
            <a href="editaRaca.php?id=<?php echo $dados['racaId']?>">
            <?php echo $dados['racaNome']?>
            </a>
        </td>
        <td><?php echo $dados['especieNome']?></td>
        <td><a class="btn btn-primary" href="editaRaca.php?id=<?php echo $dados['racaId']?>">Edita</a></td>
        <td><a class="btn btn-danger" onclick="eliminaRaca(<?php echo $dados['racaId']?>)" href="#">Elimina</a></td>

    </tr>
<?php
}
echo "</table>";
?>


































