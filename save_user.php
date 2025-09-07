<?php
session_start();

// Arquivo que armazena os usuários
$arquivo = "users.json";

// Se não existir, cria
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$usuarios = json_decode(file_get_contents($arquivo), true);

// Dados do formulário
$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

if (!$email || !$senha) {
    $_SESSION["erro"] = "Preencha todos os campos!";
    header("Location: register.php");
    exit;
}

// Verifica se já existe
if (isset($usuarios[$email])) {
    $_SESSION["erro"] = "Este e-mail já está cadastrado!";
    header("Location: register.php");
    exit;
}

// Salva novo usuário (com hash)
$usuarios[$email] = password_hash($senha, PASSWORD_DEFAULT);
file_put_contents($arquivo, json_encode($usuarios));

$_SESSION["sucesso"] = "Cadastro realizado com sucesso! Faça login.";
header("Location: register.php");
exit;
