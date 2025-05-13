<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="../estilos/styleCadastrar.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="">Início</a></li>
                <li><a href="">Cadastrar Usuário</a></li>
                <li><a href="">Listas Usuários</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="cadastro.php" method="post">
            <h2>Cadastro Aluno</h2>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" required>

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>

            <label for="curso">Selecione o curso: </label>
            <select name="curso" id="curso">
                <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                <option value="engenharia_software">Engenharia de Software</option>
                <option value="sistemas_informacao">Sistema da Informação</option>
                <option value="ciencias_computacao">Ciências da Computação</option>
            </select>

            <input type="submit" value="Cadastrar">
        </form>

        <?php

            if($_SERVER["REQUEST_METHOD"] == "POST") {

                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                try {
                    include("../conexao/conexao.php");

                $nome = $_POST["nome"];
                $sobrenome = $_POST["sobrenome"];
                $email = $_POST["email"];
                $curso = $_POST["curso"];

                $prefixo = "1124";
                $id = $prefixo . rand (100,999);


                $sql = "INSERT INTO usuarios (id, nome, sobrenome, email, curso) VALUES (?, ?, ?, ?, ?)";

                $stmt = $conn ->prepare($sql);

                $stmt->bind_param("sssss", $id, $nome, $sobrenome, $email, $curso) ;

                $stmt->execute() ;

                echo "<div class = 'mensagem sucesso'> Usuário cadastrado com sucesso</div>";

                $stmt->close();
                $conn->close();
                }

                catch (mysqli_sql_exception $e) {
                    echo "<div class = 'mensagem erro'> Erro ao cadastrar" . $e ->getMessage() ."</div>";

                }
            }


        ?>

    </main>




    

    
</body>
</html>