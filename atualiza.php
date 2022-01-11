<?php

if(!isset($_SESSION)){
    	session_start();
	}

	$id_user = $_SESSION['nomeUsuario'];

	if(!isset ($_SESSION['nomeUsuario'])) {
    	header('Location: index.php');
	}
?>

<?php


	
include('header.php');
include('data/appml.php');



if(isset($_POST['submit']))
{


$n1=$_POST['num1'];
$n2=$_POST['num2'];
$n3=$_POST['num3'];
$n4=$_POST['num4'];
$n5=$_POST['num5'];
$n6=$_POST['num6'];
$n7=$_POST['num7'];
$n8=$_POST['num8'];
$n9=$_POST['num9'];
$n10=$_POST['num10'];
$n11=$_POST['num11'];
$n12=$_POST['num12'];
$n13=$_POST['num13'];
$n14=$_POST['num14'];
$n15=$_POST['num15'];


    
$sql ="INSERT INTO jogo(n1,n2, n3, n4, n5, n6, n7, n8,n9,n10,n11,n12,n13,n14,n15,user) VALUES($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,'".$id_user."')";
//$conn->query($sql);

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  //header('Location: atualiza.php');
  ?><script language="javascript" type="text/javascript"> 
  location.href = "atualiza.php";

  </script>
  <?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}
?>
<!DOCTYPE html>
<html>
<title>Loteria</title>
<script src="js/jquery.min.js"></script>
<body >


<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#b1").val('1');
    $("#btn1").hide();
    adiciona();
     
  });
   $("#btn2").click(function(){
  $("#b1").val('2');
     $("#btn2").hide();
    adiciona();
  
  });
  $("#btn3").click(function(){
  $("#b1").val('3');
  $("#btn3").hide();
    adiciona();
    
  });
   $("#btn4").click(function(){
  $("#b1").val('4');
  $("#btn4").hide();
    adiciona();
     
  });
   $("#btn5").click(function(){
  $("#b1").val('5');
  $("#btn5").hide();
    adiciona();
    
  });
   $("#btn6").click(function(){
  $("#b1").val('6');
 $("#btn6").hide();
    adiciona();
    
  });
   $("#btn7").click(function(){
  $("#b1").val('7');
$("#btn7").hide();
    adiciona();
    
  });
   $("#btn8").click(function(){
  $("#b1").val('8');
 $("#btn8").hide();
     adiciona();
  });
   $("#btn9").click(function(){
  $("#b1").val('9');
  $("#btn9").hide();
    adiciona();
     
  });
   $("#btn10").click(function(){
  $("#b1").val('10');
  $("#btn10").hide();
    adiciona();
    
  });
    $("#btn11").click(function(){
  $("#b1").val('11');
  $("#btn11").hide();
    adiciona();
    
  });
   $("#btn12").click(function(){
  $("#b1").val('12');
  $("#btn12").hide();
    adiciona();
    
  });
  
   $("#btn13").click(function(){
  $("#b1").val('13');
 $("#btn13").hide();
    adiciona();
    
  });
   $("#btn14").click(function(){
  $("#b1").val('14');
  $("#btn14").hide();
    adiciona();
   });
   
   $("#btn15").click(function(){
  $("#b1").val('15');
  $("#btn15").hide();
    adiciona();
    
  });
   $("#btn16").click(function(){
  $("#b1").val('16');
  $("#btn16").hide();
    adiciona();
   
  });
   $("#btn17").click(function(){
  $("#b1").val('17');
  $("#btn17").hide();
    adiciona();
   
  });
   $("#btn18").click(function(){
  $("#b1").val('18');
  $("#btn18").hide();
    adiciona();
    
  });
   $("#btn19").click(function(){
  $("#b1").val('19');
  $("#btn19").hide();
    adiciona();
   
  });
   $("#btn20").click(function(){
  $("#b1").val('20');
  $("#btn20").hide();
    adiciona();
    
  });
   $("#btn21").click(function(){
  $("#b1").val('21');
  $("#btn21").hide();
    adiciona();
    
  });
   $("#btn22").click(function(){
  $("#b1").val('22');
 $("#btn22").hide();
    adiciona();
    
  });
   $("#btn23").click(function(){
  $("#b1").val('23');
  $("#btn23").hide();
    adiciona();
    
  });
   $("#btn24").click(function(){
  $("#b1").val('24');
  $("#btn24").hide();
    adiciona();
     
  });
   $("#btn25").click(function(){
  $("#b1").val('25');
  $("#btn25").hide();
    adiciona();
     
  });
  
 
});
</script>
</head>
<body>
   
