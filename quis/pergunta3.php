<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['resposta2'] = $_POST['resposta'];
    header('Location: pergunta4.php');
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
    <h1>Quiz - Pergunta 3</h1>
    <form action="pergunta3.php" method="POST">
        <p>Pergunta 3: Qual é o maior planeta do Sistema Solar?</p>
        <input type="radio" name="resposta" value="a"> a) Júpiter<br>
        <input type="radio" name="resposta" value="b"> b) Marte<br>
        <input type="radio" name="resposta" value="c"> c) Terra<br>
        <button type="submit">Próxima Pergunta</button>
    </form>
</body>
</html>