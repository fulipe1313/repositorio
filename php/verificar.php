<?php
session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if (!isset($_SESSION['aluno'])) {
    
    //Limpa
    unset ($_SESSION['aluno']);
    
      session_destroy();
    //Redireciona para a página de autenticação
    header('location: ./login/index.html');
   
}
