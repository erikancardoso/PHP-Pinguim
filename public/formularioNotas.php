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
<main>
    <form action="SistemaNotas.php" method="post">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome">
        <br>
        <label for="nota">Nota 1 Bimestre:</label>
        <input type="number" id="nota1" name="nota1">
        <br>
        <label for="nota">Nota 2 Bimestre:</label>
        <input type="number" id="nota2" name="nota2">
        <br>
        <label for="nota">Nota 3 Bimestre:</label>
        <input type="number" id="nota3" name="nota3">
        <br>
        <label for="nota">Nota 4 Bimestre:</label>
        <input type="number" id="nota4" name="nota4">
        <br>
        <input type="submit" value="Enviar">
    </form>
</main>
</body>
</html>