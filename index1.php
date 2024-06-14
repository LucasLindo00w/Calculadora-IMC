<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nossa loja online</title>
  <!--LINK BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--LINK BOOTSTRAP-->

  <!--LINK CSS-->
  <link href="./style.css" rel="stylesheet">
  <!--LINK CSS-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-G1qn8JLZt0FfZoGibm4yoM7b9Io5u1F+9rjM/OHPjgxzh/NkSk6r6C5F1YoMZYo1D06XfWqlUDrf7+jDB5iRVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <!-- Google Fonts -->
</head>

<style>
  .primeiro-p {
    font-size: 20px;
  }
</style>

<body>
  <!--BARRA DE NAVEGAÇÃO-->
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Entre em contato:</h1><br>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p><strong>Email:</strong> suasaudeimporta@gmail.com</p>
    <p><strong>Instagram:</strong> @equipe_saudavel</p>
    <p><strong>WhatsApp / Tel:</strong> 19 4002-8922 / 3861-2933</p>
  </div>
</div>

<div class="container-fluid mt-3">
  <nav class="navbar navbar-expand-lg col-12 m-auto bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index1.php">
        <h1><span>I</span>mc</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <button class="btn btn-none nav-link" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#demo">Fale Conosco</button>
          </li>
          <li class="nav-item">
            <a class="btn btn-none nav-link" href="index3.php">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-none nav-link" href="index1.php">Início</a>
          </li>
        </ul>
        <form class="d-flex ms-3" role="search">
          <input class="form-control me-2 btn-outline-danger" type="search" placeholder="O que você procura?"
            aria-label="Search">
          <button class="nav-item" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
  </nav>
