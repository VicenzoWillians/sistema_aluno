<?php
    include('cabecalho.inc');

    if(empty($_POST)){
        echo '<form action="cons_aluno_ra.php" method="POST">
            <fieldset>
                <legend>Consultar Aluno por RA</legend>
                <p>
                    <label>Informe o RA do aluno: </label>
                    <input type="number" name="id" required/>
                </p>
                <input type="submit" value="Consultar">
            </fieldset>
        </form>';

        echo "<a href='menu.php'>Voltar ao Menu</a>";
    } else{
        $id=$_POST["id"];

        include('conexao.php');

        $consulta = "SELECT * FROM pessoas WHERE id_pessoa=$id";
        $query=mysqli_query($con, $consulta);

        if($consulta){
            if(mysqli_num_rows($query)>0){
                include('tabela_cons_ra.inc');
    
                while(($resultado=mysqli_fetch_assoc($query))!=null){
                    echo"<tr>
                        <td>" . $resultado['id_pessoa'] . "</td>
                        <td>" . $resultado['nome_pessoa'] . "</td>
                        <td>" . $resultado['idade_pessoa'] . "</td>
                        <td>" . $resultado['endereco_pessoa'] . "</td>
                    </tr>";
                }
    
                include('fim_tabela.inc');
            } else{
                echo "<h2>RA não está cadastrado</h2>";
            }
        } else{
            echo "Erro de Sintaxe SQL<br/>";
            echo mysqli_error($con);
        }

        echo "<a href='menu.php'>Voltar ao Menu</a>";

        mysqli_close($con);

        include('rodape.inc');
    }
?>