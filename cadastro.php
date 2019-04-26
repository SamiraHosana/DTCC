<!DOCTYPE html>
<html>
<title>Cadastro</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body bgcolor="#E0ECF8">
<div class="w3-bar" style="background-color:#000040; width:100%; height:1%"></div>
<div class="w3-bar-item"style="background-color:#000040"><img src="logo.png" width="10%" height="10%" style="margin-left:49%"></img></div>
<div class="w3-card-2 w3-white w3-border-radius:10px" style="width: 50%; weight:50%; margin-left:25%; margin-bottom:25%; margin-top:5%">
  <div class="w3-container w3-center w3-border-radius:10px" style="background-color:#000040">
    <h2><font color="white">Cadastro Bauru Jobs</font></h2>
  </div>
  <form method="POST" class="w3-container w3-border-radius:10px" action="cadastrauser.php">
    <p> 
	<div class="w3-section">
    <input class="w3-radio" type="radio" name="tipo" value="c" checked>Sou Candidato
	<input class="w3-radio" type="radio" name="tipo" value="a">Sou Anunciante
	</div>
	
    <label class="w3-text"><b>Nome de Usuário</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="nome" type="text"></p>
    <p>      
    <label class="w3-text"><b>Senha</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="senha" type="password"></p>
    <p>
    <button class="w3-btn w3-indigo" name="registrar" style="margin-right:15%">Registrar</button>
    <button class="w3-btn w3-red" name="cancelar" style="margin-left:40%">Cancelar</button></p>
	
	
  </form>
</div>

</body>
</html>