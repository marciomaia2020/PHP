<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['resposta4'] = $_POST['resposta'];
    header('Location: pergunta6.php');
    exit;
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz - Pergunta 3</title>
</head>
<body>
    <h1>Quiz - Pergunta 5</h1>
    <form action="pergunta3.php" method="POST">
        <p>Pergunta 5: Qual é a maior rede de TV Brasileira?</p>
        <input type="radio" name="resposta" value="a"> a) Rede Globo<br>
        <input type="radio" name="resposta" value="b"> b) Rede Record<br>
        <input type="radio" name="resposta" value="c"> c) Rede Bandeirantes<br>
        <button type="submit">Próxima Pergunta</button>
    </form>
</body>
</html>