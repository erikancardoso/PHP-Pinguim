<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="style.css">
    <title>kdevs</title>
</head>

<body>
    <h1> <?php echo "Sistema de Notas <br>";?></h1>
    <?php
    $post = $_POST;
    //var_dump($post);
    $aluno = $post['nome'];

    if ($post['nome'] && $post['nota1'] && $post['nota2'] && $post['nota3'] && $post['nota4'] != null) {
        $notaTotal = ($post['nota1'] + $post['nota2'] + $post['nota3'] + $post['nota4']) / 4;
        $situacao = match (true) {
            $notaTotal >= 7 && $notaTotal <= 10 => "Aprovado",
            $notaTotal > 4 && $notaTotal < 7 => "Recuperação",
            $notaTotal <= 4 => "Reprovado",
            default => "Valor acima de 10"
        };
        ?>

        <main><?php echo "Aluno(a): $aluno - Nota: $notaTotal - Situação: $situacao";?></main>

        <?php
    } else {
        echo "Por favor, preencha todos os campos do formulário <br>";
    }

    echo "<br> acessado ás ";
    date_default_timezone_set('America/manaus');
    $hora = date('H:i');
    echo $hora .  "\n";

    if ($hora >= '08:00' && $hora <= '12:00') {
        echo "Bom dia!";
    } elseif ($hora >= '12:00' && $hora <= '18:00') {
        echo "Boa tarde!";
    } else {
        echo "Boa noite!";
    }
?>
</body>
</html>