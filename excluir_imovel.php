<?php
include 'db_connection.php';  // Incluir o arquivo de conexão

// Verificar se o ID foi passado
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Deletar o imóvel com o ID fornecido
    $sql = "DELETE FROM imoveis WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Imóvel excluído com sucesso!";
    } else {
        echo "Erro ao excluir o imóvel: " . $conn->error;
    }
} else {
    echo "ID do imóvel não foi informado.";
}

$conn->close();

// Redirecionar de volta para a listagem de imóveis
header("Location: listar_imovel.php");
exit();
?>
