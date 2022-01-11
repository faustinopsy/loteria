<?php

	
include('header.php');
include('data/appml.php');


if (isset($_POST) &&(!empty($_POST))){


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
$user=$_POST['user'];


    
$sql ="INSERT INTO jogo(n1,n2, n3, n4, n5, n6, n7, n8,n9,n10,n11,n12,n13,n14,n15,user) VALUES($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$user)";
//$conn->query($sql);
$resultados = mysqli_query($conn,$sql)or die (mysqli_error());
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  
  //header('Location: atualiza.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



  }else{
      
      echo "erro";
  }


?>