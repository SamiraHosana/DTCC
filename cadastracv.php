<!DOCTYPE html>
<html>
<title>Cadastrando CV</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body bgcolor="#E0ECF8">
<div class="w3-bar" style="background-color:#000040; width:100%; height:1%"></div>
<div class="w3-bar-item"style="background-color:#000040"><img src="logo.png" width="10%" height="10%" style="margin-left:49%"></img></div>
<div class="w3-card-2 w3-white w3-border-radius:10px" style="width: 50%; weight:50%; margin-left:25%; margin-bottom:25%; margin-top:5%">
  <div class="w3-container w3-center w3-border-radius:10px" style="background-color:#000040">
    <h2><font color="white">Dados Pessoais</font></h2>
  </div>
  <form class="w3-container w3-border-radius:10px" action="//">
    <p> <label class="w3-text"><b>Nome Completo:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="nomecompleto" type="text"></p>
    <p>      
    <label class="w3-text"><b>CPF:</b></label>
    <input class="w3-input w3-round w3-border w3-white" maxlength="11" name="cpf" type="text" placeholder="Digite seu CPF excluindo pontos e traços"></p>
     <p>      
    <label class="w3-text"><b>Data de Nascimento:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="nascimento" type="date" id="date"></p>
	<p> <label class="w3-text"><b>Endereço:</b></label>
	<input class="w3-input w3-round w3-border w3-white" name="endereco" type="text"></p>
	<p>      
    <label class="w3-text"><b>Telefone:</b></label>
    <input type="tel" maxlength="11" name="phone"></p>
	<div class="w3-container w3-center w3-border-radius:10px" style="background-color:#000040">
	
    <h2><font color="white">Experiência Profissional</font></h2>
	</div>
	 <label class="w3-text"><b>Qual sua situação atual?</b></label>
	 <input class="w3-radio" type="radio" name="tipo" value="desempregado" checked>Desempregado
	 <input class="w3-radio" type="radio" name="tipo" value="trabalhando">Estou trabalhando
	 <input class="w3-radio" type="radio" name="tipo" value="nuncatrabalhei">Nunca trabalhei<p>
	 
	 
	 
   <label class="w3-text"><b>Nome da Empresa:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="nomeempresa" type="text">
    <p>      
   <label class="w3-text"><b>Cargo:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="cargo" type="text"></p>
    <p>      
   <label class="w3-text"><b>Data de Contrato:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="datacontrato" type="date"></p>
    <p>      
   <label class="w3-text"><b>Data de Saída:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="datasaida" type="date"></p>
    <p>      
 <div class="w3-container w3-center w3-border-radius:10px" style="background-color:#000040">
    
	<h2><font color="white">Formação Acadêmica</font></h2>
	</div>
	<p><label class="w3-text"><b>Nível de Escolaridade</b></label></p>
	<select name="nivelescolaridade">
	<option value="nuncaestudei">Nunca estudei</option>
<option value="fundamentalcompleto">Ensino Fundamental Completo</option>
<option value="fundamentalincompleto">Ensino Fundamental Incompleto</option>
<option value="mediocompleto">Ensino Médio Completo</option>
<option value="medioincompleto">Ensino Médio Incompleto</option>
<option value="ensinosuperior">Ensino Superior</option>
<option value="cursotecnico">Curso Técnico</option>
</select><br>
<label class="w3-text"><b>Nome do Curso:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="nomecurso" type="text"></p>
 <label class="w3-text"><b>Nome da Instituição de Ensino:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="nomeescola" type="text"></p>
	 <label class="w3-text"><b>Data de Conclusão:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="dataconclusao" type="date"></p>
	<div class="w3-container w3-center w3-border-radius:10px" style="background-color:#000040">
	
    <h2><font color="white">Informações Adicionais</font></h2>
	</div>
	<label class="w3-text"><b>Qual sua área de atuação:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="areadeatuacao" type="text"></p>
	<label class="w3-text"><b>Qual o cargo você deseja ocupar na empresa:</b></label>
    <input class="w3-input w3-round w3-border w3-white" name="cargodesejado" type="text"></p>
	<label class="w3-text"><b>Qual período você prefere trabalhar:</b></label><br>
	<input type="checkbox" name="periodo" value="Manhã">Manhã<br>
	<input type="checkbox" name="periodo" value="Tarde">Tarde<br>
	<input type="checkbox" name="periodo" value="Noite">Noite<br>
	<label class="w3-text"><b>Faça uma descrição de suas habilidades:</b></label>
    <textarea rows="4" cols="60""w3-input w3-round w3-border w3-white" name="habilidades" type="text">
	</textarea></p>
    <button class="w3-btn w3-indigo" name="registrar" style="margin-right:15%">Registrar</button>
    <button class="w3-btn w3-red" name="cancelar" style="margin-left:40%">Cancelar</button></p>
	
  </form>
</div>

</body>
</html>