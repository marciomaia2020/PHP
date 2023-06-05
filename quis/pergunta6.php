<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['resposta5'] = $_POST['resposta'];
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
    <title>Quiz - Pergunta 6</title>
</head>
<body>
    <h1>Quiz - Pergunta 6</h1>
    <form action="pergunta3.php" method="POST">
        <p>Pergunta 6: Qual é a rede social famosa que começa com a letra "F"?</p>
        <input type="radio" name="resposta" value="a"> a) Facebook<br>
        <input type="radio" name="resposta" value="b"> b) Instagran<br>
        <input type="radio" name="resposta" value="c"> c) Twitter<br>
        <button type="submit">Próxima Pergunta</button>
    </form>
</body>
</html>