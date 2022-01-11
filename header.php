<?php


	$id_user = $_SESSION['nomeUsuario'];

?>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3pro.css">
<script src="js/w3.js"></script>
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lotofácil - Fácil</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; }

input[type=text], input[type=password] {
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
</style>
</head>
<body >


<!-- The Modal onload="document.getElementById('id01').style.display='block'"-->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal"></span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
     <button class="w3-button  w3-xlarge " ><i class="fa fa-user fa-3x" aria-hidden="true"></i></button>
    </div>

    <div class="container">
      <label for="uname"><b>Login</b></label>
      <input type="text" placeholder="Login" name="uname" required>

      <label for="psw"><b>Senha</b></label>
      <input type="password" placeholder="Senha" name="psw" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Lembrar
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  class="cancelbtn">Cancelar</button>
      <span class="psw">Esqueci <a href="#">Senha?</a></span>
    </div>
  </form>
</div>
<header class="w3-container w3-card w3-theme" style="position: fixed; left: 0; top: 0; width: 100%; background-color: blue; color: white; text-align: center;">
 <a href="admin.php"><img src="img/super.png" style="width: 20px;" ></a>
<?php echo 	"  ".$id_user; ?>
    <div class="w3-navbar w3-opacity">

<a href="g11.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-table" aria-hidden="true"></i>Fechamento 11 </a>
  <a href="g12.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-table" aria-hidden="true"></i>Fechamento 12</a>
   <a href="atualiza.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Novo </a>
    <a href="jogos.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-table" aria-hidden="true"></i> Conferir Jogos</a>
   <a href="logout.php" class="w3-bar-item w3-button" onclick="w3_close()">  <i class="fa fa-sign-out" aria-hidden="true"></i> </a>
    
</div>
</header><br><br><br><br>
<footer style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: Indigo; color: white; text-align: center;" class="w3-container w3-card w3-theme">
  <div class="w3-navbar w3-opacity">

<a href="g11.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-table" aria-hidden="true"></i>11 </a>
  <a href="g12.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-table" aria-hidden="true"></i> 12</a>
   <a href="atualiza.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
    <a href="jogos.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-table" aria-hidden="true"></i> M</a>
   <a href="logout.php" class="w3-bar-item w3-button" onclick="w3_close()">  <i class="fa fa-sign-out" aria-hidden="true"></i> </a>
    
</div>
<script>
/* Get the element you want displayed in fullscreen */ 
var elem = document.documentElement;

/* Function to open fullscreen mode */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}

/* Function to close fullscreen mode */
function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  }
}

// Events
var output = document.getElementById("myP");
document.addEventListener("fullscreenchange", function() {
  output.innerHTML = "fullscreenchange event fired!";
});
document.addEventListener("mozfullscreenchange", function() {
  output.innerHTML = "mozfullscreenchange event fired!";
});
document.addEventListener("webkitfullscreenchange", function() {
  output.innerHTML = "webkitfullscreenchange event fired!";
});
document.addEventListener("msfullscreenchange", function() {
  output.innerHTML = "msfullscreenchange event fired!";
});
</script>
</footer>
<script type="text/javascript">
var isNS = (navigator.appName == "Netscape") ? 1 : 0; var EnableRightClick = 0; if(isNS) document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP); function mischandler(){ if(EnableRightClick==1){ return true; } else {return false; } } function mousehandler(e){ if(EnableRightClick==1){ return true; } var myevent = (isNS) ? e : event; var eventbutton = (isNS) ? myevent.which : myevent.button; if((eventbutton==2)||(eventbutton==3)) return false; } function keyhandler(e) { var myevent = (isNS) ? e : window.event; if (myevent.keyCode==96) EnableRightClick = 1; return; } document.oncontextmenu = mischandler; document.onkeypress = keyhandler; document.onmousedown = mousehandler; document.onmouseup = mousehandler;
</script>