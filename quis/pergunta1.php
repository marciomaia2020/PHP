<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nome'] = $_POST['nome'];
    header('Location: pergunta2.php');
    exit;
} else {
    header('Location: index.php');
    exit;
}