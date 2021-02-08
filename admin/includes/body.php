<?php
include_once("config.php");
$con=mysqli_connect($host,$user,$pass,$baseDados);
$con->set_charset("utf-8");

function top(){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Isdom</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script>
        function eliminaEspecie(id){
            if(confirm('Confirma a eliminação do registo com Id: #'+id+'?'))
                    window.location="confirmaEliminaEspecie.php?id="+id;
        }
        function eliminaRaca(id){
            if(confirm('Confirma a eliminação do registo com Id: #'+id+'?'))
                window.location="confirmaEliminaRaca.php?id="+id;
        }

    </script>
</head>
<body>
<div class="container">
    <header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex ">
                <a class="p-2 m-2 text-black-50 btn btn-outline-primary" href="index.php">Página Inicial</a>
                <a class="p-2 m-2 text-black-50 btn btn-outline-primary" href="especies.php">Espécies</a>
                <a class="p-2 m-2 text-black-50 btn btn-outline-primary" href="racas.php">Raças</a>
                <a class="p-2 m-2 text-black-50 btn btn-outline-primary" href="donos.php">Donos</a>
                <a class="p-2 m-2 text-black-50 btn btn-outline-primary" href="animais.php">Animais</a>
            </nav>
        </div>
    </header>
    <section>
        <div class="container">
<?php
}

function bottom(){
?>
        </div>
    </section>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="../js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>
