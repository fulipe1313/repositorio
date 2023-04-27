<?php
 session_start();
 include("conexao.php");

 $nome = $_POST['nome']; 
 $senha = $_POST['senha']; 
 

 $query = "SELECT * FROM adm where usuario = '$nome' and senha = '$senha'";
 $resultado = mysqli_query($conexao, $query);
 $user = mysqli_fetch_assoc($resultado); 

 if(mysqli_num_rows ($resultado) > 0){
     
     $_SESSION['nomeadm'] = $user['nome'];
     $_SESSION['idadm'] = $user['id'];
    
      header("location: ../admturma.php");
     
 }else{
    
    
    
     header("location: ../admlogin.php");
     
 }

?>





