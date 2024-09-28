<?php
include 'db_connection.php';  // Incluir o arquivo de conexão

$sql = "SELECT imoveis.id, imoveis.logradouro, imoveis.numero, imoveis.bairro, imoveis.complemento, pessoas.nome AS proprietario 
        FROM imoveis 
        JOIN pessoas ON imoveis.contribuinte_id = pessoas.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Imóveis Cadastrados</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Logradouro</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Complemento</th>
                <th>Proprietário</th>
                <th>Ações</th>
            </tr>";
    // Exibir os resultados
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['logradouro']."</td>
                <td>".$row['numero']."</td>
                <td>".$row['bairro']."</td>
                <td>".$row['complemento']."</td>
                <td>".$row['proprietario']."</td>
                <td>
                    <a href='excluir_imovel.php?id=".$row['id']."'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum imóvel cadastrado.";
}

$conn->close();
?>
