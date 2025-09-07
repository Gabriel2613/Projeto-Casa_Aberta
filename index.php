<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Estoque de Joias</title>
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
            <h2>Login de Acesso</h2>
            <form action="login.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <button type="submit">Entrar</button>
            </form>

<p>Ainda não tem conta? <a href='register.php'>Cadastre-se</a></p>

            <?php if (isset($_SESSION["erro"])): ?>
                <p style="color:red; margin-top:15px;">
                    <?= $_SESSION["erro"]; unset($_SESSION["erro"]); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 VK comércio de jóias ltda - Controle de Estoque</p>
    </footer>
</body>
</html>
