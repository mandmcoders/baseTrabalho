<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once ("includes/body.inc.php");
    $sql="Select * from animais inner join racas on racaId=animalRacaId
            inner join especies on especieId=racaEspecieId
            where especieNome='cão'";
    $result=mysqli_query($con,$sql);

    top();
?>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4" onclick="olaMundo()">Welcome to Modern Business</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Aves de rapina</h4>
          <div class="card-body">
            <p class="card-text">
              As aves de rapina, rapinantes, raptores ou aves predatórias são aves carnívoras que compartilham características semelhantes, como bicos recurvados e pontiagudos, garras fortes e visão de longo alcance. Assim, as rapinantes são aves ágeis na captura de seus alimentos: grandes artrópodes, peixes, anfíbios, pequenos mamíferos e pequenas aves. Mas cada rapinante está adaptada para caçar um tipo de animal, ou um certo grupo deles:
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Card Title</h4>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Card Title</h4>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2>Portfolio Heading</h2>

    <div class="row">
        <?php
        while($dados=mysqli_fetch_array($result)){
        ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?php echo $dados['animalFotoURL']?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
                <a href="aguia.html"><?php echo $dados['animalNome']?></a>
            </h4>
              <h6><img  src="imgs/<?php if($dados['animalGenero']=='F') echo "fe";?>male.jpg" width="10" >     <?php echo $dados['racaNome']?></h6>
                <h6 class="float-right text-muted"><?php echo $dados['animalDataNascimento']?></h6>
              <p class="card-text">
              <?php  echo $dados['animalDescricao']?>
            </p>
          </div>
        </div>
      </div>
        <?php
        }
        ?>


         </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Modern Business Features</h2>
        <p>The Modern Business template by Start Bootstrap includes:</p>
        <ul>
          <li>
            <strong>Bootstrap v4</strong>
          </li>
          <li>jQuery</li>
          <li>Font Awesome</li>
          <li>Working contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div>

  </div>
  <!-- /.container -->

<?php
bottom();
?>
