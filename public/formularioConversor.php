<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="style.css">
    <title>Formulário Conversor</title>
</head>

<body>
    <main>
        <form action="ConversorMoedas.php" method="post">
            <label for="nome">Sigla da Moeda:</label>
            <input type="text" id="moedaOrigem" name="moedaOrigem">
            <br>
            <label for="moeda">Valor da Contação</label>
            <input type="number" id="moeda1" name="moeda1" step="0.010" required>
            <br>
            <label for="moeda">Valor Recebido</label>
            <input type="number" id="moeda2" name="moeda2" step="0.010" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>

</html>