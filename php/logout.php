<?php
 session_start();
 session_destroy();
 
    //Limpa
    unset ($_SESSION['nome']);
    unset ($_SESSION['id']);
    
session_unset();
     ?>