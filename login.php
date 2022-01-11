<?php
 include('data/appml.php');						//Seleciona banco de dados
  if (isset($_POST) &&(!empty($_POST))){
  $login=$_POST['login'];	//Pegando dados passados por AJAX
  $senha=$_POST['senha'];
  
  //Consulta no banco de dados
  $sql="select * from usuario where login='".$login."' and senha='".$senha."'"; 
  $resultados = mysqli_query($conn,$sql)or die (mysqli_error());
  $res=mysqli_fetch_array($resultados); //
	if (@mysqli_num_rows($resultados) == 0){
		echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas
	}
	
	else{
	    	
	    $_SESSION['usuarioID']=$res['id']; 		
		$_SESSION['nomeUsuario']=$res['login'];
	
		echo 1;	//Responde sucesso
		if(!isset($_SESSION)) 	//verifica se há sessão aberta
		session_start();		//Inicia seção
		//Abrindo seções
		
		exit;	
	}
  }
?>