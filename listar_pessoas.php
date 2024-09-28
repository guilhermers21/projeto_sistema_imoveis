<?php
include 'db_connection.php';  // Incluir o arquivo de conexão

$sql = "SELECT * FROM pessoas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Pessoas Cadastradas</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Sexo</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>";
    // Exibir os resultados
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nome']."</td>
                <td>".$row['data_nascimento']."</td>
                <td>".$row['cpf']."</td>
                <td>".$row['sexo']."</td>
                <td>".$row['telefone']."</td>
                <td>".$row['email']."</td>
                <td>
                    <a href='excluir_pessoa.php?id=".$row['id']."'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhuma pessoa cadastrada.";
}

$conn->close();
?>