<div class="w3-container" style="width:100%; text-align: center;">
 <br><br>
  <div class="w3-panel w3-card-4" >
<button class="w3-circle  w3-teal" style="width:50px" id="btn1"> 1 </button>
<button class="w3-circle  w3-teal"  style="width:50px" id="btn2"> 2 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn3"> 3 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn4"> 4 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn5"> 5 </button></div>
  <div class="w3-panel w3-card-4">
<button class="w3-circle  w3-teal" style="width:50px" id="btn6"> 6 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn7"> 7 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn8"> 8 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn9"> 9 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn10"> 10 </button></div>
  <div class="w3-panel w3-card-4">
<button class="w3-circle  w3-teal" style="width:50px" id="btn11"> 11 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn12"> 12 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn13"> 13 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn14"> 14 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn15"> 15 </button></div>
   <div class="w3-panel w3-card-4">
<button class="w3-circle  w3-teal" style="width:50px" id="btn16"> 16 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn17"> 17 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn18"> 18 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn19"> 19 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn20"> 20 </button></div><div class="w3-panel w3-card-4">
<button class="w3-circle  w3-teal" style="width:50px" id="btn21"> 21 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn22"> 22 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn23"> 23 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn24"> 24 </button>
<button class="w3-circle  w3-teal" style="width:50px" id="btn25"> 25 </button></div>
</div>
<form method="post" id="formulario"  enctype="multipart/form-data" name="regform"  > 
 <button type="submit" name="submit" hidden id="insere"> Inserir Jogo</button>
 <input  size="3" id="num1"  name="num1" value=""  readonly required hidden>
 <input  size="3" id="num2" name="num2" value="" readonly required hidden>
 <input  size="3" id="num3" name="num3" value="" readonly required hidden>
 <input  size="3" id="num4" name="num4" value="" readonly required hidden>
 <input  size="3" id="num5" name="num5" value="" readonly required hidden>
 <input  size="3" id="num6" name="num6" value="" readonly required hidden>
 <input  size="3" id="num7" name="num7" value="" readonly required hidden>
 <input  size="3" id="num8" name="num8" value="" readonly required hidden>
 <input  size="3" id="num9" name="num9" value="" readonly required hidden>
 <input  size="3" id="num10" name="num10" value="" readonly required hidden>
 <input  size="3" id="num11" name="num11" value="" readonly required hidden>
 <input  size="3" id="num12" name="num12" value="" readonly required hidden>
 <input  size="3" id="num13" name="num13" value="" readonly required hidden>
 <input  size="3" id="num14" name="num14" value="" readonly required hidden>
 <input  size="3" id="num15" name="num15" value="" readonly required hidden>
<input  size="3" id="b1" value="" hidden>
</form>


<script>
var jogo = [];
//document.getElementById("demo").innerHTML = jogo;

