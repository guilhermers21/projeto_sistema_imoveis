<?php
include 'db_connection.php';  // Incluir o arquivo de conexão

// Verificar se o ID foi passado
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Verificar se a pessoa tem imóveis associados a ela
    $checkSql = "SELECT * FROM imoveis WHERE contribuinte_id = $id";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows > 0) {
        // Se a pessoa tem imóveis associados, não permitir exclusão
        echo "Erro: Não é possível excluir esta pessoa, pois ela possui imóveis cadastrados.";
    } else {
        // Se não tiver imóveis, proceder com a exclusão
        $sql = "DELETE FROM pessoas WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Pessoa excluída com sucesso!";
        } else {
            echo "Erro ao excluir a pessoa: " . $conn->error;
        }
    }
} else {
    echo "ID da pessoa não foi informado.";
}

$conn->close();


header("Refresh: 3; url=listar_pessoas.php");
?>
