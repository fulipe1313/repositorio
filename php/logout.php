<?php
 session_start();
 session_destroy();
 
    //Limpa
    unset ($_SESSION['aluno']);
    unset ($_SESSION['id']);
    unset ($_SESSION['serie']);
    unset ($_SESSION['matricula']);
    
session_unset();
     
    //Redireciona para a página de autenticação
    header('location:../login');