</div>
  <!--BARRA DE NAVEGAÇÃO-->

  <!-- CARROSEL -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!--INDICADORES -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    <!-- imgs carrosel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="banner_calculadora.png" alt="" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="banner2.png" alt="" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="banner1.png" alt="" class="d-block w-100">
      </div>
    </div>
    <!-- direção do carrosel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <!-- direção do carrosel -->

  <br>
  
  
    <div class="container">
    <div class="main-txt efeito-txt">
      <h1>Entenda o que é IMC</h1>
      <br>
    </div>
    
    <p class="primeiro-p">O IMC, ou Índice de Massa Corporal, é um cálculo simples que permite avaliar se a pessoa está dentro do peso que é considerado ideal para a sua altura. O IMC é uma fórmula utilizada por vários profissionais de saúde, incluindo médicos, nutricionistas, profissionais de educação física e enfermeiros, para saber, de uma forma rápida, se a pessoa está com o peso adequado ou se precisa ganhar ou perder peso.</p>
   
    
    <!-- form -->
    <div class="container" >
      <h2>Calcule seu IMC:</h2>
      <form action="" method="post" id="imcForm">
        <label for="nome">Digite Seu Nome:</label><br>
        <input type="text" id="nome" name="nome" placeholder="Seu nome completo:"><br>
        <label for="peso">Digite Seu Peso (kg):</label><br>
        <input type="text" id="peso" name="peso" placeholder="(Ex: 81,3)"><br>
        <label for="altura">Digite Sua Altura (m):</label><br>
        <input type="text" id="altura" name="altura" placeholder="(Ex: 1,71)"><br><br>
        <input type="submit" value="Calcular" class="btn-enviar">
        <input type="reset" value="Limpar" id="clearButton" class="btn-enviar">
      </form>
    </div>

    <br>
    <!-- form -->

    <script>
      // Botão Limpar
      $("#clearButton").click(function () {
                $("#imcForm")[0].reset();
                $("#resultado").php("");
            });

            // Limpar resultado ao recarregar a página
            $(window).on("load", function () {
                $("#resultado").php("");
            });
      

    </script>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $peso = floatval($_POST['peso']);
    $altura = doubleval($_POST['altura']);

    if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura ^ 2);

        if ($imc < 18.5) {
            $status = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            $status = "Peso ideal";
        } elseif ($imc >= 25 && $imc < 30) {
            $status = "Sobrepeso";
        } elseif ($imc >= 30 && $imc < 35) {
            $status = "Obesidade grau 1";
        } elseif ($imc >= 35 && $imc < 40) {
            $status = "Obesidade grau 2";
        } else {
            $status = "Obesidade grau 3";
        }

        echo "<h2>Seu Resultado do IMC:</h2>";
        echo "<p><strong>Seu Nome:</strong> $nome</p>";
        echo "<p><strong>IMC:</strong> " . number_format($imc, 2) . "</p>";
        echo "<p><strong>Seu Status:</strong> $status</p>";
    } else {
        echo "<h2>Erro</h2>";
        echo "<p>Os valores de peso e altura devem ser maiores que zero.</p>";
    }
}
?>


    <div class="headline">
      <div class="main-txt">
          <h1>Entenda o seu resultado</h1>
        </div>
       
    <div class="row" style="margin-top: 30px;">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <i class="fas fa-hotel"></i>
          <div class="card-body">
            <h3>Obesidade Grau 1</h3>
            <img src="imc_03.png.webp " alt="Imagem de Obesidade Grau 3"> <br>
            <p><b>(Entre 30,0 e 34,9)</b> Sinal de alerta! Chegou na hora de se cuidar, mesmo que seus exames sejam normais. Vamos dar início a mudanças hoje! Cuide de sua alimentação. Você precisa iniciar um acompanhamento com nutricionista e/ou endocrinologista.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <i class="fas fa-utensils"></i>
          <div class="card-body">
            <h3>Obesidade Grau 2</h3>
            <img src="imc_02.png.webp" alt="Imagem de Obesidade de Grau 2"> 
            <p><b>(Entre 35,0 e 39,9)</b> Mesmo que seus exames aparentem estar normais, é hora de se cuidar, iniciando mudanças no estilo de vida com o acompanhamento próximo de profissionais de saúde.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <i class="fas fa-bullhorn"></i>
          <div class="card-body">
            <h3>Obesidade grau 3</h3>
            <img src="img1.png" alt="Imagem de Obesidade Grau 1">
            <p><b>(Acima de 40,0)</b> Aqui o sinal é vermelho, com forte probabilidade de já existirem doenças muito graves associadas. O tratamento deve ser ainda mais urgente.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 30px;">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <i class="fas fa-globe-asia"></i>
          <div class="card-body">
            <h3>Sobrepeso</h3>
            <img src="imc_04.png.webp" alt="Imagem de Sobrepeso">
            <p><b>(Entre 25,0 e 29,9)</b> Aqui começa um estado de alerta. Talvez o seu médico peça alguns exames para analisar sua saúde. Não deixe de se cuidar!</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <i class="fas fa-heart"></i>
          <div class="card-body">
            <h3>Peso Ideal</h3>
            <img src="imc_05.png.webp" alt="Imagem de Peso Ideal">
            <p><b>(Entre 18,5 e 24,9)</b> Você está de parabéns! Esse valor mostra que você está em seu peso ideal, continue assim! Aproveite para manter uma vida saudável.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <i class="fas fa-cog"></i>
          <div class="card-body">
            <h3>Abaixo do peso</h3>
            <img src="imc_06.png.webp" alt="Imagem de Abaixo do Peso">
            <p><b>(Abaixo de 18,5)</b> Vamos nos cuidar? Esse valor indica que seu peso está abaixo do ideal, procure uma ajuda de nutricionista para melhorar a sua alimentação.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  
        

  <hr>

  <div class="container-fluid bg-black">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <h2 class="footer-title"><b>Feito Por:</b></h2>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Lucas Oliveira</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Eduardo Barreto</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Lucas Vaz</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Felipe Oliveira</a></li>
      </ul>
      <p class="text-center text-muted">&copy; 2024 CURSO - PROGRAMAÇÃO PARA WEB II</p>
      <p class="text-center text-muted"><b>Orientador:</b> Maromo & Sinzomar</p>
    </footer>
  </div>

  

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-7bzUj2ncv+W+I3uUzB1QdOpyXaqWkF0mYmIWb+fnY0e4m17PEww9sItP4ZqP6f8X5+8lp7AzUc8lXzO5pHd4iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script>
    
  </script>
  
  <!--LINK BOOTSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <!--LINK BOOTSTRAP-->
</body>

</html>
