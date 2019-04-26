<?php 
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $tipo = $_POST['tipo'];
  $id = $_POST['id'];
  
  $connect = mysql_connect('localhost','root','');
  $db = mysql_select_db('tcc');
    
             
      $verifica = mysql_query("SELECT * FROM usuarios WHERE nome = '$login',senha = '$senha',tipo='$tipo' and id='$id'") or die("erro ao selecionar");
          session_start();
		  $_SESSION["username"] = $login;
		  $_SESSION["tipo"] = $tipo;
		  $_SESSION["id"] = $id;
		  
		  if($tipo=='a'){
			  header("Location:empresa.php");
		  }
		  else{
          header("Location:candidato.php");
		  }
        
    
?>