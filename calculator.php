<?php

$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$op = $_POST['operation'];

class Calculadora
{
    private $n1;
    private $n2;

    public function __construct($n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function calcular($op)
    {
        switch ($op) {
            case '+':
                return $this->n1 + $this->n2;

            case '-':
                return $this->n1 - $this->n2;

            case '*':
                return $this->n1 * $this->n2;

            case '/':
                if ($this->n2 == 0) {
                    return "Erro: divisão por zero";
                }
                return $this->n1 / $this->n2;
        }
    }
}
$calc = new Calculadora($n1, $n2);
$resultado = $calc->calcular($op);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container">

    <div class="imagenss">

        <img src="rayedit.png" class="imagem">

    </div>

    <h1 class="resultado">
        O resultado é:
    </h1>
    <p class="p1">
        <strong>

            <?php echo $resultado ?>

        </strong>
    </p>

    <br>

    <div class="imagens">

        <img src="cicinhooo.png" class="image">

        <img src="carlinhos.png" class="image">

        <img src="airlannn.png" class="image">

    </div>

    <a href="index.html" class="voltar">Voltar</a>

</body>

</html>