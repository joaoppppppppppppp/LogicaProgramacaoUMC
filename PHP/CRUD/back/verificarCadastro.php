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

                        
                        if($resultado->num_rows > 0) { 
                            $row = $resultado->fetch_assoc();
                            echo "<table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>Email</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{$row['ID']}</td>
                                    <td>{$row['NOME']}</td>
                                    <td>{$row['SOBRENOME']}</td>
                                    <td>{$row['EMAIL']}</td>
                                    <td>
                                        <form action='excluirCadastro.php' method='post'>
                                            <input type='hidden' name='id' value='{row['ID']}'>
                                            <input type='submit' id='btn-excluir' value='Excluir'>
                                        </form>
                                    </td>
                                </tbody>
                            </table>
                            ";
                    }else {
                        echo "<div class='mensagem erro'> E-mail $email não encontrado </div>";
                    }
                    $stmt->close();

                }
                    
                    $conn->close();
                    
            }
                
                
            else {
                    echo "<div class='mensagem erro'>Erro na Consulta</div>";
                }

            ?>
        </section>
    </main>
    
</body>
</html>