<?php include("data/password_protect.php"); ?>
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

$dar=$_POST['datax'];
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


    
$sql ="INSERT INTO `loteria` ( Data, B1, B2, B3, B4, B5, B6, B7, B8, B9, B10, B11, B12, B13, B14, B15) VALUES('".$dar."',$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15)";
//$conn->query($sql);

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  //header('Location: atualiza.php');
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
  if($("#b1").val()=='1')
  {
    $("#b1").val('');
    $("#btn1").html("1");
    
  }else{
  $("#b1").val('1');
    $("#btn1").html("<b style='color:red'> 1 </b>");
    $("#btn1").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn2").click(function(){
  if($("#b1").val()=='2')
  {
    $("#b1").val('');
    $("#btn2").html("2");
  }else{
  $("#b1").val('2');
    $("#btn2").html("<b style='color:red'> 2 </b>");
     $("#btn2").hide();
    adiciona();
  }
  
  });
  $("#btn3").click(function(){
  if($("#b1").val()=='3')
  {
    $("#b1").val('');
    $("#btn3").html("3");
  }else{
  $("#b1").val('3');
    $("#btn3").html("<b style='color:red'> 3 </b>");
  $("#btn3").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn4").click(function(){
  if($("#b1").val()=='4')
  {
    $("#b1").val('');
    $("#btn4").html("4");
  }else{
  $("#b1").val('4');
    $("#btn4").html("<b style='color:red'> 4 </b>");
  $("#btn4").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn5").click(function(){
  if($("#b1").val()=='5')
  {
    $("#b1").val('');
    $("#btn5").html("5");
  }else{
  $("#b1").val('5');
    $("#btn5").html("<b style='color:red'> 5 </b>");
  $("#btn5").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn6").click(function(){
  if($("#b1").val()=='6')
  {
    $("#b1").val('');
    $("#btn6").html("6");
  }else{
  $("#b1").val('6');
    $("#btn6").html("<b style='color:red'> 6 </b>");
 $("#btn6").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn7").click(function(){
  if($("#b1").val()=='7')
  {
    $("#b1").val('');
    $("#btn7").html("7");
  }else{
  $("#b1").val('7');
    $("#btn7").html("<b style='color:red'> 7 </b>");
$("#btn7").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn8").click(function(){
  if($("#b1").val()=='8')
  {
    $("#b1").val('');
    $("#btn8").html("8");
  }else{
  $("#b1").val('8');
    $("#btn8").html("<b style='color:red'> 8 </b>");
 $("#btn8").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn9").click(function(){
  if($("#b1").val()=='9')
  {
    $("#b1").val('');
    $("#btn9").html("9");
  }else{
  $("#b1").val('9');
    $("#btn9").html("<b style='color:red'> 9 </b>");
  $("#btn9").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn10").click(function(){
  if($("#b1").val()=='10')
  {
    $("#b1").val('');
    $("#btn10").html("10");
  }else{
  $("#b1").val('10');
    $("#btn10").html("<b style='color:red'> 10 </b>");
  $("#btn10").hide();
    adiciona();
     }
      $("#b1").val('');
  });
    $("#btn11").click(function(){
  if($("#b1").val()=='11')
  {
    $("#b1").val('');
    $("#btn11").html("11");
  }else{
  $("#b1").val('11');
    $("#btn11").html("<b style='color:red'> 11 </b>");
  $("#btn11").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn12").click(function(){
  if($("#b1").val()=='12')
  {
    $("#b1").val('');
    $("#btn12").html("12");
  }else{
  $("#b1").val('12');
    $("#btn12").html("<b style='color:red'> 12 </b>");
  $("#btn12").hide();
    adiciona();
     }
      $("#b1").val('');
  });
  
  
  
   $("#btn13").click(function(){
  if($("#b1").val()=='13')
  {
    $("#b1").val('');
    $("#btn13").html("13");
  }else{
  $("#b1").val('13');
    $("#btn13").html("<b style='color:red'> 13 </b>");
 $("#btn13").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn14").click(function(){
  if($("#b1").val()=='14')
  {
    $("#b1").val('');
    $("#btn14").html("14");
  }else{
  $("#b1").val('14');
    $("#btn14").html("<b style='color:red'> 14 </b>");
  $("#btn14").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn15").click(function(){
  if($("#b1").val()=='15')
  {
    $("#b1").val('');
    $("#btn15").html("15");
  }else{
  $("#b1").val('15');
    $("#btn15").html("<b style='color:red'> 15 </b>");
  $("#btn15").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn16").click(function(){
  if($("#b1").val()=='16')
  {
    $("#b1").val('');
    $("#btn16").html("16");
  }else{
  $("#b1").val('16');
    $("#btn16").html("<b style='color:red'> 16 </b>");
  $("#btn16").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn17").click(function(){
  if($("#b1").val()=='17')
  {
    $("#b1").val('');
    $("#btn17").html("17");
  }else{
  $("#b1").val('17');
    $("#btn17").html("<b style='color:red'> 17 </b>");
  $("#btn17").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn18").click(function(){
  if($("#b1").val()=='18')
  {
    $("#b1").val('');
    $("#btn18").html("18");
  }else{
  $("#b1").val('18');
    $("#btn18").html("<b style='color:red'> 18 </b>");
  $("#btn18").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn19").click(function(){
  if($("#b1").val()=='19')
  {
    $("#b1").val('');
    $("#btn19").html("19");
  }else{
  $("#b1").val('19');
    $("#btn19").html("<b style='color:red'> 19 </b>");
  $("#btn19").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn20").click(function(){
  if($("#b1").val()=='20')
  {
    $("#b1").val('');
    $("#btn20").html("20");
  }else{
  $("#b1").val('20');
    $("#btn20").html("<b style='color:red'> 20 </b>");
  $("#btn20").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn21").click(function(){
  if($("#b1").val()=='21')
  {
    $("#b1").val('');
    $("#btn21").html("21");
  }else{
  $("#b1").val('21');
    $("#btn21").html("<b style='color:red'> 21 </b>");
  $("#btn21").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn22").click(function(){
  if($("#b1").val()=='22')
  {
    $("#b1").val('');
    $("#btn22").html("22");
  }else{
  $("#b1").val('22');
    $("#btn22").html("<b style='color:red'> 22 </b>");
 $("#btn22").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn23").click(function(){
  if($("#b1").val()=='23')
  {
    $("#b1").val('');
    $("#btn23").html("23");
  }else{
  $("#b1").val('23');
    $("#btn23").html("<b style='color:red'> 23 </b>");
  $("#btn23").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn24").click(function(){
  if($("#b1").val()=='24')
  {
    $("#b1").val('');
    $("#btn24").html("24");
  }else{
  $("#b1").val('24');
    $("#btn24").html("<b style='color:red'> 24 </b>");
  $("#btn24").hide();
    adiciona();
     }
      $("#b1").val('');
  });
   $("#btn25").click(function(){
  if($("#b1").val()=='25')
  {
    $("#b1").val('');
    $("#btn25").html("25");
  }else{
  $("#b1").val('25');
    $("#btn25").html("<b style='color:red'> 25 </b>");
  $("#btn25").hide();
    adiciona();
     }
      $("#b1").val('');
  });
  
 
});
</script>
</head>
<body>
   
<div class="w3-container">
 
  <div class="w3-panel w3-card"><button class="w3-button  w3-teal" style="width:15%" id="btn1"> 1 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn2"> 2 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn3"> 3 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn4"> 4 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn5"> 5 </button></div>
  <div class="w3-panel w3-card-2"><button class="w3-button  w3-teal" style="width:15%" id="btn6"> 6 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn7"> 7 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn8"> 8 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn9"> 9 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn10"> 10 </button></div>
  <div class="w3-panel w3-card-4"><button class="w3-button  w3-teal" style="width:15%" id="btn11"> 11 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn12"> 12 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn13"> 13 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn14"> 14 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn15"> 15 </button></div>
   <div class="w3-panel w3-card-4"><button class="w3-button  w3-teal" style="width:15%" id="btn16"> 16 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn17"> 17 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn18"> 18 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn19"> 19 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn20"> 20 </button></div>
    <div class="w3-panel w3-card-4"><button class="w3-button  w3-teal" style="width:15%" id="btn21"> 21 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn22"> 22 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn23"> 23 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn24"> 24 </button>
<button class="w3-button  w3-teal" style="width:15%" id="btn25"> 25 </button></div>
</div>
<form method="post"  enctype="multipart/form-data" name="regform" > 
 <button type="submit" name="submit" hidden id="insere"> Inserir </button>
 <input  size="3" id="num1"  name="num1" value="" readonly required hidden>
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
<input  type="date" id="datax" name="datax" value=""  required >
</form>


<script>
var jogo = [];
document.getElementById("demo").innerHTML = jogo;

function adiciona() {
var tam=jogo.length+1;
var x=document.getElementById("b1").value;

   if(tam<=15){
  jogo.push(x);
   jogo.sort();
  document.getElementById("demo").innerHTML = jogo;
  
  }else {
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

</body>
</html>

  
 
   

