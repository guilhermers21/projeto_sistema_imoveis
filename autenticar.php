<?php
session_start();  // Iniciar a sessão
include 'db_connection.php';  // Incluir o arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consultar o usuário no banco de dados
    $sql = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar se a senha está correta
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;  // Iniciar sessão
            $_SESSION['username'] = $username;  // Armazenar o nome de usuário
            header("Location: listar_pessoas.php");  // Redirecionar para a página principal
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
}

$conn->close();
?>
