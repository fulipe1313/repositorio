<?php 
 session_start();
 include("conexao.php");

 $nome = $_POST['nome']; 
 $senha = $_POST['senha']; 
 

 $query = "SELECT * FROM usuarios where usuario = '$nome' and senha = '$senha'";
 $resultado = mysqli_query($conexao, $query);
 $user = mysqli_fetch_assoc($resultado); 

 if(mysqli_num_rows ($resultado) > 0){
     
     $_SESSION['nome'] = $user['nome'];
    # $_SESSION['id'] = $user['id'];
    
      header("location: ../index.php");
     
 }else{
    
    
    
     header("location: ../login.php");
     
 }

?>



