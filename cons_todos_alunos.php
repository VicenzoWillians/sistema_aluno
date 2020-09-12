<?php
    include('cabecalho.inc');
    include('conexao.php');

    $consulta = "SELECT * FROM pessoas";
    $query=mysqli_query($con, $consulta);

    include('tabela.inc');

    if($consulta){
        if(mysqli_num_rows($query)>0){
            while(($resultado=mysqli_fetch_assoc($query))!=null){
                echo "<tr>
                    <td>" . $resultado['id_pessoa'] . "</td>
                    <td>" . $resultado['nome_pessoa'] . "</td>
                    <td>" . $resultado['idade_pessoa'] . "</td>
                    <td>" . $resultado['endereco_pessoa'] . "</td>
                    <td><a href='editar_aluno.php?ra=$resultado[id_pessoa]'>Editar</a></td>
                    <td><a href='remover_aluno.php?ra=$resultado[id_pessoa]'>Excluir</a></td>
                </tr>";
            }
        } else{
            echo "<h2>Nenhum aluno cadastrado.</h2>";
        }
    } else{
        echo "Erro de Sintaxe SQL.<br/>";
        echo mysqli_error($con);
    }

    include('fim_tabela.inc');
    echo "<a href='menu.php'>Voltar ao Menu</a>";

    mysqli_close($con);

    include('rodape.inc');
?>