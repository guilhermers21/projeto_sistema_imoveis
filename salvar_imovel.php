<?php
include 'db_connection.php';  // Incluir o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $logradouro = $conn->real_escape_string($_POST['logradouro']);
    $numero = $conn->real_escape_string($_POST['numero']);
    $bairro = $conn->real_escape_string($_POST['bairro']);
    $complemento = $conn->real_escape_string($_POST['complemento']);
    $contribuinte_id = $_POST['contribuinte_id'];

    // Prepara o SQL para inserção
    $sql = "INSERT INTO imoveis (logradouro, numero, bairro, complemento, contribuinte_id)
            VALUES ('$logradouro', '$numero', '$bairro', '$complemento', '$contribuinte_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Imóvel cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o imóvel: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
}
?>