function adiciona() {
    
  
 tam=jogo.length;

jogo.push(document.getElementById("b1").value);
   if(jogo.length<=14){
      //var x=document.getElementById("b1").value;   
  
   jogo.sort();
  

  //document.getElementById("demo").innerHTML = jogo;
  
  }else {
       jogo.sort(function(a, b) {
  return a - b;
       });
       $("#btn1").hide();
        $("#btn2").hide();
         $("#btn3").hide();
          $("#btn4").hide();
      $("#btn5").hide();
        $("#btn6").hide();
        $("#btn7").hide();
        $("#btn8").hide();
         $("#btn9").hide();
         $("#btn10").hide();
        $("#btn11").hide();
       $("#btn12").hide();
       $("#btn13").hide();
       $("#btn14").hide();
       $("#btn15").hide();
       $("#btn16").hide();
       $("#btn17").hide();
       $("#btn18").hide();
       $("#btn19").hide();
       $("#btn20").hide();
       $("#btn21").hide();
       $("#btn22").hide();
       $("#btn23").hide();
       $("#btn24").hide();
       $("#btn25").hide();
   $("#insere").show();
   $("#num1").show();
   $("#num2").show();
   $("#num3").show();
   $("#num4").show();
   $("#num5").show();
   $("#num6").show();
   $("#num7").show();
   $("#num8").show();
   $("#num9").show();
   $("#num10").show();
   $("#num11").show();
   $("#num12").show();
   $("#num13").show();
   $("#num14").show();
   $("#num15").show();
   
   
    var suaString= jogo.toString();
  var array = suaString.split(',');
          
            var var1 = array[0];
            var var2 = array[1];
            var var3 = array[2];
            var var4 = array[3];
            var var5 = array[4];
            var var6 = array[5];
            var var7 = array[6];
            var var8 = array[7];
            var var9 = array[8];
            var var10 = array[9];
            var var11 = array[10];
            var var12 = array[11];
            var var13 = array[12];
            var var14= array[13];
             var var15= array[14];
            //	document.getElementById('xxx').value=suaString;
			document.getElementById('num1').value=var1;
			document.getElementById('num2').value=var2;
			document.getElementById('num3').value=var3;
			document.getElementById('num4').value=var4;
			document.getElementById('num5').value=var5;
			document.getElementById('num6').value=var6;
			document.getElementById('num7').value=var7;
			document.getElementById('num8').value=var8;
			document.getElementById('num9').value=var9;
			document.getElementById('num10').value=var10;
			document.getElementById('num11').value=var11;
			document.getElementById('num12').value=var12;
			document.getElementById('num13').value=var13;
			document.getElementById('num14').value=var14;
			document.getElementById('num15').value=var15;
  }
  
}

</script>
<div id="poll">
<?php

$cmd = "SELECT * FROM jogo where user= '".$id_user."' order by id desc";
$tal = $conn->query($cmd);

//conta o total de itens
$total = mysqli_num_rows($tal);
	
		  echo "Meus Jogos - ". $total ."<br>";

		   for($i =1; $i <= $total; $i++){ 
	  
			$busca1=$conn->query("select  n1,n2, n3, n4, n5, n6, n7, n8,n9,n10,n11,n12,n13,n14,n15 from jogo where  id='".$iddr['id']."'");
			$iddr=mysqli_fetch_array($tal);
		   $result1=mysqli_fetch_array($busca1);
	
		 //asort($iddr);
		  //$talao = array_unique($result1);
		  // echo $iddr['id'];
		   echo "<div class='w3-panel w3-card'><div class='w3-container' style='width:80%'>".$iddr['id']."<input type='image' src='img/del.png' style='width: 20px;' value='".$iddr['id']."'  onclick='getVote(this.value)'>";
echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px' readonly  value='".$iddr['n1']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n2']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n3']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n4']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n5']."'></b>";
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n6']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n7']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n8']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n9']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n10']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n11']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n12']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n13']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n14']."'></b>"; 
 echo "<b><input type='button' class='w3-circle  w3-teal' style='width:50px'readonly  value='".$iddr['n15']."'></b>"; 
 
 echo "</div></div><br>";
}
?>
<br><br>
</div>
<script>
function getVote(int) {
    
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      
      document.location.reload(true);
    }
  }
  //xmlhttp.open("GET","delete.php?num="+int,true);
 // xmlhttp.send();
 alert('Não esta autorizado excluir, entre em contato com administrador');
}

  
</script>

</body>
</html>

  
 
   

