<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('head.php'); ?>
    <link rel="stylesheet" href="../../../public/css/css-home.css">
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <title>BrionDrinks - Home</title>
</head>
<body>
  
<!-- NAVBAR -->
<?php require('navbar.php'); ?>

<!-- CARROSSEL -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
      <img src="../../../public/img/slide2.PNG" class="img-fluid">
    </svg>

      <div class="container">
        <div class="carousel-caption text-start">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
      <img src="../../../public/img/slide3.PNG" class="img-fluid">
    </svg>
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
      <img src="../../../public/img/slide1.PNG" class="img-fluid">
    </svg>
      <div class="container">
        <div class="carousel-caption text-end">
        </div>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- ÚLTIMOS ADICIONADOS -->
<div id="adicionados" class="block">
  <div class="container">
  
    <h2 class="titulo-pagina mt-5"><b>DESTAQUES</b></h2>
    <div class="linhaHorizontal mb-5"></div>
    <div class="row">
    <?php foreach ($produtos as $produto) :?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card text-center shadow-p card-borda card-produto mt-3 mb-3" >
                    <img class="card-img-top" src="../../../public/img/<?= $produto->foto ?>" alt="Imagem do drink">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produto->nome ?></h5>
                        <p class="card-text"><?= $produto->preco ?></p>
                        <p class="card-text"><?= $produto->categoria ?></p>
                        <form action="/produto" method="GET">
                            <input type="hidden" name ="id" value="<?=$produto->id ?>">
                            <button type="submit" class="btn card-botao">VER PRODUTO</button>
                        </form>
                   
                    </div>
                </div>
            </div>

      
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!--- call to actions-->
<div id="call">
  <div class="container mt-5">
  <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="\quemsomos">Quem somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\contato">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
  </div>
</div>

<!-- FOOTER -->
<?php require('footer.php'); ?>

</body>
</html>