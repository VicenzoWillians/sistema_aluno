<?php
    $id=$_POST["id"];
    $nome=$_POST["nome"];
    $endereco=$_POST["endereco"];
    $idade=$_POST["idade"];

    include('conexao.php');

    $resultado_aluno = "UPDATE pessoas SET nome_pessoa='$nome', endereco_pessoa='$endereco', idade_pessoa='$idade'
        WHERE id_pessoa='$id' ";

    $query=mysqli_query($con, $resultado_aluno);

    if(mysqli_affected_rows($con)){
        echo "<p style='color:green;'>
            Aluno editado com sucesso.
        </p>";
    } else{
        echo "<p style='color:red;'>
            Aluno não foi editado com sucesso. Não houve alterações.
        </p>";
    }

    echo "<a href='cons_todos_alunos.php'>Voltar a lista de alunos</a>";

    mysqli_close($con);
?>