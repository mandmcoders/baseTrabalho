<?php
include_once ("includes/body.php");
top();

// SQL de listagem dos animais
$sql="Select donos.*, count(animalId) as num from donos
            left join animais
            on donoId=animalDonoId
            group by donoId
            order by num DESC
";
// mandar correr o SQL no servidor
$result=mysqli_query($con,$sql);// indicamos qual o servidor
//mostrar os dados do result

?>
<div class="float-right">
    <a class="btn btn-success" href='novoDono.php'>Novo Dono</a>
</div>
<?php
echo "<table class='table table-striped table-hover' cellpadding='5'>";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Morada</th>";
echo "<th>Telefone</th>";
echo "<th>Email</th>";
echo "<th>N.º Animais</th>";
echo "<th width='5%'>&nbsp;</th>";
echo "</tr>";



while($dados=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><a href="editaDono.php?id=<?php echo $dados['donoId'] ?>"><?php echo $dados['donoNome'] ?></a></td>
        <td><?php echo $dados['donoMorada'] ?></td>
        <td><?php echo $dados['donoTelefone'] ?></td>
        <td><?php echo $dados['donoEmail'] ?></td>
        <td><?php echo $dados['num'] ?></td>
        <td><a class="btn btn-primary" href="editaDono.php?id=<?php echo $dados['donoId']?>">Edita</a></td>
    </tr>





<?php
}
echo "</table>";

/*
 echo "<tr>";
 echo "<td><a href='editaDono.php?id=".$dados['donoId']."'>".$dados['donoNome']."</a></td>";
 echo "<td>".$dados['donoMorada']."</td>";
 echo "<td>".$dados['donoTelefone']."</td>";

 echo "<td>".$dados['donoEmail']."</td>";
 echo "<td>".$dados['num']."</td>";
 echo "</tr>";*/
?>
