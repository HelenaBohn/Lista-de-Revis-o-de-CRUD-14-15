<!DOCTYPE html>
<html>
<head>
  <title>Gerenciar Tarefas</title>
</head>
<body>
  <h2>Quadro Kanban</h2>

  <?php
  $con = new mysqli("localhost", "root", "", "kanban");

  $result = $con->query("SELECT * FROM tarefa");

  echo "<table border='1' width='100%'>
        <tr><th>A Fazer</th><th>Fazendo</th><th>Pronto</th></tr>
        <tr>";

  $colunas = ['a fazer', 'fazendo', 'pronto'];
  foreach ($colunas as $status) {
    echo "<td valign='top'>";
    $t = $con->query("SELECT * FROM tarefa WHERE status='$status'");
    while ($row = $t->fetch_assoc()) {
      echo "<p><b>{$row['descricao']}</b> ({$row['prioridade']})<br>
            <small>{$row['setor']}</small></p><hr>";
    }
    echo "</td>";
  }

  echo "</tr></table>";

  $con->close();
  ?>
</body>
</html>
