<?php
include_once ("includes/body.php");
top();

// ligar à base de dados
// precisamos de uma variável

// SQL de listagem dos animais
$sql="Select * from animais 
                inner join donos
                on animalDonoId=donoId
                inner join racas
                on animalRacaId=racaId
                inner join especies
                on racaEspecieId=especieId
";
// mandar correr o SQL no servidor
$result=mysqli_query($con,$sql);// indicamos qual o servidor
//mostrar os dados do result
?>
<div class="float-right">
    <a class="btn btn-success" href='novoAnimal.php'>Novo Animal</a>
</div>
<?php
echo "<table class='table table-striped table-hover' cellpadding='5'>";
echo "<tr>";
echo "<th width='100'>Nome</th>";
echo "<th>Espécie</th>";
echo "<th>Raça</th>";
echo "<th>Género</th>";
echo "<th>Data de nascimento</th>";
echo "<th>Data da última Vacina</th>";
echo "<th>Nome do dono</th>";
echo "<th width='5%'>&nbsp;</th>";
echo "</tr>";



while($dados=mysqli_fetch_array($result)){
    $fileURL="../images/noImage.jpg";
    if($dados['animalFotoURL']!="")
        $fileURL="../".$dados['animalFotoURL'];
    echo "<tr>";
    ?>
    <td>
        <table class="table table-sm">
            <tr>
                <td><img src="<?php echo $fileURL?>" width="100"> </td>
            </tr>
            <tr>
                <td><a href='editaAnimal.php?id=<?php echo $dados['animalId']?>'>
                        <?php echo $dados['animalNome']?>
                    </a></td>
            </tr>
        </table>

    </td>
    <?php
    echo "<td>";
    if($dados['especieNome']!='Gato'){
        echo "<img width='15' src='../imgs/dog.jpg'>";
    }
    else{
        echo "<img width='15' src='../imgs/cat.jpg'>";
    }
    echo "</td>";
    echo "<td>".$dados['racaNome']."</td>";
    echo "<td>";
   if($dados['animalGenero']=='M'){
       echo "<img width='15' src='../imgs/male.jpg'>";
   }
   else{
       echo "<img width='15' src='../imgs/female.jpg'>";
   }
    echo "</td>";
    echo "<td>".$dados['animalDataNascimento']."</td>";
    echo "<td>".$dados['animalDataUltimaVacina']."</td>";
    echo "<td>".$dados['donoNome']."</td>";
    ?>
    <td><a class="btn btn-primary" href="editaAnimal.php?id=<?php echo $dados['animalId']?>">Edita</a></td>
    <?php
    echo "</tr>";
}
echo "</table>";
?>
