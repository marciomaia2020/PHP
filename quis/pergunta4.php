<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['resposta3'] = $_POST['resposta'];
    header('Location: pergunta5.php');
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
    <h1>Quiz - Pergunta 4</h1>
    <form action="pergunta3.php" method="POST">
        <p>Pergunta 4: Qual é a maior cidade do brasil?</p>
        <input type="radio" name="resposta" value="a"> a) São Paulo<br>
        <input type="radio" name="resposta" value="b"> b) Campinas<br>
        <input type="radio" name="resposta" value="c"> c) Cosmópolis<br>
        <button type="submit">Próxima Pergunta</button>
    </form>
</body>
</html>