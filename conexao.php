<?php

  $conexao = mysql_connect("localhost","root","");
  $banco = mysql_select_db("teste");
  $query = mysql_query("SELECT * from etec");

  echo "<table border=1><tr><td>COD</td><td>Curso</td><td>Vagas</td></tr>";
  while($linha = mysql_fetch_array($query)){
    echo "<tr><td>".$linha[0]."</td><td>".$linha[1]."</td><td>".$linha[2]."</td></tr>";
  }
  echo "</table>";

?>
