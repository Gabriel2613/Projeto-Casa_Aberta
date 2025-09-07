<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Estoque de Joias</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="logo">
        <h1>VK comércio de jóias ltda</h1>
        <p>Sistema de Estoque</p>
    </div>
</header>

<section class="login-section">
    <div class="login-container">
        <h2>Criar Conta</h2>
        <form action="save_user.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Cadastrar</button>
        </form>

        <p>Já tem uma conta? <a href="index.php">Faça login</a></p>

        <?php if (isset($_SESSION["erro"])): ?>
            <div class="error-message"><?= $_SESSION["erro"]; unset($_SESSION["erro"]); ?></div>
        <?php endif; ?>

        <?php if (isset($_SESSION["sucesso"])): ?>
            <div class="success-message"><?= $_SESSION["sucesso"]; unset($_SESSION["sucesso"]); ?></div>
        <?php endif; ?>
    </div>
</section>

<footer>
    <p>&copy; 2025 VK comércio de jóias ltda - Cadastro</p>
</footer>
</body>
</html>
