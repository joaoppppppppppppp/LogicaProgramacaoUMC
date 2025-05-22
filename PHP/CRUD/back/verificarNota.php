<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Nota</title>
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
            <form action="verificarNota.php" method="post">
                <select name="curso" id="curso" class="estilo">
                    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                    <option value="engenharia_software">Engenharia de Software</option>
                    <option value="sistemas_informacao">Sistema da Informação</option>
                    <option value="ciencias_computacao">Ciências da Computação</option>
                </select>
                <input type="submit" value="Buscar">
            </form>
        </section>

        <section>
            <?php 

                if (isset($_POST["curso"])) {
                    include("../conexao/conexao.php");
                    $curso = $_POST["curso"];

                    $sql = "SELECT * FROM usuarios WHERE curso = ?";

                    $stmt = $conn->prepare($sql);

                    if ($stmt) {
                        $stmt->bind_param("s", $curso);
                        $stmt->execute();
                        $resultado = $stmt->get_result();
                        
                        if ($resultado->num_rows > 0) {
                            echo "
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Sobrenome</th>
                                            <th>Nota ATividade</th>
                                            <th>Nota Prova</th>
                                            <th>Nota Final</th>
                                        </tr>
                                    </thead>
                                    <tbody> ";
                                        while($row = $resultado->fetch_assoc()) {
                                        echo "
                                            <tr>
                                                <td>{$row['id']}</td>
                                                <td>{$row['nome']}</td>
                                                <td>{$row['sobrenome']}</td>
                                                <td>{$row['nota_atividade']}</td>
                                                <td>{$row['nota_prova']}</td>
                                                <td>{$row['nota_final']}</td>
                                            </tr> ";
                                        }
                            echo "
                                    </tbody>
                                </table>

                            ";
                        } else {
                            echo "<div class= 'mensagem erro'>Curso $curso não possui registros</div>";
                        }

                        $stmt->close();
                    }

                    $conn->close();
                }

            ?>
        </section>
    </main>
    
</body>
</html>