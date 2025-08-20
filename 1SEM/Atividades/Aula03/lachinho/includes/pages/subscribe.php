<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/subscribe.css">    
</head>
<body>
    <nav>
        <div class="left-nav">
            <a class="navLink" href="index.php"><h1>Home</h1></a>
            <a class="navLink" href="subscribe.php"><h1>Cadastrar Produto</h1></a>
            <a class="navLink" href="visualize.php"><h1>Visualizar Produto</h1></a>
        </div>
    </nav>

    <form action="process.php" method="post">
        <h2>Cadastre seu Produto</h2>
        <div class="inputs">
            <div class="input">
                <label for="name">Nome do Produto</label>
                <input type="text" id="name" name="name">
            </div>

            <div class="input">
                <label for="info">Descrição do Produto</label>
                <input type="text" id="info" name="info">
            </div>

            <div class="input">
                <label for="price">Preço do Produto</label>
                <input type="text" id="price" name="price">
            </div>
        </div>
    </form>
    
</body>
</html>