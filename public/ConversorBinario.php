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
    <h1><?php echo "Conversor Binário";?></h1>
<?php
$post = $_POST;
//var_dump($post['decimal']);

if (isset($post['submit'])) {
    $decimal = $post['decimal'] / 2;
    if($decimal % 0){
        $binario = [];
    }else{
        $decimal = $decimal--;
    }
}else{
    echo "Nenhum valor foi inserido";
}
?>
