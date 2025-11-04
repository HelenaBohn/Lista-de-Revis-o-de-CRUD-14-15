<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = new mysqli("localhost", "root", "", "kanban");

    $id_usuario = $_POST["id_usuario"];
    $descricao = $_POST["descricao"];
    $setor = $_POST["setor"];
    $prioridade = $_POST["prioridade"];
    $data = date("Y-m-d");

    $sql = "INSERT INTO tarefa (id_usuario, descricao, setor, prioridade, data_cadastro)
            VALUES ('$id_usuario', '$descricao', '$setor', '$prioridade', '$data')";

    if ($con->query($sql) === TRUE) {
      echo "<p>Tarefa cadastrada com sucesso!</p>";
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
  <title>Cadastro de Tarefa</title>
</head>
<body>
  <h2>Cadastro de Tarefa</h2>
  <form method="POST" action="">
    Usuário (ID): <input type="number" name="id_usuario" required><br><br>
    Descrição: <input type="text" name="descricao" required><br><br>
    Setor: <input type="text" name="setor" required><br><br>
    Prioridade:
    <select name="prioridade" required>
      <option value="baixa">Baixa</option>
      <option value="media">Média</option>
      <option value="alta">Alta</option>
    </select><br><br>
    <input type="submit" value="Cadastrar Tarefa">
  </form>

  
