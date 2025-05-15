<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Cadastro</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>

<header>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="verificarCadastro.php">Listas Usuários</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="containerSection">
            <form action="verificarCadastro.php" method="post">
                <input type="email" placeholder="Informe seu email" name="email" id="email">
                <input type="submit" value="Buscar">
            </form>
        </section>

        <section>
            <?php
                //Verificar se o email é válido
                if(isset($_POST["email"])) {
                    //echo var_dump($_POST);

                    $email = $_POST["email"];

                    include("../conexao/conexao.php");

                    $sql = "SELECT * FROM usuarios where email = ?";
                    $stmt = $conn->prepare($sql);

                    if($stmt) {
                        $stmt->bind_param("s" , $email);
                        $stmt->execute();
                        $resultado = $stmt->get_result();
                        echo var_dump($resultado);

                        if($resultado->num_rows > 0) { 
                            echo "Email existente";

                            $row = $resultado->fetch_assoc();
                            echo var_dump($row);
                            
                    } else { 
                        echo "Email inexistente";
                    }

                }
            }
            
            ?>
        </section>
    </main>
    
</body>
</html>