<?php
session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if (!isset($_SESSION['nome'])) {
    
    //Limpa
    unset ($_SESSION['nome']);
    
      session_destroy();
    //Redireciona para a página de autenticação
   echo "<script> window.location.href='login.php';</script>";
   
}
?>
