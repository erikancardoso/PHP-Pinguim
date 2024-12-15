<?php
declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/head.php' ?>
    <?php $config = include('inc/config.php'); ?>
    <?php include_once('inc/greeting.php') // inclui o arquivo de forma global apenas 1 vez?>
    <title>Include</title>
</head>
<body>
    <h1> <?= 'Include'?> </h1>
    <div>
    <table>
        <thead>
            <tr>
                <th>Usuário</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <td> <?= $config['username'] ?></td>
            <td> <?= $config['password'] ?></td>
        </tbody>
    </table>
    </div>

    <div style="margin-top: 50px">
        <h2>Olá, <?= $nome ?></h2>
    </div>

</div>
</body>
</html>