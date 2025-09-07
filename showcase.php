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
    <title>Mostruário - VK comércio de jóias ltda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>VK comércio de jóias ltda</h1>
            <p>Mostruário de Peças</p>
        </div>
        <nav>
            <ul>
                <li><a href="dashboard.php">Estoque</a></li>
                <li><a href="#">Cadastrar Produto</a></li>
                <li><a href="showcase.php" class="active">Mostruário de Peças</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <section class="showcase-section">
        <div class="showcase-container">
            <h2>Conheça Nossas Peças</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="imagens/colar-perola.jpg" alt="Colar Pérola Clássico">
                    <h3>Colar Pérola Clássico</h3>
                    <p>Elegância atemporal com pérolas naturais.</p>
                </div>
                <div class="product-card">
                    <img src="imagens/brinco-cristal.jpg" alt="Brinco Cristal Luxo">
                    <h3>Brinco Cristal Luxo</h3>
                    <p>Detalhes sofisticados com cristais brilhantes.</p>
                </div>
                <div class="product-card">
                    <img src="imagens/pulseira-rose.jpg" alt="Pulseira Ouro Rosé">
                    <h3>Pulseira Ouro Rosé</h3>
                    <p>Design delicado banhado a ouro rosé.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Joias & Glamour - Mostruário de Peças</p>
    </footer>
</body>
</html>
