<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="style.css">
    <title>Formulário Binário</title>
</head>

<body>
    <main>
        <form action="ConversorBinario.php" method="post">
            <label for="decimal">Digite o Decimal</label>
            <input type="number" id="decimal" name="decimal" step="0.010" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>