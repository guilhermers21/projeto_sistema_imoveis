<?php
include 'db_connection.php';  

$username = 'admin';  // Nome de usuário
$password = password_hash('senha123', PASSWORD_DEFAULT);  // Criptografa a senha

$sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário: " . $conn->error;
}

$conn->close();
?>
