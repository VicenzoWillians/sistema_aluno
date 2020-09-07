<?php
    include('cabecalho.inc');
?>
        <form action="insere.php" method="POST">
            <fieldset>
                <legend>Inserir Aluno</legend>
                <p>
                    <label>Nome: </label>
                    <input type="text" name="nome"/>
                </p>
                <p>
                    <label>Endereço: </label>
                    <input type="text" name="endereco"/>
                </p>
                <p>
                    <label>Idade: </label>
                    <input type="number" name="idade"/>
                </p>
                <input type="submit" value="Cadastrar"/>
            </fieldset>
        </form>
<?php
    include('rodape.inc');
?>