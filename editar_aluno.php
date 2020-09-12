<?php
    include('cabecalho.inc');

    $id=$_GET['ra'];

    include('conexao.php');

    $resultado_aluno = "SELECT * FROM pessoas WHERE id_pessoa=$id";
    $query=mysqli_query($con, $resultado_aluno);
    $aluno=mysqli_fetch_assoc($query);

    echo '<form action="proc_edita_aluno.php" method="POST">
            <fieldset>
                <legend>Editar Aluno</legend>
                <input type="hidden" name="id" value="' . $aluno['id_pessoa'] . '"/>
                <p>
                    <label>Nome: </label>
                    <input type="text" name="nome" value="' . $aluno['nome_pessoa'] . '"/>
                </p>
                <p>
                    <label>Endereço: </label>
                    <input type="text" name="endereco" value="' . $aluno['endereco_pessoa'] . '"/>
                </p>
                <p>
                    <label>Idade: </label>
                    <input type="number" name="idade" value="' . $aluno['idade_pessoa'] . '"/>
                </p>
                <input type="submit" value="Editar"/>
            </fieldset>
        </form>';

    echo "<a href='cons_todos_alunos.php'>Voltar a lista de alunos</a>";

    mysqli_close($con);

    include('rodape.inc');
?>