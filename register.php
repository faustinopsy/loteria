<?php
 include('data/appml.php');						//Seleciona banco de dados
  if (isset($_POST) &&(!empty($_POST))){
  $login=$_POST['login'];	//Pegando dados passados por AJAX
  $senha=md5($_POST['senha']);
  
  //Consulta no banco de dados
  $sql="INSERT INTO usuario (login,senha) VALUES ( '".$login."','".$senha."')"; 
  if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
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
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
button {
  background-color: #f44336;
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
  background-color: #4CAF50;
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
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
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
.refresh {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
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
     <label ><b>CADASTRAR</b></label>
     <img src="img/super.png" style="width: 15%;" >
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="email"  id="login" placeholder="Email" name="login" required>

      <label for="psw"><b>Senha</b></label>
      <input type="password"  placeholder="Senha" name="senha" class="form-control" id="senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onblur="makeCode()" required >
	<div id="message">
  <h3>Senha:</h3>
  <p id="letter" class="invalid">uma <b>Letra minuscula</b></p>
  <p id="capital" class="invalid">uma <b>Letra MAIUSCULA</b></p>
  <p id="number" class="invalid">um <b>Numero</b></p>
  <p id="length" class="invalid">e <b>8 caracteres</b></p>
</div>
<div id="patternContainer" class="pattern-holder responsive" style="width: 100px;" ></div>
      <span id="botao"></span>
     <span type="button"class="refresh" id="refresh"  onclick="myrefresh()"><i class="fa fa-refresh" aria-hidden="true"></i></span> 
      
      
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  class="cancelbtn"><a href="index.php">Ir para Login</a></button>
     
    </div>
  </form>
</div>



                           
				
<script>
var myInput = document.getElementById("senha");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

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
    
       document.getElementById('botao').innerHTML="<button  type='submit'>Cadastrar</button>";
       $("#patternContainer").remove();
        $("#refresh").remove();
       
    },function(){
    document.getElementById("botao").innerHTML = 'Errado';
		
    });
    
  }
  </script>
