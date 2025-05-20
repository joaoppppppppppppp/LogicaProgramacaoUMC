<?php 

    if(isset($_POST['id'])){
        include("../conexao/conexao.php");

        $id = $_POST [`id`];

        $sql = "DELETE FROM usuarios WHERE ID = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $id);
            $stmt->execute();

            header("Location: verificarCadastro.php");
            $stmt->close();

        } else { 
            echo "<div class='mensagem erro'>Erro Consulta </div>";
        }
        
        $conn->close();
    }


?>