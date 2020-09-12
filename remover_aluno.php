<?php
    $ra=$_GET['ra'];

    include('conexa.php');

    $SQL = "DELETE FROM pessoas WHERE id=$ra";

    include('fecha_conexao.php');
    
    header('location:cons_todos_alunos.php');

?>