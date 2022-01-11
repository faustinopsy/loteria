<?php

if(!isset($_SESSION)){
    	session_start();
	}

	$id_user = $_SESSION['nomeUsuario'];

	if(!isset ($_SESSION['nomeUsuario'])) {
    	header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<title>Lotofácil - fácil</title>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3pro.css">
<script src="js/w3.js"></script>
<body onload="document.getElementById('id01').style.display='none'">

<?php
include('header.php');
include('data/appml.php');

$sql = "SELECT Concurso, DATE_FORMAT(Data, '%d/%m/%Y') as Data FROM loteria order by Concurso DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<div class='modal-dialog'>Resutado 12 Pontos Garantidos
 <div class='modal-content' ><a href='#abaixo' name='topo'><input type='button' color='#FFFFCC'  value='IR PARA O FIM'></a> <div class='modal-header'><form method='get' >
<span id=layer1 class=a1></span>
<span id=layer1 class=a1></span>
</td>
</tr>
<tr>
   <select name='data' id='data'>";
     
    while($row = $result->fetch_assoc()) {
        
     echo("<option value='". $row['Concurso']."'>". $row['Data']." - Conc - ". $row['Concurso']."</option>");
    }
  
} else {
    echo "0 results";
}
echo "</select></tr><tr></tr></table><td> <input type='submit' name='OK' value='Conferir'><td><br></form></div>  <div class='modal-body'>";

?>


<?php
if(isset($_GET['OK'])){
	 $Data= $_GET['data'];


		   $buscax="select B1,B2,B3,B4,B5,B6,B7,B8,B9,B10,B11,B12,B13,B14,B15 from loteria where Concurso = $Data";
		   $busca=$conn->query($buscax);
		   $resultx=mysqli_fetch_array($busca);
		   $sorteio = array_unique($resultx);
		   $cmd = "SELECT * FROM taloes12";
$tal = $conn->query($cmd);

//conta o total de itens
$total = mysqli_num_rows($tal);
		  echo "Numeros do sorteio<br>";
sort($sorteio);
foreach ($sorteio as $s){
	$checks = "";
	echo "<b><input type='button' readonly  value=$s></b>"; 
}
echo " Concurso ", $Data;
	$r=0;
	$q11=0;
$q12=0;
$q13=0;
$q14=0;
$q15=0;
		   for($i =1; $i <= $total; $i++){ 
			$busca1=$conn->query("select  B1,B2,B3,B4,B5,B6,B7,B8,B9,B10,B11,B12,B13,B14,B15 from taloes12 where n= $i");
			
		   $result1=mysqli_fetch_array($busca1);
		   $talao = array_unique($result1);
$q=0;
$q2=0;
$x=0;
$x1=0;

$zo=1;
echo "<br><br> Tal&atilde;o $i<br>";
foreach ($talao as $t){
	$check = "";
	if (in_array($t,$sorteio)){
	  $check = $t;
	  $q ++;
	}
	echo "<input type='button'   readonly  value=$check X >"; 
}
$t=sizeof($talao); 
echo " Acertos ",$q;
if($q==11)
{$x1=5;
$zo=1;
$q11+=$zo;
$r+=$x1;
	print ("<TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#FF0000'><B>= $x1 Reais</B></FONT></TD>");}
else
	if($q===12)
{$x1=10;
$zo=1;
$q12+=$zo;
$r+=$x1;
	print ("<TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#FF0000'><B>= $x1 Reais</B></FONT></TD>");}
else
if($q===13)
{$x1=25;
$zo=1;
$q13+=$zo;
$r+=$x1;
	print ("<TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#FF0000'><B>= $x1 Reais</B></FONT></TD>");}
else
if($q===14)
{   $x1=1500;
	$zo=1;
	$q14+=$zo;
	$r+=$x1;
	print ("<TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#FF0000'><B>= $x1 Reais</B></FONT></TD>");}
 else
if($q===15)
{$zo=1;
	$q15+=$zo;
	print ("<TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#FF0000'><B>= Premio a verificar</B></FONT></TD>");
 }
else
{echo "- 0 Reais";}
}
echo "<br><br><TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#228B22'><B> Ganho da rodada ",$r, " Reais </B></FONT></TD>";
 echo "<br><br><TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#228B22'><B> ",$q11, " de 11 Pontos </B></FONT></TD>";
 echo "<br><br><TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#228B22'><B>  ",$q12, " de 12 Pontos </B></FONT></TD>";
 echo "<br><br><TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#228B22'><B>  ",$q13, " de 13 Pontos </B></FONT></TD>";
 echo "<br><br><TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#228B22'><B> ",$q14, " de 14 Pontos </B></FONT></TD>";
 echo "<br><br><TD ALIGN='center' bgcolor='#FFFFCC'><FONT
 COLOR='#228B22'><B> ",$q15, " de 15 Pontos</B></FONT></TD>";
 echo "<br><br><br><br><TD ALIGN='center' bgcolor='#000000'></TD>";
 }
?>

<!---<a href="v11.pdf"><input type='button'   value="Taloes"></a>
<a href="L11.txt"><input type='button'   value="Lista"></a> --->
<a href="#topo" name="abaixo"><input type='button'   value="IR PARA O INICIO"></a>
<br><br><br><br>
 <div class="modal-footer">
<FONT
 COLOR='#000000'></FONT>




  </div>
  </div>
</div>
</div>
</body>
</html>

  
 
   

