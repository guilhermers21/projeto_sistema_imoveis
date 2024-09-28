<?php
$host = 'localhost';
$user = 'root';  // usuário padrão do MySQL
$password = '';  // senha do MySQL (padrão é vazia no XAMPP)
$dbname = 'cadastro_imoveis';  // O bd

// Cria a conexão
$conn = new mysqli($host, $user, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
