<?php
    $nome=$_POST["nome"];
    $endereco=$_POST["endereco"];
    $idade=$_POST["idade"];

    include('conexao.php');

    $SQL="INSERT INTO pessoas (nome_pessoa, endereco_pessoa, idade_pessoa)
        VALUES ('$nome', '$endereco', '$idade')";

    $texto = "Aluno Inserido com Sucesso<br/>";

    include('fecha_conexao.php');
?>