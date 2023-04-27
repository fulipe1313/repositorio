<?php
 session_start();
 session_destroy();
 
    //Limpa
    unset ($_SESSION['nomeadm']);
    unset ($_SESSION['idadm']);
    
session_unset();
     ?>