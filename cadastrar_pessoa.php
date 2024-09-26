<form action="salvar_pessoa.php" method="POST">
  Nome: <input type="text" name="nome" required><br>
  Data de Nascimento: <input type="date" name="data_nascimento" required><br>
  CPF: <input type="text" name="cpf" required><br>
  Sexo: 
  <select name="sexo" required>
    <option value="M">Masculino</option>
    <option value="F">Feminino</option>
  </select><br>
  Telefone: <input type="text" name="telefone"><br>
  E-mail: <input type="email" name="email"><br>
  <input type="submit" value="Cadastrar">
</form>
