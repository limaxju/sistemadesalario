
# Calculadora de Salário

Esta é uma calculadora de salário simples em PHP, onde os vendedores podem inserir seu nome, sua meta de vendas semanal e mensal, e o salário mínimo da empresa. Com base nessas informações, a calculadora determina o salário final do vendedor, levando em consideração um percentual sobre a meta semanal alcançada e percentuais adicionais sobre o excedente da meta semanal e mensal.

## Funcionalidades

- Formulário para inserção dos dados do vendedor.
- Cálculo do salário final com base nas metas e salário mínimo.

## Como usar

1. Clone este repositório para sua máquina local.
2. Abra o arquivo `index.php` em um navegador web.
3. Preencha o formulário com o nome do vendedor, a meta semanal, a meta mensal e o salário mínimo.
4. Clique no botão "Calcular Salário" para ver o resultado.

## Tecnologias utilizadas

- HTML
- CSS
- PHP

## Exemplo de código

```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $meta_semanal = floatval($_POST["meta_semanal"]);
    $meta_mensal = floatval($_POST["meta_mensal"]);
    $salario_minimo = floatval($_POST["salario_minimo"]);
    $percentual_sobre_meta_semanal = 0.01;
    $percentual_excedente_semanal = 0.05;
    $percentual_excedente_mensal = 0.10;

    // Cálculos do salário final

    echo "<h2 style='text-align: center;'>Salário final de $nome: R$ " . number_format($salario_final, 2, ',', '.') . "</h2>";
}
