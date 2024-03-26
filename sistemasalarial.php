<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            box-sizing: border-box;
        }

        h1, h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Calculadora de Salário</h1>
    <form method="post">
        <label for="nome">Nome do(a) vendedor(a):</label>
        <input type="text" id="nome" name="nome" required><br>
        <label for="meta_semanal">Meta semanal (R$):</label>
        <input type="number" id="meta_semanal" name="meta_semanal" min="0" step="0.01" required><br>
        <label for="meta_mensal">Meta mensal (R$):</label>
        <input type="number" id="meta_mensal" name="meta_mensal" min="0" step="0.01" required><br>
        <label for="salario_minimo">Salário mínimo (R$):</label>
        <input type="number" id="salario_minimo" name="salario_minimo" min="0" step="0.01" required><br>
        <input type="submit" value="Calcular Salário">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $meta_semanal = floatval($_POST["meta_semanal"]);
        $meta_mensal = floatval($_POST["meta_mensal"]);
        $salario_minimo = floatval($_POST["salario_minimo"]);
        $percentual_sobre_meta_semanal = 0.01;
        $percentual_excedente_semanal = 0.05;
        $percentual_excedente_mensal = 0.10;

        $valor_sobre_meta_semanal = $meta_semanal * $percentual_sobre_meta_semanal;
        $valor_excedente_semanal = max(0, $meta_semanal - 20000) * $percentual_excedente_semanal;
        $valor_excedente_mensal = max(0, $meta_mensal - 80000) * $percentual_excedente_mensal;

        $salario_final = $salario_minimo + $valor_sobre_meta_semanal + $valor_excedente_semanal + $valor_excedente_mensal;

        echo "<h2 style='text-align: center;'>Salário final de $nome: R$ " . number_format($salario_final, 2, ',', '.') . "</h2>";
    }
    ?>
</body>

</html>
