<!DOCTYPE html>
<html>
<title>Home Bauru Jobs</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<div class="w3-bar" style="background-color:#000040">
<div class="w3-bar-item w3-text-white" style="background-color:#000040; margin-left:2%"><img src="logo.png" width="70%" height="40%"></img></div>
<div class="links">
 <a href="cadastro.php" class="w3-bar-item w3-text-white w3-hover-text-blue" style="margin-top:40px;margin-left:20%">Cadastrar-se</a>
 <a href="" class="w3-bar-item w3-text-white w3-hover-text-blue " style="margin-top:40px">Vagas</a>
 <a href="avaliaempresa.php" class="w3-bar-item w3-text-white w3-hover-text-blue" style="margin-top:40px">Avalie sua empresa!</a>
</div>
<?php include "header.php"; ?>
<div id="id01" class="w3-modal">
<div class="w3-modal-content w3-card-4 w3-animate-opacity" style= "max-width:600px">

<div class="w3-center"><br>
</div>
<form class="w3-container" action="login.php" method="POST"> 
  <div class="login" style= "background-color:#000040" id="login">
<h2><font color="white">Login Bauru Jobs</font></h2>
</div>
<div class="w3-section w3-white">

<b>Nome</b>
<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Nome de usuário" name="login" required>
<div class="w3-section w3-white"><b> Senha</b>
<input class="w3-input w3- border" type="password" name="senha" placeholder="Senha" required>
<button class="w3-button w3-teal" style="border-radius: 10px; margin-top: 2px" type="submit" name="entrar" >OK</button>
<button class="w3-button w3-red" style="border-radius: 10px; margin-top: 2px; margin-left: 60%" type="submit" onclick="document.getElementById('id01').style.display='none'">Cancelar</button>
<a href "" style ="margin-left:20%; margin-top:5%" class="w3-text-black w3-hover-text-green "> Esqueci a senha</a>
</div>
</div>
</form>
</div>
</div>
<?php
include "direcionaTipo.php";?>


	  <form class="pesquisa" action="/action_page.php" style="margin-left:50%; margin-top:40px;max-width:300px;float:left">
  <input type="text" placeholder="Pesquisar" name="pesquisa">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
  </div>
<div class="w3-card" style="width:20%; height:40%; margin-left:10px;"><h3>Compartilhe</h3>
<style>

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
  padding: 20px;
  font-size: 30px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 15px 2px;
  border-radius: 50%;
}
</style>
<a href="#" class="fa fa-facebook"></a>
 <!-- <button style='font-size:24px'"w3-button"><i class='fab fa-facebook-square'></i></button>!-->
</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
  function w3_close() {
  document.getElementById("id01").style.display = "none";
}
</script>
  
</body>
</html> 