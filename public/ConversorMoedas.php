<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="style.css">
    <title>Sistema Conversor</title>
</head>

<body>
    <h1><?php echo "Sistema Conversor de Moedas";?></h1>
    <?php
    $post =$_POST;
    //var_dump ($post);
    $moedaOrigem = $post['moedaOrigem'];
   
    if($post ['moeda1'] && $post['moeda2'] != null){
        $total = $post['moeda2'] * $post['moeda1'];
     ?>

        <main> <?php echo "O Valor ". $post['moeda2'] . ' '. $moedaOrigem . " convertido para Real é: R$ " . $total; ?></main>

    <?php
    }else{
        echo "Preencha todos campos";
    }
    ?>


