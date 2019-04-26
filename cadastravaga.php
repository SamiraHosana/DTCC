<!DOCTYPE html!>
<html>
<title> Avalie sua empresa!</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body bgcolor="#E0ECF8">
<div class="w3-bar" style="background-color:#000040; width:100%; height:1%"></div>
<div class="w3-bar-item"style="background-color:#000040"><img src="logo.png" width="10%" height="10%" style="margin-left:49%"></img></div>
<div class="w3-card-2 w3-white w3-border-radius:10px" style="width: 50%; weight:50%; margin-left:25%; margin-bottom:25%; margin-top:5%">
  <div class="w3-container w3-center w3-border-radius:10px" style="background-color:#000040">
    <h2><font color="white">Cadastro de Vagas</font></h2>
  </div>
  <form class="w3-container w3-border-radius:10px" action="//">
    <p> <label class="w3-text"><b>Nome da empresa:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="nomeempresa" type="text"></p>
    <p>      
    <label class="w3-text"><b>Localidade:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="localidade" type="text" ></p>
     <p>      
    <label class="w3-text"><b>Logo:</b></label>
    	   
	<p> <label class="w3-text"><b>Nome da vaga:</b></label>
	<input class="w3-input w3-round w3-border w3-white" name="nomevaga" type="text"></p>
	<p>      
    <label class="w3-text"><b>Tipo:</b></label>
  <select name="tipovaga">
	<option value="Efetivo">Efetivo</option>
	<option value="Estágio">Estágio</option>
	<option value="Trainee">Trainee</option>
	<option value="Jovemaprendiz">Jovem aprendiz</option>
	</select><br>
	 <p><label class="w3-text"><b>Cargo:</b></label>
	 <input class="w3-input w3-round w3-border w3-white" name="cargo" type="text"></p>
	 <label class="w3-text"><b>Remuneração:</b></label>
	  <input type="text" name="dinheiro"></p>
	 <label class="w3-text"><b>Jornada de trabalho:</b></label>
	 <input class="w3-input w3-round w3-border w3-white" name="jornada" type="text"></p>
	 <label class="w3-text"><b>Experiência na área:</b></label>
	<input class="w3-radio" type="radio" name="experiencia" value="nao" checked>Não necessita de experiência
	<input class="w3-radio" type="radio" name="experiencia" value="sim" >Experiência comprovada na área<p>
	<label class="w3-text"><b>Início:</b></label>
	 <input class="w3-input w3-round w3-border w3-white" name="inicio" type="text"></p>
	 <label class="w3-text"><b>Faça uma descrição das atividades a serem desenvolvidas no exercício da função:</b></label>
	 <input class="w3-input w3-round w3-border w3-white" name="atividades" type="text"></p>
	<button class="w3-btn w3-indigo" name="registrar" style="margin-right:15%">Registrar</button>
    <button class="w3-btn w3-red" name="cancelar" a href="novohome.hmtl" style="margin-left:40%" >Cancelar</button></p>
	
  </form>
</div>

</body>
</html>