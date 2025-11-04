
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = new mysqli("localhost", "root", "", "kanban");

    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "INSERT INTO usuario (nome, email) VALUES ('$nome', '$email')";
    if ($con->query($sql) === TRUE) {
      echo "<p>Cadastro concluído com sucesso!</p>";
    } else {
      echo "Erro: " . $con->error;
    }

    $con->close();
  }
  ?>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Usuário</title>
</head>
<body>
  <h2>Cadastro de Usuário</h2>
  <form method="POST" action="">
    Nome: <input type="text" name="nome" required><br><br>
    E-mail: <input type="email" name="email" required><br><br>
    <input type="submit" value="Cadastrar">
  </form>


