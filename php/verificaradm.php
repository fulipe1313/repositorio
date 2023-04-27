<?php
session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if (!isset($_SESSION['nomeadm'])) {
    
    //Limpa
    unset ($_SESSION['nomeadm']);
    
      session_destroy();
    //Redireciona para a página de autenticação
   echo "<script> window.location.href='admlogin.php';</script>";
   
}
?>
