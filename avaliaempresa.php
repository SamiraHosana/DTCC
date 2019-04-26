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
    <h2><font color="white">Avaliação de empresas</font></h2>
  </div>
  <form class="w3-container w3-border-radius:10px" action="//">
    <p> <label class="w3-text"><b>Nome da empresa:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="nomeempresa" type="text"></p>
    <p>      
    <label class="w3-text"><b>Localidade:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="localidade" type="text" ></p>
     <p>     
	<label class="w3-text"><b>Data de Contratação:</b></label>
	 <input class="w3-input w3-round w3-border w3-white" name="datacontrato" type="date"></p>
	<label class="w3-text"><b>Data de Saída:</b></label>
	 <input class="w3-input w3-round w3-border w3-white" name="datasaida" type="date"></p>
	 
    <label class="w3-text"><b>Salário:</b></label>
	<input class="w3-input w3-round w3-border w3-white" name="salario" type="text"></p>
    	   
	<p> <label class="w3-text"><b>Funções exercidas:</b></label>
	<input class="w3-input w3-round w3-border w3-white" name="funçõesexercidas" type="text"></p>
	<p>      
    <label class="w3-text"><b>Prós:</b></label>
  <input class="w3-input w3-round w3-border w3-white" name="pros" type="text"></p>
	 <p><label class="w3-text"><b>Contras:</b></label>
	 <input class="w3-input w3-round w3-border w3-white" name="contras" type="text"></p>
	 <p><label class="w3-text"><b>De zero a dez, qual nota você daria a esta empresa?</b></label>
	<select name="nota">
	<option value="nota">0</option>
	<option value="nota">1</option>
	<option value="nota">2</option>
	<option value="nota">3</option>
	<option value="nota">4</option>
	<option value="nota">5</option>
	<option value="nota">6</option>
	<option value="nota">7</option>
	<option value="nota">8</option>
	<option value="nota">9</option>
	<option value="nota">10</option>
	</select><p>
	 <label class="w3-text"><b>Você recomenda esta empresa?</b></label>
	 <input class="w3-radio" type="radio" name="recomendação" value="sim" >Sim
	 <input class="w3-radio" type="radio" name="recomendação" value="não" >Não<p>
	 <label class="w3-text"><b>O que você acha que pode melhorar?</b></label>
	 <input class="w3-input w3-round w3-border w3-white" name="dica" type="text"></p>
	<button class="w3-btn w3-indigo" name="registrar" style="margin-right:15%">Registrar</button>
    <button class="w3-btn w3-red" name="cancelar" style="margin-left:40%">Cancelar</button></p>
	
  </form>
</div>

</body>
</html>