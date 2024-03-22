<!DOCTYPE html>
<html lang="en">
<body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Principais Cotaçoes</title> 
    <link rel="stylesheet" href="./style/style.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

</body>
</html>
<body>

<?php include 'conversor.php'; ?>
<div class="image-container">
            <img src="./img/womanread.png" alt="Imagem de leitura">
</div>
<div class="content">

    <div class="container">
<h1>Principais cotações do dia</h1>
<div class="usd-moeda">
    <h3>USD ($)</h3>
    <p><span></span>BRL R$1,00 equivale a <span>USD ($)</span><?php echo number_format($usdToBrlRate, 2, ',', '.'); ?></p>
    <a href="converter.php" target="_blank">
        <button class="btn-md">Fazer conversão</button>
    </a>
</div>

<div class="txt-moeda">
    <div class="eur-moeda">
        <h3>EUR (€)</h3>
        <p><span></span>BRL R$1,00 equivale a <span>EUR (€)</span><?php echo number_format($eurToBrlRate, 2, ',', '.'); ?></p>
    </div>
    <a href="converter.php" target="_blank">
        <button class="btn-md">Fazer conversão</button>
    </a>
</div>

<div class="gbp-moeda">
    <h3>GBP (£)</h3>
    <p><span></span>BRL R$1,00 equivale a <span>GBP (£)</span><?php echo number_format($gbpToBrlRate, 2, ',', '.'); ?></p>
    <a href="converter.php" target="_blank">
        <button class="btn-md">Fazer conversão</button>
    </a>
</div>

<div class="jpy-moeda">
    <h3>JPY (¥)</h3>
    <p><span></span>BRL R$1,00 equivale a <span>JPY (¥)</span><?php echo number_format($jpyToBrlRate, 2, ',', '.'); ?></p>
    <a href="converter.php" target="_blank">
        <button class="btn-md">Fazer conversão</button>
    </a>
    <h1>Criação e Desenvolvimento: Letícia Eltermann</h1>
</div>
</body>
</html>
