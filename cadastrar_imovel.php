<?php
include 'db_connection.php';

// Busca as pessoas cadastradas para preencher o campo de contribuinte
$result = $conn->query("SELECT id, nome FROM pessoas");
?>

<form action="salvar_imovel.php" method="POST">
  Logradouro: <input type="text" name="logradouro" required><br>
  Número: <input type="text" name="numero" required><br>
  Bairro: <input type="text" name="bairro" required><br>
  Complemento: <input type="text" name="complemento"><br>
  Contribuinte:
  <select name="contribuinte_id" required>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<option value='".$row['id']."'>".$row['nome']."</option>";
    }
    ?>
  </select><br>
  <input type="submit" value="Cadastrar Imóvel">
</form>
