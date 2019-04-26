<?php 
$tipo = $_POST['tipo'];
$login = $_POST['nome'];
$login = $_POST['nome'];
$senha =$_POST['senha'];

/*exit($tipo);*/
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('tcc');
$query_select = "select nome from usuarios where nome = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['nome'];
mysql_query($inserir);

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.php';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
        die();
 
      } else {
			
        $query = "INSERT INTO usuarios (tipo,nome,senha) VALUES ('$tipo','$login','$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso! Faça login para validar.');window.location.href='novohome.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
        }
      }
    }
?>