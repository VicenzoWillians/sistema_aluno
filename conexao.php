<?php
    //Conexão entre PHP - Banco de Dados
    $con=mysqli_connect("localhost", "root", "");

    if(!$con){
        echo mysqli_connect_error($con);
    }

    //Seleção do Banco de Dados
    $db = mysqli_select_db($con, "Alunos");
    
    if(!$db){
        echo mysqli_error($con);
    }
?>