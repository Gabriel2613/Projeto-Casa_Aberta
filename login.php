<?php
session_start();

// Arquivo de usuários
$arquivo = "users.json";

// Se não existir ainda, cria vazio
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}
$usuarios = json_decode(file_get_contents($arquivo), true);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if (isset($usuarios[$email]) && password_verify($senha, $usuarios[$email])) {
        $_SESSION["usuario"] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION["erro"] = "E-mail ou senha inválidos!";
        header("Location: index.php");
        exit;
    }
}
