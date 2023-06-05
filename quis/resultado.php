<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
    exit;
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz - Resultado</title>
</head>