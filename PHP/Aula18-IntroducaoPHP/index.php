<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Programa</title>
</head>
<body>
    
    <h1>
        <?php
            echo "Olá Mundo";
        ?>
    </h1>

    <?php
        echo "<p> Olá Mundo </p>";
    ?>

    <h2>Variaveis em PHP</h2>

    <p>
        <?php
            $nome = "Pedro";
            $email = "pedro@gmail.com";

            echo "Nome: $nome <br>";
            echo "Email: $email <br>";
        ?>
    </p>

    <h2>Constantes em PHP</h2>
    <p>
        <?php
            const faculdade = "UMC";
            const cidade = "Mogi das Cruzes";

            echo "Faculdade: " . faculdade . "<br>";
            echo "Cidade: " . cidade . "<br>";
        ?>
    </p>

    
</body>
</html>