<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    // Prepara o SQL de inserção
    $sql = "INSERT INTO pessoas (nome, data_nascimento, cpf, sexo, telefone, email)
            VALUES ('$nome', '$data_nascimento', '$cpf', '$sexo', '$telefone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Pessoa cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
?>
