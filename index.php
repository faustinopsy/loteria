<?php

if(!isset($_SESSION)){
    	session_start();
	}

	$id_user = $_SESSION['nomeUsuario'];

	if(isset ($_SESSION['nomeUsuario'])) {
    	header('Location: atualiza.php');
	}
?>
<?php


 include('data/appml.php');						//Seleciona banco de dados
  if (isset($_POST) &&(!empty($_POST))){
  $login=$_POST['login'];	//Pegando dados passados por AJAX
  $senha=md5($_POST['senha']);
  
  //Consulta no banco de dados
  $sql="select * from usuario where login='".$login."' and senha='".$senha."'"; 
  $resultados = mysqli_query($conn,$sql)or die (mysqli_error());
  //$res=mysqli_fetch_array($resultados); //
  $row = $resultados -> fetch_array(MYSQLI_ASSOC);
	if (@mysqli_num_rows($resultados) == 0){
		//echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas
		echo "<h5>Não autorizado, senha ou email errados</h5>";
	}
	
	else{
	    	
		session_start();
	    //$_SESSION['usuarioID']=$row['id']; 		
		$_SESSION['nomeUsuario']=$login;
	 header('Location: g11.php');
		echo 1;	//Responde sucesso
				//Inicia seção
		//Abrindo seções
		
		exit;	
	}
  }
?>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3pro.css">
<script src="js/w3.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>	
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="plugin/patternLock.css" />
  <script src="plugin/jquery-1.8.0.min.js"></script>
  <script src="plugin/patternLock.js"></script>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; }

input[type=text],input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.5;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.refresh {
  width: auto;
  padding: 10px 18px;
  background-color: green;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}
.responsive {
  width: 100%;
  height: auto;
}
</style>
</head>
<script type="text/javascript">
var isNS = (navigator.appName == "Netscape") ? 1 : 0; var EnableRightClick = 0; if(isNS) document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP); function mischandler(){ if(EnableRightClick==1){ return true; } else {return false; } } function mousehandler(e){ if(EnableRightClick==1){ return true; } var myevent = (isNS) ? e : event; var eventbutton = (isNS) ? myevent.which : myevent.button; if((eventbutton==2)||(eventbutton==3)) return false; } function keyhandler(e) { var myevent = (isNS) ? e : window.event; if (myevent.keyCode==96) EnableRightClick = 1; return; } document.oncontextmenu = mischandler; document.onkeypress = keyhandler; document.onmousedown = mousehandler; document.onmouseup = mousehandler;
</script>

<body onload="myrefresh()" onselectstart="return false" oncontextmenu="return false">


<!-- The Modal onload="document.getElementById('id01').style.display='block'"-->
<div id="id01" >
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal"></span>

  <!-- Modal Content -->
  <form id="formlogin"  action="" method="post">
    <div class="imgcontainer">
      <img src="img/super.png" style="width: 15%;" >
      <span id="vindo">BEM VINDO</span
       <img src="img/super.png" style="width: 15%;" >
    </div>

    <div class="container">
      <label for="uname"><b>Login</b></label>
      <input type="email"  id="login" placeholder="Login" name="login" required>

      <label for="psw"><b>Senha</b></label>
      <input type="password" id="senha" placeholder="Senha" name="senha" required>
<div id="mens"></div>
 
  <div id="patternContainer" class="pattern-holder responsive" style="width: 50%;" > </div>
      <span id="botao"></span>
     <span type="button"class="refresh" id="refresh"  onclick="myrefresh()"><i class="fa fa-refresh" aria-hidden="true"></i></span> 
      
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  class="cancelbtn"><a href="register.php">Cadastrar</a></button>
      
    </div>
  </form>
</div>

  <script>
  function myrefresh(){
    var lock = new PatternLock("#patternContainer");


var numeros = [7415369, 1478963, 1475963, 321456987,123654789,1235789,321478965];

var code=numeros[Math.floor(Math.random() * numeros.length)];
if(code==7415369){
//alert("Padrão: M da esquerda para direita");
document.getElementById('botao').innerHTML = "Padrão: <b>M</b> da esquerda para direita"; 
}

if(code==1478963){
//alert("Padrão: U da esquerda para direita");
document.getElementById('botao').innerHTML = "Padrão: <b>U</b> da esquerda para direita";
}
if(code==1475963){
//alert("Padrão: W da esquerda para direita");
document.getElementById('botao').innerHTML = "Padrão: <b>W</b> da esquerda para direita";
}
if(code==321456987){
//alert("Padrão: W da esquerda para direita");
document.getElementById('botao').innerHTML = "Padrão: <b>5</b></b> da direita para esquerda";
}
if(code==123654789){
//alert("Padrão: W da esquerda para direita");
document.getElementById('botao').innerHTML = "Padrão: <b>2</b> da esquerda para direita";
}
if(code==1235789){
//alert("Padrão: W da esquerda para direita");
document.getElementById('botao').innerHTML = "Padrão: <b>Z</b> da esquerda para direita";
}
if(code==321478965){
//alert("Padrão: W da esquerda para direita");
document.getElementById('botao').innerHTML = "Padrão: <b>G</b> da direita para esquerda";
}
    // pass code to unlock from App Inventor to JavaScript, e.g. '12369'
    

    // check for correct code
    lock.checkForPattern(code,function(){
    
       document.getElementById('botao').innerHTML="<button  type='submit'>Login</button>";
       $("#patternContainer").remove();
        $("#refresh").remove();
       
    },function(){
    document.getElementById("botao").innerHTML = 'Errado';
		
    });
    
  }
  </script>
