<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        
        

        h1, h2, h3 {
            text-align: center;
            color: #343a40;
        }

        h1 {
            margin-top: 20px;
        }

        h2 {
            font-size: 1.25rem;
            margin: 20px auto;
            max-width: 800px;
            line-height: 1.5;
        }

        h3 {
            margin-top: 30px;
        }

        .offcanvas-title {
            font-size: 1.5rem;
        }

        .footer-title {
            margin-bottom: 10px;
            font-size: 1.5rem;
            color: black;
        }

        .footer {
            background-color: white;
            color: #6c757d;
        }

    </style>
</head>

<body>
    <div class="offcanvas offcanvas-start" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">Entre em contato:</h1>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <p><strong>Email:</strong> suasaudeimporta@gmail.com</p>
            <p><strong>Instagram:</strong> @equipe_saudavel</p>
            <p><strong>WhatsApp/ Tel:</strong> 19 4002-8922 / 3861-2933</p>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <nav class="navbar navbar-expand-lg col-11 m-auto bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index1.html">
                    <h1><span>I</span>mc</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <button class="btn btn-none nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">Fale Conosco</button>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-none nav-link" href="index3.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-none nav-link" href="index1.php">Início</a>
                        </li>
                    </ul>
                    <form class="d-flex ms-3" role="search">
                        <input class="form-control me-2 btn-outline-danger" type="search" placeholder="O que você procura?" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5">
        <h1><b>Sobre os criadores</b></h1>
        <h2>
            <b>Somos estudantes da escola técnica Etec Pedro Ferreira Alves, e esse é nosso projeto do curso de Programação Web II sobre um site de calcular o IMC de uma pessoa. Utilizamos HTML, PHP, CSS e Bootstrap. Essa atividade foi proposta pelos professores Maromo e Sinzomar, projetado e desenvolvido pelos alunos: Lucas Oliveira, Lucas Vaz, Felipe Oliveira e Eduardo Barreto.</b>
        </h2>
        <hr>
        <img src="maromo.png" class="img-fluid mx-auto d-block" width="350" height="350" alt="Imagem de Maromo">
        <h3><b>Obrigado pela atenção!!</b></h3>
        <hr>
    </div>

    <div class="container-fluid footer py-3">
        <footer class="text-center">
            <h2 class="footer-title"><b>Feito Por:</b></h2>
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Lucas Oliveira</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Eduardo Barreto</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Lucas Vaz</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Felipe Oliveira</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2024 CURSO - PROGRAMAÇÃO PARA WEB II</p>
            <p class="text-center text-muted"><b>Orientador:</b> Maromo & Sinzomar</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
