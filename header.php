<!--<div class="w3-bar" style="background-color:#000040">
<div class="w3-bar-item w3-text-white" style="background-color:#000040; margin-left:2%"><img src="logo.png" width="70%" height="40%"></img></div>
<div class="links">
 <a href="cadastro.php" class="w3-bar-item w3-text-white w3-hover-text-blue" style="margin-top:40px;margin-left:20%">Cadastrar-se</a>
 <a href="" class="w3-bar-item w3-text-white w3-hover-text-blue " style="margin-top:40px">Vagas</a>
 <a href="avaliaempresa.php" class="w3-bar-item w3-text-white w3-hover-text-blue" style="margin-top:40px">Avalie sua empresa!</a>
</div>-->
<?php
 session_start();
 if(!isset($_SESSION["username"])){ ?>
<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green"style="margin-left:27%; margin-top:40px; border-radius:10px"> Login</button>
<?php } else { ?> <p style="color:#FFF"> Bem-vindo(a) <?php echo $_SESSION["username"]; ?></p><?php } ?>
<button onclick="document.getElementById('sair').style.display='block'" class="w3-button w3-red"style="margin-left:27%; margin-top:40px; border-radius:10px"> Sair</button>
