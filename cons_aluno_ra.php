<?php
    include('cabecalho.inc');

    if(empty($_POST)){
        echo '<form action="cons_aluno_ra.php" method="POST">
            <fieldset>
                <legend>Consultar Aluno por RA</legend>
                <p>
                    <label>Informe o RA do aluno: </label>
                    <input type="number" name="id"/>
                </p>
                <input type="submit" value="Consultar">
            </fieldset>
        </form>';
    } else{
        $id=$_POST["id"];

        include('conexao.php');

        $consulta = "SELECT * FROM pessoas WHERE id_pessoa=$id";
        $query=mysqli_query($con, $consulta);

        include('tabela.inc');

        if(mysqli_num_rows($query)>0){
            while(($resultado=mysqli_fetch_assoc($query))!=null){
                echo"<tr>
                    <td>" . $resultado['id_pessoa'] . "</td>
                    <td>" . $resultado['nome_pessoa'] . "</td>
                    <td>" . $resultado['idade_pessoa'] . "</td>
                    <td>" . $resultado['endereco_pessoa'] . "</td>
                </tr>";
            }
        } else{
            echo mysqli_error($con);
        }

        include('fim_tabela.inc');
        echo "<a href='menu.php'>Voltar ao Menu</a>";

        mysqli_close($con);

        include('rodape.inc');
    }
?>