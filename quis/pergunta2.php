<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['resposta1'] = $_POST['resposta'];
    header('Location: pergunta3.php');
    exit;
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz - Pergunta 2</title>
</head>
<body>
    <h1>Quiz - Pergunta 2</h1>
    <form action="pergunta2.php" method="POST">
        <p>Pergunta 2: Qual é a capital da França?</p>
        <input type="radio" name="resposta" value="a"> a) Paris<br>
        <input type="radio" name="resposta" value="b"> b) Londres<br>
        <input type="radio" name="resposta" value="c"> c) Roma<br>
        <button type="submit">Próxima Pergunta</button>
    </form>
</body>