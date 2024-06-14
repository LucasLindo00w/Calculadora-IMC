<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);

    if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura * $altura);

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

        echo "<h2>Resultado do IMC</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>IMC:</strong> " . number_format($imc, 2) . "</p>";
        echo "<p><strong>Status:</strong> $status</p>";
    } else {
        echo "<h2>Erro</h2>";
        echo "<p>Os valores de peso e altura devem ser maiores que zero.</p>";
    }
}
?>