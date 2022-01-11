<?php
 include('data/appml.php');						//Seleciona banco de dados
  if (isset($_GET) &&(!empty($_GET))){
  $id=$_GET['num'];	//Pegando dados passados por AJAX
  
  //Consulta no banco de dados
  $sql="delete from jogo  where id='".$id."'"; 
  $resultados = mysqli_query($conn,$sql)or die (mysqli_error());
  //$res=mysqli_fetch_array($resultados); //

  }
  
 
?>