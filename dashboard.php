<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - VK comércio de jóias ltda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>VK comércio de jóias ltda</h1>
            <p>Estoque de Produtos</p>
        </div>
        <nav>
            <ul>
                <li><a href="dashboard.php">Estoque</a></li>
                <li><a href="#">Cadastrar Produto</a></li>
                <li><a href="showcase.php">Mostruário de Peças</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <section class="estoque-section">
        <div class="estoque-container">
            <h2>Produtos em Estoque</h2>
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Categoria</th>
                        <th>Quantidade</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Colar Pérola Clássico</td>
                        <td>Colares</td>
                        <td>12</td>
                        <td><span class="status ok">Disponível</span></td>
                    </tr>
                    <tr>
                        <td>Brinco Cristal Luxo</td>
                        <td>Brincos</td>
                        <td>4</td>
                        <td><span class="status low">Baixo estoque</span></td>
                    </tr>
                    <tr>
                        <td>Pulseira Ouro Rosé</td>
                        <td>Pulseiras</td>
                        <td>0</td>
                        <td><span class="status out">Esgotado</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Joias & Glamour - Sistema de Estoque</p>
    </footer>
</body>
</html>
